<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <p class="card-text">{{$article->description}}</p>
        <p class="card-text">{{$article->author}}</p>
        <a href=""><button type="button" class="btn btn-primary">Dettaglio</button></a>
        <a href=""><button type="button" class="btn btn-warning">Modifica</button></a>
        <a href=""><button type="button" class="btn btn-danger">Elimina</button></a>
    </div>
</div>