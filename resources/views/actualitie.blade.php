@foreach($actualities as $actualitie)
    {{$actualitie->name}}
    {{$actualitie->text}}
    @foreach($actualitie->images as $image)
        <img src="{{asset('images/actualities/actualities_'.$actualitie->id.'/'.$image->name)}}" alt="" class="img-fluid">
    @endforeach

@endforeach
