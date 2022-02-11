@extends('layouts.appadmin')

@section('componentcss')
    <style>
        .product_part_row{
            display:none;
        }
        .product_part_row ~ .product_part_row{
            display:block;
        }
    </style>
@endsection

@section('content')

    <button class="add_modal btn btn-success">Add new Product</button>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="modal_add">

        <form method="post" action="{{url('/admin/add_product')}}" enctype="multipart/form-data">

            @csrf
            <h3>Add new Product</h3>
            <p>All values must be inserted</p>
            <div class="row">
                <label for="product_name">Name :</label>
                <input id="product_name" name="name" type="text" class="form-control">
            </div>
            <div class="row">
                <label for="product_price">Price :</label>
                <input id="product_price" name="price" type="number" step="0.01" class="form-control">
            </div>
            <div class="row">
                <label class="label_lang" for="product_en">EN :</label>
                <textarea name="en" type="text" class="form-control textarea_cls"></textarea>
            </div>
            <div class="row">
                <label class="label_lang" for="product_de">DE :</label>
                <textarea name="de" type="text" class="form-control textarea_cls"></textarea>
            </div>
            @foreach($parts as $part)
                <div class="row product_part_row">
                    <label for="part_{{$part->id}}">Product Part</label><br>
                    <select class="form-control part_pro" id="part_{{$part->id}}" name="part_{{$part->id}}">
                        <option value="">Select Category</option>
                        @foreach($parts as $part)
                            <option name="{{$part->id}}" value="{{$part->name}}" data-id="{{$part->id}}">{{$part->name}}</option>
                        @endforeach
                    </select>
                </div>
            @endforeach
            <div class="row">
                <label for="photo_upload">Upload Images</label>
                <input type="file" name="photos[]" class="form-control uploaded_photo" id="photo_upload" multiple="">
            </div>
            <div class="row">
                <button type="submit" class="btn btn-success">Save Product</button>
                <button class="close_new_modal btn btn-danger">Close</button>
            </div>

        </form>

    </div>

    <table id="product_table" class="display" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Image</th>
                <th class="text-center">Name</th>
                <th class="text-center">Price</th>
                <th class="text-center">EN</th>
                <th class="text-center">DE</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
        @if(!$products->isEmpty())
            @foreach ($products as $product)
                <div class="modal_edit edit_modal_{{$product->id}}">

                    <form method="post" action="{{url('/admin/edit_product')}}" enctype="multipart/form-data">

                        @csrf
                        <h3>Edit Product</h3>
                        <p>All values must be inserted</p>
                        <input name="product_id" type="hidden" value="{{$product->id}}">
                        <div class="row">
                            <label>Name :</label>
                            <input name="name" type="text" class="form-control" value="{{$product->name}}">
                        </div>
                        <div class="row">
                            <label>Price :</label>
                            <input name="price" type="text" class="form-control" value="{{$product->price}}">
                        </div>
                        <div class="row">
                            <label class="label_lang">EN :</label>
                            <textarea name="en" type="text" class="form-control textarea_cls">{{$product->en}}</textarea>
                        </div>
                        <div class="row">
                            <label class="label_lang">DE :</label>
                            <textarea name="de" type="text" class="form-control textarea_cls">{{$product->de}}</textarea>
                        </div>
                        <div class="row">
                            <label>Upload Images</label>
                            <input type="file" name="photos[]" class="form-control uploaded_photo" multiple="">
                        </div>

                        @if(!$product->images->isEmpty())
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach($product->images as $image)
                                                <div class="col-md-4 edit_photo_{{$image->id}}">
                                                    <div class="edit_photos">
                                                        <img class="edit_img" alt="edit_image" src="{{asset('images/products/product_'.$product->id.'/'.$image->name)}}">
                                                        <br>
                                                        <button class="btn btn-danger btn-sm delete_photo" data-name="{{$image->name}}" data-id="{{$product->id}}" data-photoid="{{$image->id}}">Delete</button>
                                                    </div>
                                                </div>
                                        @endforeach
                                    </div>
                                </div>
                                <br>
                                <br>
                                <h4>Parts of product images</h4>
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach($product->product_parts as $parts)
                                            @foreach($parts->part_images as $prt_images)
                                                    <div class="col-md-4">
                                                        <img style="max-height: 100px; max-width: 100px;" alt="edit_image" src="{{asset('images/parts/part_'.$parts->id.'/'.$prt_images->name)}}">
                                                    </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <button type="submit" class="btn btn-success">Save Product Changes</button>
                            <button class="close_edit_modal btn btn-danger">Close</button>
                        </div>

                    </form>

                </div>
                <tr>
                    <td>{{$product->id}}</td>
                    <td>@if(!$product->images->isEmpty())<img class="img_table" alt="image" src="{{asset('images/products/product_'.$product->id.'/'.$product->images[0]->name)}}">@else - @endif</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->en}}</td>
                    <td>{{$product->de}}</td>
                    <td>
                        <button class="edit_modal btn btn-primary" data-id="{{$product->id}}">Edit</button>
                    </td>
                    <td>
                        <button class="delete_product btn btn-danger" data-id="{{$product->id}}">Delete</button>
                    </td>
                </tr>
            @endforeach
        @else
            <h1>No products!</h1>
        @endif
        </tbody>
    </table>

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            //datatables
            $('#product_table').DataTable({
                "pageLength": 10,
                "columnDefs": [ {
                    "className": "dt-center",
                    "targets": "_all"
                } ]
            });

            //delete product
            $('.delete_product').click(function () {

                if(!confirm('Are you sure you want to delete product?')){
                    return false;
                }

                let id = $(this).data('id');
                $.ajax({
                    url: '{{ url('/admin/delete_product') }}',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {'id': id},
                    type: 'post',
                    success: function (ret) {
                        location.reload();
                    },
                    error: function (err) {
                        alert("Error");
                    }
                })
            });

            //edit product delete photo
            $('.delete_photo').click(function (e) {

                e.preventDefault();

                if(!confirm('Are you sure you want to delete product?')){
                    return false;
                }

                let image_name = $(this).data('name');
                let id = $(this).data('id');
                let photo_id = $(this).data('photoid');

                $.ajax({
                    url: '{{ url('/admin/delete_product_photo') }}',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {'image_name': image_name, 'id': id, 'photo_id': photo_id},
                    type: 'post',
                    success: function (ret) {
                        $('.edit_photo_'+ret.image_id).hide();
                    },
                    error: function (err) {
                        alert("Error");
                    }
                })
            });

            //part product show next div
            $('.part_pro').change(function(){
                console.log('11');
                $(this).parents().prev().show();
            });
        });
    </script>
@endsection
