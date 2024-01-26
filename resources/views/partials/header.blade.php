	<!-- header-section - start
		================================================== -->
		<header id="header-section" class="header-section default-header-section auto-hide-header clearfix">

			<!-- header-top - start -->
			<div class="header-top">
				<div class="container">
					<div class="row">

						<!-- basic-contact - start -->
						<div class="col-lg-6">
							<div class="basic-contact">
								<ul>
									<li>
										<a href="#!">
											<i class="fas fa-envelope"></i>
											info@webifyevent.com
										</a>
									</li>
									<li>
										<a href="#!">
											<i class="fas fa-phone"></i>
											100-2222-9999
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- basic-contact - end -->

						<!-- register-login-group - start -->
						<div class="col-lg-6">
							<div class="register-login-group">
								
							</div>
						</div>
						<!-- register-login-group - end -->
						
					</div>
				</div>
			</div>
			<!-- header-top - end -->

			<!-- header-bottom - start -->
			<div class="header-bottom">
				<div class="container">
					<div class="row">

						<!-- site-logo-wrapper - start -->
						<div class="col-lg-3">
							<div class="site-logo-wrapper">
								<a href="{{route('index')}}" class="logo">
									{{-- <img src="assets/images/0.site-logo.png" alt="logo_not_found"> --}}
									<h3 style="color:#ffbe30"><strong>Webify Events</strong></h3>
								</a>
							</div>
						</div>
						<!-- site-logo-wrapper - end -->

						<!-- mainmenu-wrapper - start -->
						<div class="col-lg-9">
							<div class="mainmenu-wrapper">
								<div class="row">

									<!-- menu-item-list - start -->
									<div class="col-lg-10">
										<div class="menu-item-list ul-li clearfix">
											<ul>
												<li @if (Route::currentRouteName() == 'index') class="active" @endif>
												  <a href="{{route('index')}}">Home</a>
												</li>
                        <li @if (Route::currentRouteName() == 'event') class="active" @endif>
												  <a href="{{route('event')}}">Event</a>
												</li>
												<li @if (Route::currentRouteName() == 'services') class="active" @endif>
												  <a href="{{route('services')}}">Services</a>
												</li>
												
												<li  @if (Route::currentRouteName() == 'about') class="active" @endif>
												  <a href="{{route('about')}}">About Us</a>
												</li>
											
												<li @if (Route::currentRouteName() == 'contact') class="active" @endif>
												  <a href="{{route('contact')}}">contact</a>
												
												</li>
												<li @if (Route::currentRouteName() == 'mybooking') class="active" @endif>
												  <a href="{{route('mybooking')}}">My Booking</a>
												
												</li>
											  </ul>
										</div>
									</div>
									<!-- menu-item-list - end -->

									<!-- menu-item-list - start -->
									<div class="col-lg-2">
										<div class="user-search-btn-group ul-li clearfix">
											<ul>
												<li>
													<a href="{{route('serviceprovider.dashboard')}}">
														<i class="fas fa-user"></i>
													</a>
												</li>
												<li>
													<button type="button" class="toggle-overlay search-btn">
														<i class="fas fa-search"></i>
													</button>
													<!-- search-body - start -->
													<div class="search-body">
														<div class="search-form">
															<form action="#">
																<input class="search-input" type="search" placeholder="Search Here">
																<div class="outer-close toggle-overlay">
																	<button type="button" class="search-close">
																		<i class="fas fa-times"></i>
																	</button>
																</div>
															</form>
														</div>
													</div>
													<!-- search-body - end -->
												</li>
											</ul>
										</div>
									</div>
									<!-- menu-item-list - end -->

								</div>
							</div>
						</div>
						<!-- mainmenu-wrapper - end -->

					</div>
				</div>
			</div>
			<!-- header-bottom - end -->

		</header>
		<!-- header-section - end
		================================================== -->


  <!-- altranative-header - start
  ================================================== -->
  <div class="header-altranative">
    <div class="container">
      <div class="logo-area float-left">
        <a href="{{route('index')}}">
          {{-- <img src="{{asset('assets/images/1.site-logo.png')}}" alt="logo_not_found"> --}}
		  <h3 style="color:#ffbe30"><strong>Webify Events</strong></h3>
        </a>
      </div>

      <button type="button" id="sidebarCollapse" class="alt-menu-btn float-right">
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <!-- sidebar menu - start -->
    <div class="sidebar-menu-wrapper">
      <div id="sidebar" class="sidebar">
        <span id="sidebar-dismiss" class="sidebar-dismiss">
          <i class="fas fa-arrow-left"></i>
        </span>

        <div class="sidebar-header">
          <a href="#!">
            {{-- <img src="{{asset('assets/images/2.site-logo.png')}}" alt="logo_not_found"> --}}
			<h3 style="color:#ffbe30"><strong>Webify Events</strong></h3>
          </a>
        </div>

        <!-- sidebar-form - start -->
        <div class="sidebar-form">
          <form action="#">
            <input id="altmenu-sidebar-search" type="search" placeholder="Search">
            <label for="altmenu-sidebar-search"><i class="fas fa-search"></i></label>
          </form>
        </div>
        <!-- sidebar-form - end -->

        <!-- other-pages-links - start -->
        <div class="menu-link-list other-pages-links">
          <h2 class="menu-title">all pages</h2>
          <ul>
            <li>
              <a href="{{route('index')}}">
                <span class="icon"><i class="fas fa-home"></i></span>
                Home
              </a>
            </li>
            <li>
              <a href="{{route('about')}}">
                <span class="icon"><i class="fas fa-home"></i></span>
                About Us
              </a>
            </li>
            <li>
              <a href="{{route('services')}}">
                <span class="icon"><i class="fas fa-home"></i></span>
                our Services
              </a>
            </li>
            <li>
              <a href="{{route('event')}}">
                <span class="icon"><i class="fas fa-home"></i></span>
                event 
              </a>
            </li>
          
            <li>
              <a href="{{route('contact')}}">
                <span class="icon"><i class="fas fa-home"></i></span>
                contact us
              </a>
            </li>
          </ul>
        </div>
        <!-- other-pages-links - end -->


        <!-- login-btn-group - start -->
        <div class="login-btn-group">
          <ul>

            <li>
              <a href="#alt-register-modal" class="register-modal-btn">
                Register
              </a>
              <div id="alt-register-modal" class="reglog-modal-wrapper register-modal mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
                <div class="overlay-black clearfix">

                  <!-- leftside-content - start -->
                  <div class="leftside-content">

                    <div class="site-logo-wrapper mb-80">
                      <a href="#!" class="logo">
                        {{-- <img src="{{asset('assets/images/2.site-logo.png')}}" alt="logo_not_found"> --}}
						<h5 style="color:#ffbe30"><strong>Webify Events</strong></h5>
                      </a>
                    </div>
                    <div class="register-login-link mb-80">
                      <ul>
                        <li><a href="#!">Login</a></li>
                        <li class="active"><a href="#!">Register</a></li>
                      </ul>
                    </div>
                    <div class="copyright-text">
                      <p class="m-0 text-light">©2023 <a href="#!" class="yellow-color">webifyevent.com</a> all right reserved, made with <i class="fas fa-heart"></i> by Zulfiqar Ali Zeb </p>
                    </div>
                  </div>
                  <!-- leftside-content - end -->

                  <!-- rightside-content - start -->
                  <div class="rightside-content text-center">

                    <div class="mb-30">
                      <h2 class="form-title title-large white-color">Account <strong>Register</strong></h2>
                      <span class="form-subtitle white-color">Have an account? <strong>LOGIN NOW</strong></span>
                    </div>

                    <div class="login-form text-center mb-50">
                      <form action="{{route('serviceprovider.register')}}" method="POST">
						@csrf
                        <div class="form-item">
                          <input type="text" placeholder="User Name">
                        </div>
						<div class="form-item">
							<input type="email" name="email" placeholder="Email Address">
						</div>
						<div class="form-item">
							<input type="number" placeholder="Phone Number">
						</div>
                        <div class="form-item">
                          <input type="password" placeholder="Password">
                        </div>
                       
                      

                        <button type="submit" class="login-btn">login now</button>
                      </form>
                    </div>

                    <div class="bottom-text white-color">
                      <p class="m-0">
                        * Denotes mandatory field.
                      </p>
                      <p class="m-0">** At least one telephone number is required.</p>
                    </div>

                  </div>
                  <!-- rightside-content - end -->

                  <a class="popup-modal-dismiss" href="#!">
                    <i class="fas fa-times"></i>
                  </a>

                </div>
              </div>
            </li>
            <li>
              <a href="#alt-login-modal" class="login-modal-btn">
                Login
              </a>
              <div id="alt-login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
                <div class="overlay-black clearfix">

                  <!-- leftside-content - start -->
                  <div class="leftside-content">
                    <div class="site-logo-wrapper mb-80">
                      <a href="#!" class="logo">
                        <img src="{{asset('assets/images/2.site-logo.png')}}" alt="logo_not_found">
                      </a>
                    </div>
                    <div class="register-login-link mb-80">
                      <ul>
                        <li class="active"><a href="#!">Login</a></li>
                        <li><a href="#!">Register</a></li>
                      </ul>
                    </div>
                    <div class="copyright-text">
                      <p class="m-0">©2018 <a href="#!" class="yellow-color">Harmoni.com</a> all right reserved, made with <i class="fas fa-heart"></i> by jThemes Studio </p>
                    </div>
                  </div>
                  <!-- leftside-content - end -->

                  <!-- rightside-content - start -->
                  <div class="rightside-content text-center">

                    <div class="mb-30">
                      <h2 class="form-title title-large white-color">Account <strong>Login</strong></h2>
                      <span class="form-subtitle white-color">Login to our website, or <strong>REGISTER</strong></span>
                    </div>

                    <div class="fb-login-btn mb-30">
                      <a href="#!">
                        <span class="icon">
                          <i class="fab fa-facebook-f"></i>
                        </span>
                        login with facebook
                      </a>
                    </div>

                    <div class="or-text mb-30">
                      <span>or sign in</span>
                    </div>

                    <div class="login-form text-center mb-50">
                      <form action="#!">
                        <div class="form-item">
                          <input type="email" placeholder="example@gmail.com">
                        </div>
                        <div class="form-item">
                          <input type="password" placeholder="Password">
                        </div>
                        <button type="submit" class="login-btn">login now</button>
                      </form>
                    </div>

                    <div class="bottom-text white-color">
                      <p class="m-0">
                        * Denotes mandatory field.
                      </p>
                      <p class="m-0">** At least one telephone number is required.</p>
                    </div>

                  </div>
                  <!-- rightside-content - end -->

                  <a class="popup-modal-dismiss" href="#!">
                    <i class="fas fa-times"></i>
                  </a>

                </div>
              </div>
            </li>
            
          </ul>
        </div>
        <!-- login-btn-group - end -->

        <!-- social-links - start -->
        <div class="social-links">
          <h2 class="menu-title">get in touch</h2>
          <div class="mb-15">
            <h3 class="contact-info">
              <i class="fas fa-phone"></i>
              100-2222-9999
            </h3>
            <h3 class="contact-info">
              <i class="fas fa-envelope"></i>
              info@harmoni.com
            </h3>
          </div>
          <ul>
            <li>
              <a href="#!"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="#!"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href="#!"><i class="fab fa-twitch"></i></a>
            </li>
            <li>
              <a href="#!"><i class="fab fa-google-plus-g"></i></a>
            </li>
            <li>
              <a href="#!"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
          <a href="contact.html" class="contact-btn">contact us</a>
        </div>
        <!-- social-links - end -->

        <div class="overlay"></div>
      </div>
    </div>
    <!-- sidebar menu - end -->
  </div>
  <!-- altranative-header - end
  ================================================== -->