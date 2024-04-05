<div class="card mb-3 bg-grey" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{$img}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body d-flex flex-column justify-content-between h-100">
                <div>
                     <h5 class="card-title ms-3 text-white text-truncate">{{$albumName}}</h5>
                    <p class="card-text ms-3 text-white">{{$artist}}</p>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{route('album' , ['id' => $albumId])}}" class="btn btn-success">Apri Album</a>
                </div>
            </div>
        </div>
    </div>
</div>