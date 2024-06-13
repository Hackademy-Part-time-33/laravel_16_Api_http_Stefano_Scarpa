<x-main>

    <div class="container mt-5">
    <ul class="list-group">
        @foreach ($data as $item)    
        <li class="list-group-item"><a href="{{route('anime.genre.list', ['id' => $item['mal_id']])}}">{{$item['name']}}</a></li>
        @endforeach
        
      </ul>
    </div>

</x-main>