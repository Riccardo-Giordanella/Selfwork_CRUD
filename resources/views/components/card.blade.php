<div class="card mt-4" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <p class="card-text">{{$article->body}}</p>
        <p class="card-text">{{$article->author}}</p>
        <div class="buttonwrapper container">
            <a href="{{route('articles.detail', compact('article'))}}"><button type="button" class="btn btn-primary me-2">Dettaglio</button></a>
            <a href=""><button type="button" class="btn btn-warning me-2">Modifica</button></a>
            <a href=""><button type="button" class="btn btn-danger me-2">Elimina</button></a>
        </div>
    </div>
</div>