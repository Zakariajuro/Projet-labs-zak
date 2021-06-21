<!-- Page Preloder -->
<div id="preloder">
    <div class="loader">
        <img src="img/logo.png" alt="">
        <h2>Loading.....</h2>
    </div>
</div>
<header class="header-section">
    <div class="logo">
        @foreach ($logos as $logo)
            <img height="40px" width="60px" src="{{asset('img/' . $logo->logo)}}" alt=""><!-- Logo -->        
        @endforeach
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{ Request::routeIs('homes') ? 'active' : '' }}"><a href="/">Home</a></li>
            <li class="{{ Request::routeIs('service.index') ? 'active' : '' }}"><a href="{{route('service.index')}}">Services</a></li>
            <li class="{{ Request::routeIs('blog.index') ? 'active' : '' }}"><a href="{{route('blog.index')}}">Blog</a></li>
            <li class="{{ Request::routeIs('contact.index') ? 'active' : '' }}"><a href="{{route('contact.index')}}">Contact</a></li>
        </ul>
    </nav>
</header>