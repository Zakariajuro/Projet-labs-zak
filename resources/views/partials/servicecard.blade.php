<!-- services card section-->
<div id="cartes" class="services-card-section spad">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            @foreach ($articles->take(3) as $item)
                
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="{{asset('img/' . $item->image)}}" alt="">
                    </div>
                    <div class="card-text">
                        <h2>{{$item->titre}}</h2>
                        <p>{{ Str::limit($item->description, 200, '...') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->
