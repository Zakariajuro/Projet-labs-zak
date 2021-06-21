<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            @foreach ($titrefea as $item)
            <h2>
                @php
                    $titre = str_replace('(', '<span>', $item->titre);
                    $titrebis = str_replace(')', '</span>', $titre);
                    echo $titrebis;
                @endphp
            </h2>
            @endforeach
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($features as $item)
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{$item->titre}}</h2>
                        <p>{{$item->description}}</p>
                    </div>
                    <div class="icon">
                        <i class="{{$item->icone->icone}}"></i>
                    </div>
                </div>
                @endforeach
                <!-- feature item -->
                
            </div>
            <!-- Devices -->
            @foreach ($featuresimage as $item)
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                        <img src="{{asset('img/' . $item->image)}}" alt="">
                    </div>
                </div>
                @endforeach
                
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($featurebis as $item)
                    
                <div class="icon-box light">
                    <div class="icon">
                        <i class="{{$item->icone->icone}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$item->titre}}</h2>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="text-center mt100">
            <a href="#cartes" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->
