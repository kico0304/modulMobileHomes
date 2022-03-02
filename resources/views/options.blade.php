@foreach($options as $option)
    <p>Option name: {{$option->names[0]->name}}</p>
    <p>Option text: {{$option->texts[0]->text}}</p>

    @foreach($option->attributes as $attribute)

        @php
            $att = explode('/', $attribute->attributes);
        @endphp

        @foreach($att as $at)

            @if($option->type == 'radio')
                <label>{{$at}}</label>
                <input type="{{$option->type}}" name="{{$option->names[0]->name}}" value="{{$at}}">
            @else
                <label>{{$at}}</label>
                <input type="{{$option->type}}" name="{{$at}}" value="{{$at}}">
            @endif

        @endforeach

    @endforeach

    <hr>
    <hr>

@endforeach
