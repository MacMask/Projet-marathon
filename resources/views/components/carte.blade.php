<div class="card" style="width: 18rem;">
    <img src="{{ $jeu->url_media}}" class="card-img-top" alt="avatar">
    <div class="card-body">
        <h5 class="card-title">{{$jeu->nom}}</h5>
        <p class="card-text">{{$jeu->theme -> nom}}</p>
        <p class="card-text">{{$jeu->editeur -> nom}}</p>
        @foreach($jeu -> mecaniques as $mecanique)
            #{{$mecanique->nom}}
        @endforeach
    </div>
</div>
