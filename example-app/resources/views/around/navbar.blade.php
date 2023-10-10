        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('front.home')}}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : ''}}">Home</a>
                <a href="{{route('front.about')}}" class="nav-item nav-link {{ (request()->is('about')) ? 'active' : ''}}">About</a>
                <a href="{{route('front.service')}}" class="nav-item nav-link {{ (request()->is('service')) ? 'active' : ''}}">Services</a>
                <a href="{{route('front.packages')}}" class="nav-item nav-link {{ (request()->is('service')) ? 'active' : ''}}">Packages</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{request()->is('destination')  ? 'active' : ''}}" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('front.destination')}}" class="dropdown-item {{request()->is('destination')  ? 'active' : ''}}">Destination</a>
                        <a href="{{route('front.booking')}}" class="dropdown-item {{request()->is('booking')  ? 'active' : ''}}">Booking</a>
                        <a href="{{route('front.guides')}}" class="dropdown-item {{request()->is('guides')  ? 'active' : ''}}">Travel Guides</a>
                        <a href="{{route('front.testimonail')}}" class="dropdown-item {{request()->is('testimonail')  ? 'active' : ''}}">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{route('front.contact')}}" class="nav-item nav-link {{request()->is('contact')  ? 'active' : ''}}">Contact</a>
            </div>
            <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
        </div>
<!--Navbar & Hero end-->