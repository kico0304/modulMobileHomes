@foreach($products as $product)
    <p>Product name: {{$product->names[0]->name}}</p>
    <p>Product price: {{$product->price}}</p>
    <p>Product surface: {{$product->surface}}</p>
    <p>Product text: {{$product->texts[0]->text}}</p>
    <img class="img" alt="" src="{{asset('images/products/product_'.$product->id.'/'.$product->images[0]->name)}}">
@endforeach
