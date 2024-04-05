<x-layout>
    <div class="container-fluid" style="margin-top: 170px;">
        <div class="row justify-content-center ">
            <div class="col-10 text-center btn-success rounded">
                <h1 class="text-white my-5 display-2">
                    Ricerca Album
                </h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center mt-5">
            @foreach ($searched['albums']['items'] as $album)
                <div class="col-md-6 mt-5">
                    <x-card 
                        img="{{$album['images']['0']['url']}}"
                        albumName="{{$album['name']}}"
                        artist="{{$album['artists']['0']['name']}}"
                        albumId="{{$album['id']}}"
                    />
                </div>
            @endforeach      
        </div>
    </div>
</x-layout>