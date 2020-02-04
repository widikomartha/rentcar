<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Model\Booking;

use Veritrans_Config;
use Veritrans_Snap;
use Veritrans_Notification;

class BookingsController extends Controller
{
/**
     * Make request global.
     *
     * @var \Illuminate\Http\Request
     */
    protected $request;
 
    /**
     * Class constructor.
     *
     * @param \Illuminate\Http\Request $request User Request
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
 
        // Set midtrans configuration
        Veritrans_Config::$serverKey = config('services.midtrans.serverKey');
        Veritrans_Config::$isProduction = config('services.midtrans.isProduction');
        Veritrans_Config::$isSanitized = config('services.midtrans.isSanitized');
        Veritrans_Config::$is3ds = config('services.midtrans.is3ds');
    }
 
    /**
     * Show index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data['booking'] = Booking::orderBy('id', 'desc')->paginate(8);
 
        return view('welcome', $data);
    }
 
    /**
     * Submit donation.
     *
     * @return array
     */
    public function submitBooking()
    {
        \DB::transaction(function(){
            // Save donasi ke database
            $booking = Booking::create([
                'id_users' => Auth::user()->id,
                'id_cars' =>  $this->request->id_cars,
                'tlp' => $this->request->tlp,
                'tgl_sewa' => $this->request->tgl_sewa,
                'tgl_kembali' => $this->request->tgl_kembali,
                'total' =>  $this->request->total,
            ]);
 
            // Buat transaksi ke midtrans kemudian save snap tokennya.
            $payload = [
                'transaction_details' => [
                    'order_id'      => $booking->id,
                    'gross_amount'  => $booking->total,
                ],
                'customer_details' => [
                    'first_name'    => Auth::user()->name,
                    'email'         => Auth::user()->email,
                    // 'phone'         => '08888888888',
                    // 'address'       => '',
                ],
                'item_details' => [
                    [
                        'id'       => $booking->id,
                        'price'    => $booking->total,
                        'quantity' => 1,
                        'name'     => ucwords(str_replace('_', ' ', $booking->id_cars))
                    ]
                ]
            ];
            $snapToken = Veritrans_Snap::getSnapToken($payload);
            $booking->snap_token = $snapToken;
            $booking->save();
 
            // Beri response snap token
            $this->response['snap_token'] = $snapToken;
        });
 
        return response()->json($this->response);
    }
 
    /**
     * Midtrans notification handler.
     *
     * @param Request $request
     * 
     * @return void
     */
    public function notificationHandler(Request $request)
    {
        $notif = new Veritrans_Notification();
        \DB::transaction(function() use($notif) {
 
          $transaction = $notif->transaction_status;
          $type = $notif->payment_type;
          $orderId = $notif->order_id;
          $fraud = $notif->fraud_status;
          $booking = Booking::findOrFail($orderId);
 
          if ($transaction == 'capture') {
 
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {
 
              if($fraud == 'challenge') {
                // TODO set payment status in merchant's database to 'Challenge by FDS'
                // TODO merchant should decide whether this transaction is authorized or not in MAP
                // $booking->addUpdate("Transaction order_id: " . $orderId ." is challenged by FDS");
                $booking->setPending();
              } else {
                // TODO set payment status in merchant's database to 'Success'
                // $booking->addUpdate("Transaction order_id: " . $orderId ." successfully captured using " . $type);
                $booking->setSuccess();
              }
 
            }
 
          } elseif ($transaction == 'settlement') {
 
            // TODO set payment status in merchant's database to 'Settlement'
            // $booking->addUpdate("Transaction order_id: " . $orderId ." successfully transfered using " . $type);
            $booking->setSuccess();
 
          } elseif($transaction == 'pending'){
 
            // TODO set payment status in merchant's database to 'Pending'
            // $booking->addUpdate("Waiting customer to finish transaction order_id: " . $orderId . " using " . $type);
            $booking->setPending();
 
          } elseif ($transaction == 'deny') {
 
            // TODO set payment status in merchant's database to 'Failed'
            // $booking->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is Failed.");
            $booking->setFailed();
 
          } elseif ($transaction == 'expire') {
 
            // TODO set payment status in merchant's database to 'expire'
            // $booking->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is expired.");
            $booking->setExpired();
 
          } elseif ($transaction == 'cancel') {
 
            // TODO set payment status in merchant's database to 'Failed'
            // $booking->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is canceled.");
            $booking->setFailed();
 
          }
 
        });
 
        return;
    }//
    
}
