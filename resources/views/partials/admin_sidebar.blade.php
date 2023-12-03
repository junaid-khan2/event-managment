<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Services</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseService" aria-expanded="false" aria-controls="collapseService">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Service
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseService" aria-labelledby="headingfour" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">                        
                        <a class="nav-link" href="{{route('admin.service.index')}}">All Service</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Events</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEvent" aria-expanded="false" aria-controls="collapseEvent">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Event
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseEvent" aria-labelledby="headingfour" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.event.create')}}">Add Event</a>
                        <a class="nav-link" href="{{route('admin.event.index')}}">All Event</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Category</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseEvent">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCategory" aria-labelledby="headingfour" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.category.create')}}">Add Category</a>
                        <a class="nav-link" href="{{route('admin.category.index')}}">All Category</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Booking & Provider</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Provider
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.provider.unverfived')}}">unverified</a>
                        <a class="nav-link" href="{{route('admin.provider.all')}}">All Service Provicer</a>
                        <a class="nav-link" href="{{route('admin.contact')}}">Contacts</a>
                    </nav>
                </div>

                {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsebooking" aria-expanded="false" aria-controls="collapsebooking">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Booking
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsebooking" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.booking.today')}}">ToDay</a>
                        <a class="nav-link" href="{{route('admin.booking.all')}}">All Booking</a>
                    </nav>
                </div> --}}
            
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{Auth::user()->name}}
        </div>
    </nav>
</div>