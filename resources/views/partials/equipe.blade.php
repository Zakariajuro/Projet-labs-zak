<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            @foreach ($titreequipe as $item)
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
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/{{$membre[0]->image}}" alt="">
                    <h2>{{$membre[0]->nom}}</h2>
                    <h3>{{$membre[0]->poste->poste}}</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/{{$ceo[0]->image}}" alt="">
                    <h2>{{$ceo[0]->nom}}</h2>
                    <h3>{{$ceo[0]->poste->poste}}</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/{{$membre[1]->image}}" alt="">
                    <h2>{{$membre[1]->nom}}</h2>
                    <h3>{{$membre[1]->poste->poste}}</h3>
                </div>
            </div>            
        </div>
    </div>
</div>
<!-- Team Section end-->
