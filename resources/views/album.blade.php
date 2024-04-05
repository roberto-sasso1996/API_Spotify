<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-6 mt-5">
                <img src="{{$album['images']['0']['url']}}" class="card-img-top" alt="...">
            </div>
            <div class="col-6 rounded bg-grey text-center mt-5 scroll">
                <div class="mt-4 mb-3">
                    <h3 class="card-title text-white">{{$album['name']}}</h3>
                    <p class="card-text text-white">{{$album['artists']['0']['name']}}</p>
                    <p class="card-text text-success"><small>{{$album['label']}}</small></p>
                </div>
                <h5 class="text-white">Tracce : </h5>
                <div class="d-flex flex-column ">
                    @foreach ($album['tracks']['items'] as $track)
                        <a href="{{$track['uri']}}" class="text-white">{{$track['name']}}</a>
                    @endforeach
                </div>
            </div>     
        </div>
    </div>
</x-layout>