<x-main>

    <div class="container mt-5">
    <ul class="list-group">
        @foreach ($data as $item)    
        <li class="list-group-item"><a href="{{route('anime.detail', ['id' => $item['mal_id']])}}">{{$item['title']}}</a></li>
        @endforeach
        
      </ul>
    </div>

</x-main>