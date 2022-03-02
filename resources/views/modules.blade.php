@foreach($modules as $module)
     <p>Product name: {{$module->part_names[0]->name}}</p>
     <p>Product price: {{$module->price}}</p>
     <p>Product surface: {{$module->surface}}</p>
     <p>Product text: {{$module->part_texts[0]->text}}</p>

        <div class="col-lg-6 mb-5">
            @foreach($module->part_images as $part_img)
                <img style="max-width:200px; max-height: 200px;" src="{{asset('images/parts/part_'.$module->id.'/'.$part_img->name)}}">
            @endforeach
        </div>

@endforeach
