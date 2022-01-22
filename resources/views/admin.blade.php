@extends('layouts.app')

@section('title', 'Admin page')

@section('componentcss')
    <style>
        .product_edit, .product_add{
            background-color: #ede9e8;
            padding: 40px;
            position: absolute;
            z-index: 99;
            margin-left: 30%;
            display: none;
        }
        .img_table{
            max-height: 150px;
            max-width: 150px;
        }
        .edit_photos{
            margin-top: 10px;
            padding: 10px;
        }
        .edit_photos > img{
            max-width: 100px;
            max-height: 100px;
        }
        .delete_photo{
            margin-top: 3px;
        }
    </style>
@endsection

@section('sidebar')
    <h1>Admin Panel</h1>
@endsection

@section('content')

    <button class="add_product_modal btn btn-success">Add new Product</button>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="product_add">

        <form method="post" action="{{url('/admin/add_product')}}" enctype="multipart/form-data">

            @csrf
            <h3>Add new Product</h3>
            <p>All values must be inserted</p>
            <div class="row">
                <div class="form-group">
                    <label for="product_name">Name :</label>
                    <input id="product_name" name="name" type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="product_price">Price :</label>
                    <input id="product_price" name="price" type="number" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="product_en">EN :</label>
                    <input id="product_en" name="en" type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="product_de">DE :</label>
                    <input id="product_de" name="de" type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <label for="photo_upload">Upload Images</label>
                <input type="file" name="photos[]" class="form-control uploaded_photo" id="photo_upload" multiple="">
            </div>
            <div class="row">
                <button type="submit" class="btn btn-success">Save Product</button>
                <button class="close_new_product btn btn-danger">Close</button>
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
                <div class="product_edit edit_modal_{{$product->id}}">

                    <form method="post" action="{{url('/admin/edit_product')}}" enctype="multipart/form-data">

                        @csrf
                        <h3>Edit Product</h3>
                        <p>All values must be inserted</p>
                        <input name="product_id" type="hidden" value="{{$product->id}}">
                        <div class="row">
                            <div class="form-group">
                                <label>Name :</label>
                                <input name="name" type="text" class="form-control" value="{{$product->name}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Price :</label>
                                <input name="price" type="number" class="form-control" value="{{$product->price}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>EN :</label>
                                <input name="en" type="text" class="form-control" value="{{$product->en}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>DE :</label>
                                <input name="de" type="text" class="form-control" value="{{$product->de}}">
                            </div>
                        </div>
                        <div class="row">
                            <label>Upload Images</label>
                            <input type="file" name="photos[]" class="form-control uploaded_photo" multiple="">
                        </div>

                        @if(!$product->images->isEmpty())
                            <div class="row">
                                @foreach($product->images as $image)
                                    <div class="col-md-4 edit_photo_{{$image->id}}">
                                        <div class="edit_photos">
                                            <img class="edit_img" alt="edit_image" src="{{asset('images/product_'.$product->id.'/'.$image->name)}}">
                                            <br>
                                            <button class="btn btn-danger btn-sm delete_photo" data-name="{{$image->name}}" data-id="{{$product->id}}" data-photoid="{{$image->id}}">Delete</button>
                                        </div>
                                    </div>
                                @endforeach
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
                    <td>@if(!$product->images->isEmpty())<img class="img_table" alt="image" src="{{asset('images/product_'.$product->id.'/'.$product->images[0]->name)}}">@else - @endif</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->en}}</td>
                    <td>{{$product->de}}</td>
                    <td>
                        <button class="edit_product btn btn-primary" data-id="{{$product->id}}">Edit</button>
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

            //add new product show modal
            $('.add_product_modal').click(function () {
                $('.product_add').show();
            });

            //add new product close modal
            $('.close_new_product').click(function (e) {
                e.preventDefault();
                $('.product_add').hide();
            });

            //edit product show modal
            $('.edit_product').click(function () {
                let id = $(this).data('id');
                $('.edit_modal_' + id).show();
            });

            //edit product close modal
            $('.close_edit_modal').click(function (e) {
                e.preventDefault();
                $('.product_edit').hide();
            });

            //edit product delete photo
            $('.delete_photo').click(function (e) {

                e.preventDefault();

                let image_name = $(this).data('name');
                let id = $(this).data('id');
                let photo_id = $(this).data('photoid');

                $.ajax({
                    url: '{{ url('/admin/delete_photo') }}',
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
        });
    </script>
@endsection
