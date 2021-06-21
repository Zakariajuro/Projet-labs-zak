<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                @foreach ($contacts as $item)
                    
                <div class="section-title left">
                    <h2>{{$item->titre}}</h2>
                </div>
                <p>{{$item->description}}</p>
                <h3 class="mt60">{{$item->soustitre}}</h3>
                <p class="con-item">{{$item->adresse}}</p>
                <p class="con-item">{{$item->telephone}}</p>
                <p class="con-item">{{$item->email}}</p>
                @endforeach
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" action="{{route('contactobjet')}}" method="POST" id="con_form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" id="mail" name="mail" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <select style="padding: 10px" style="margin: 10px" name="objets" id="">
                                @foreach ($objets as $objet)
                                    <option value="{{$objet->objet}}">{{$objet->objet}}</option>
                                @endforeach
                            </select>
                            <textarea class="mt-5" name="message" placeholder="Message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->
