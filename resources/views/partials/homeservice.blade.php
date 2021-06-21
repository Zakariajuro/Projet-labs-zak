<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            @foreach ($hometitreservice as $item)
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
            <!-- single service -->
            @foreach ($homeservices as $item)
                
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{$item->icone->icone}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$item->titre}}</h2>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="text-center">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->
