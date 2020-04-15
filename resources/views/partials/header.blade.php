<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<!-- <a href="{{ route('register') }}">Register</a> -->
					<h1 id="fh5co-logo"><a href="{{ route('trip') }}"><i class="icon-airplane"></i>Travel</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.html">Home</a></li>
							<li>
								<a href="vacation.html" class="fh5co-sub-ddown">Vacations</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li>
							<li><a href="flight.html">Flights</a></li>
							<li><a href="hotel.html">Hotel</a></li>
							<li><a href="car.html">Car</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>

							<li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">
                  
				@if ((Auth::User()))
				   {{ Auth::user()->name }}
				   <img src="{{asset('admin/images/admin.jpg')}}" id="avatar" class="avatar"> 

				@else
					<img id="avatar" src="{{asset('images/anonymous.png')}}" class="avatar"> 

				@endif	
                  
				  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('public.dashboardhome') }}" class="dropdown-item"><i class="fa fa-user-o"></i> Dash Board</a></li>
                  <li><a class="nav-link {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}" href="{{ url('/profile/'.Auth::user()->name) }}">
                                {!! trans('titles.profile') !!}
                   </a></li>
				  
                  <li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></li>
                  <li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
                  <li class="divider dropdown-divider"></li>
                  <li><a href="{{route('logout')}}" class="dropdown-item"><i class="material-icons">&#xE8AC;</i>
                    Logout</a>
                  </li>
                </ul>
              </li>

						</ul>
					</nav>
				</div>
			</div>
		</header>
