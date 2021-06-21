<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            @foreach ($logos as $logo)
            <img src="{{asset('img/' . $logo->logo)}}" alt="">
            @endforeach
            <p>Get your freebie template now!</p>
            
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
            @foreach ($carrousels as $carrousel)
            <div class="item  hero-item" data-bg="{{asset('img/' . $carrousel->image)}}"></div>
            @endforeach
        </div>
</div>
<!-- Intro Section -->