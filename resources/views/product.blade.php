@foreach($products as $product)
    <p>Product name: {{$product->names[0]->name}}</p>
    <p>Product price: {{$product->price}}</p>
    <p>Product surface: {{$product->surface}}</p>
    <p>Product text: {{$product->texts[0]->text}}</p>
    @foreach($product->images as $image)
        <img class="edit_img" alt="edit_image" src="{{asset('images/products/product_'.$product->id.'/'.$image->name)}}">
    @endforeach
    @foreach($product->product_parts as $part)
        <p>Product part name: {{$part->part_names[0]->name}}</p>
        <p>Product part text: {{$part->part_texts[0]->text}}</p>
        @foreach($part->part_images as $part_img)
            <img class="img" alt="edit_image" src="{{asset('images/parts/part_'.$part->id.'/'.$part_img->name)}}">
        @endforeach
    @endforeach
@endforeach
