<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @foreach ($newsletter as $item)
                    <h2>{{$item->titre}}</h2>                    
                @endforeach
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form method="POST" action="{{route('newsletter')}}" class="nl-form">
                    @csrf
                    <input name="mail" type="text" placeholder="Your e-mail here">
                    <button class="site-btn btn-2">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->