@extends('layouts.appadmin')

@section('componentcss')
    <style>

    </style>
@endsection

@section('content')

    <button class="add_modal btn btn-success">Add new Part</button>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="modal_add">

        <form method="post" action="{{url('/admin/add_part')}}" enctype="multipart/form-data">

            @csrf
            <h3>Add new Part</h3>
            <p>All values must be inserted</p>
            <div class="row">
                <div class="form-group">
                    <label for="part_name">Name :</label>
                    <input id="part_name" name="name" type="text" class="form-control">
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
                <button class="close_new_modal btn btn-danger">Close</button>
            </div>

        </form>

    </div>

    <table id="product_part_table" class="display" style="width:100%">
        <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Image</th>
            <th class="text-center">Name</th>
            <th class="text-center">Price</th>
            <th class="text-center">Surface</th>
            <th class="text-center">EN</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>
        </tr>
        </thead>
        <tbody>
        @if(!$parts->isEmpty())
            @foreach ($parts as $part)
                <div class="modal_edit edit_modal_{{$part->id}}">

                    <form method="post" action="{{url('/admin/edit_part')}}" enctype="multipart/form-data">

                        @csrf
                        <h3>Edit Product</h3>
                        <p>All values must be inserted</p>
                        <input name="product_id" type="hidden" value="{{$part->id}}">
                        <div class="row">
                            <div class="form-group">
                                <label>Name :</label>
                                <input name="name" type="text" class="form-control" value="{{$part->name}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Price :</label>
                                <input name="price" type="number" class="form-control" value="{{$part->price}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>EN :</label>
                                <input name="en" type="text" class="form-control" value="{{$part->surface}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>DE :</label>
                                <input name="de" type="text" class="form-control" value="{{$part->en}}">
                            </div>
                        </div>
                        <div class="row">
                            <label>Upload Images</label>
                            <input type="file" name="photos[]" class="form-control uploaded_photo" multiple="">
                        </div>

{{--                        @if(!$product->images->isEmpty())--}}
{{--                            <div class="row">--}}
{{--                                @foreach($product->images as $image)--}}
{{--                                    <div class="col-md-4 edit_photo_{{$image->id}}">--}}
{{--                                        <div class="edit_photos">--}}
{{--                                            <img class="edit_img" alt="edit_image" src="{{asset('images/products/product_'.$product->id.'/'.$image->name)}}">--}}
{{--                                            <br>--}}
{{--                                            <button class="btn btn-danger btn-sm delete_photo" data-name="{{$image->name}}" data-id="{{$product->id}}" data-photoid="{{$image->id}}">Delete</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        @endif--}}

                        <div class="row">
                            <button type="submit" class="btn btn-success">Save Part Changes</button>
                            <button class="close_edit_modal btn btn-danger">Close</button>
                        </div>

                    </form>



                </div>
                <tr>
                    <td>{{$part->id}}</td>
                    <td> - </td>
                    <td>{{$part->name}}</td>
                    <td>{{$part->price}}</td>
                    <td>{{$part->surface}}</td>
                    <td>{{$part->en}}</td>
                    <td>
                        <button class="edit_modal btn btn-primary" data-id="{{$part->id}}">Edit</button>
                    </td>
                    <td>
                        <button class="delete_product btn btn-danger" data-id="{{$part->id}}">Delete</button>
                    </td>
                </tr>
            @endforeach
        @else
            <h1>No parts!</h1>
        @endif
        </tbody>
    </table>

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            //datatables
            $('#product_part_table').DataTable({
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
                    url: '{{ url('/admin/delete_part') }}',
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
                    url: '{{ url('/admin/delete_part_photo') }}',
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
