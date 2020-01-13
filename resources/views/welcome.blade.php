<!DOCTYPE html>

<html lang="en-us" class="no-js">

	<head>
		<meta charset="utf-8">
        <title>Wellcome</title>
        <meta name="description" content="Comming soon page - flat able">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Codedthemes">
        <!-- Favicon -->
        <link rel="icon" href="{!! asset('assets/admin-template/extra-pages\comming-soon\img\favicon.ico') !!}">
        <link rel="stylesheet" href="{!! asset('assets/admin-template/extra-pages\comming-soon\css\style-minimal-flat.css') !!}">
        <!-- feather Awesome -->
        <link rel="stylesheet" href="{!! asset('assets/admin-template/icon\feather\css\feather.css') !!}">
        <!-- Style.css -->
        <link rel="stylesheet" href="{!! asset('assets/admin-template/css\style.css') !!}">
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\modernizr.custom.js') }}"></script>
        <!-- Styles --> 
        <style>

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
	</head>

    <body>

    	<!-- Loading overlay -->
		<div id="loading" class="dark-back">
			<div class="loading-bar"></div>
			<span class="loading-text opacity-0">So Excited ?</span>
		</div>

		<!-- Canvas for particles animation -->
		<div id="particles-js"></div>

    	<!-- Informations bar on top of the screen -->
    	<div class="info-bar bar-intro opacity-0">

    		<div class="row">

                <div class="col-xs-12 col-sm-6 col-lg-6 info-bar-left">
                </div>

    			<div class="col-xs-12 col-sm-6 col-lg-6 info-bar-right">

    				<!-- Text or Icons, as you want :-) / Uncomment the part you need and comment or delete the other one -->

    				<!-- <p class="social-text">
    					<a href="#" target="_blank">TWITTER</a> / 
    					<a href="#" target="_blank">FACEBOOK</a> / 
    					<a href="#" target="_blank">YOUTUBE</a>
    				</p> -->

    				<p class="social-icon">
    					<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
    					<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
    					<a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
    					<a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
    					<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
    				</p>

    			</div>
    		</div>
    	</div>
    	<!-- END - Informations bar on top of the screen -->

        <!-- Slider Wrapper -->
        <div id="slider" class="sl-slider-wrapper">

			<div class="sl-slider">
			
				<!-- SLIDE 1 / Home -->
				<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
					
					<div class="sl-slide-inner">

						<div class="content-slide">

							<div class="container">

                                <h2 class="text-intro opacity-0"><i class="feather icon-aperture rotate-refresh"></i> <b>DOCAR</b></h2>
							
								<h1 class="text-intro opacity-0">Comming Soon</h1>

                                <h2 class="text-muted text-intro opacity-0"><span id="countdown"></span></h2>

                                <div class="links text-intro opacity-0">
                                    <a href="https://laravel.com/docs">Docs</a>
                                    <a href="https://laracasts.com">Laracasts</a>
                                    <a href="https://laravel-news.com">News</a>
                                    <a href="https://blog.laravel.com">Blog</a>
                                    <a href="https://nova.laravel.com">Nova</a>
                                    <a href="https://forge.laravel.com">Forge</a>
                                    <a href="https://vapor.laravel.com">Vapor</a>
                                    <a href="https://github.com/laravel/laravel">GitHub</a>
                                </div>

								<a data-dialog="somedialog" class="action-btn trigger text-intro opacity-0" href="{{route('home') }}">Click Me !</a>

                            </div>
                            
                                

						</div>
					</div>
				</div>
				<!-- END - SLIDE 1 / Home -->$

			</div>
			<!-- END - sl-slider -->

			

		</div>
		<!-- END - Slider Wrapper -->

        <!-- Newsletter Popup -->
		<div id="somedialog" class="dialog">

			<div class="dialog__overlay"></div>
					
			<!-- dialog__content -->
			<div class="dialog__content">

				<div class="header-picture"></div>
						
				<!-- dialog-inner -->
				<div class="dialog-inner">
							
					<h4>Notify Popup Highlight</h4>
							
					<p>Just write the pefect description for your launch product here.... <strong>Codedthemes Product launch in next XX weeks. Enjoy !!!</strong></p>

					<!-- Newsletter Form -->
					<div id="subscribe">

		                <form action="php/notify-me.php" id="notifyMe" method="POST">

		                    <div class="form-group">

		                        <div class="controls">
		                            
		                        	<!-- Field  -->
		                        	<input type="text" id="mail-sub" name="email" placeholder="Click here to write your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" class="form-control email srequiredField">

		                        	<!-- Spinner top left during the submission -->
		                        	<i class="fa fa-spinner opacity-0"></i>

		                            <!-- Button -->
		                            <button class="btn btn-lg submit">Submit</button>

		                            <div class="clear"></div>

		                        </div>

		                    </div>

		                </form>

						<!-- Answer for the newsletter form is displayed in the next div, do not remove it. -->
						<div class="block-message">

							<div class="message">

								<p class="notify-valid">

							</div>

						</div>
						<!-- END - Answer for the newsletter form is displayed in the next div, do not remove it. -->

        			</div>
        			<!-- END - Newsletter Form -->
				</div>
				<!-- END - dialog-inner -->

				<!-- Cross for closing the Newsletter Popup -->
				<button class="close-newsletter" data-dialog-close=""><i class="icon ion-android-close"></i></button>

			</div>
			<!-- END - dialog__content -->
						
		</div>
		<!-- END - Newsletter Popup -->

		<!-- //////////////////////\\\\\\\\\\\\\\\\\\\\\\ -->
	    <!-- ********** List of jQuery Plugins ********** -->
	    <!-- \\\\\\\\\\\\\\\\\\\\\\////////////////////// -->
		
		<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\jquery.easings.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\bootstrap.min.js') }}"></script>

		<!-- SlitSlider plugin -->
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\jquery.ba-cond.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\jquery.slitslider.js') }}"></script>

		<!-- Newsletter plugin -->
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\notifyMe.js') }}"></script>

		<!-- Popup Newsletter Form -->
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\classie.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\dialogFx.js') }}"></script>

		<!-- Particles effect plugin on the right -->
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\particles.js') }}"></script>

		<!-- Custom Scrollbar plugin -->
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\jquery.mCustomScrollbar.js') }}"></script>

		<!-- Countdown plugin -->
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\jquery.countdown.js') }}"></script>

		<script>
		$("#countdown")
			// Year/Month/Day Hour:Minute:Second
			.countdown("2020/03/01 00:00:00", function(event) {
				$(this).html(
					event.strftime('%D Days %Hh %Mm %Ss')
				);
		});
		</script>

		<!-- Main application scripts -->
        <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\main-flat.js') }}"></script>

	</body>

</html>