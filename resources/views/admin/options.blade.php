@extends('layouts.appadmin')

@section('componentcss')
    <style>

    </style>
@endsection

@section('content')

    <button class="add_modal btn btn-success">Add new Option</button>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="modal_add">

        <form method="post" action="{{url('/admin/add_option')}}" enctype="multipart/form-data">

            @csrf
            <h3>Add new Option</h3>
            <p>All values must be inserted</p>
            <div class="row">
                <label for="option_name">Name :</label>
                <input id="option_name" name="name" type="text" class="form-control">
            </div>
            <div class="row">
                <label for="option_price">Price :</label>
                <input id="option_price" name="price" type="text" class="form-control">
            </div>
            <div class="row">
                <label for="option_surface">Surface :</label>
                <input id="option_surface" name="surface" type="text" class="form-control">
            </div>
            <div class="row">
                <label class="label_lang" for="option_en">EN :</label>
                <textarea name="en" type="text" class="form-control textarea_cls"></textarea>
            </div>
            <div class="row">
                <label class="label_lang" for="option_de">DE :</label>
                <textarea name="de" type="text" class="form-control textarea_cls"></textarea>
            </div>
            <div class="row">
                <label for="photo_upload">Upload Images</label>
                <input type="file" name="photos[]" class="form-control uploaded_photo" id="photo_upload" multiple="">
            </div>
            <div class="row">
                <button type="submit" class="btn btn-success">Save Option</button>
                <button class="close_new_modal btn btn-danger">Close</button>
            </div>

        </form>

    </div>

    <table id="option_table" class="display" style="width:100%">
        <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Image</th>
            <th class="text-center">Name</th>
            <th class="text-center">Price</th>
            <th class="text-center">Surface</th>
            <th class="text-center">EN</th>
            <th class="text-center">DE</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>
        </tr>
        </thead>
        <tbody>
        @if(!$options->isEmpty())
            @foreach ($options as $option)
                <div class="modal_edit edit_modal_{{$option->id}}">

                    <form method="post" action="{{url('/admin/edit_option')}}" enctype="multipart/form-data">

                        @csrf
                        <h3>Edit Option</h3>
                        <p>All values must be inserted</p>
                        <input name="option_id" type="hidden" value="{{$option->id}}">
                        <div class="row">
                            <label>Name :</label>
                            <input name="name" type="text" class="form-control" value="{{$option->name}}">
                        </div>
                        <div class="row">
                            <label>Price :</label>
                            <input name="price" type="number" step="any" class="form-control" value="{{$option->price}}">
                        </div>
                        <div class="row">
                            <label for="option_surface">Surface :</label>
                            <input id="option_surface" name="surface" type="text" class="form-control">
                        </div>
                        <div class="row">
                            <label class="label_lang">EN :</label>
                            <textarea name="en" type="text" class="form-control textarea_cls">{{$option->en}}</textarea>
                        </div>
                        <div class="row">
                            <label class="label_lang">DE :</label>
                            <textarea name="de" type="text" class="form-control textarea_cls">{{$option->de}}</textarea>
                        </div>
                        <div class="row">
                            <label>Upload Images</label>
                            <input type="file" name="photos[]" class="form-control uploaded_photo" multiple="">
                        </div>

                        @if(!$option->option_images->isEmpty())
                            <div class="row">
                                @foreach($option->option_images as $image)
                                    <div class="col-md-4 edit_photo_{{$image->id}}">
                                        <div class="edit_photos">
                                            <img class="edit_img" alt="edit_image" src="{{asset('images/options/option_'.$option->id.'/'.$image->name)}}">
                                            <br>
                                            <button class="btn btn-danger btn-sm delete_photo" data-name="{{$image->name}}" data-id="{{$option->id}}" data-photoid="{{$image->id}}">Delete</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <div class="row">
                            <button type="submit" class="btn btn-success">Save Option Changes</button>
                            <button class="close_edit_modal btn btn-danger">Close</button>
                        </div>

                    </form>

                </div>
                <tr>
                    <td>{{$option->id}}</td>
                    <td>@if(!$option->option_images->isEmpty())<img class="img_table" alt="image" src="{{asset('images/options/option_'.$option->id.'/'.$option->option_images[0]->name)}}">@else - @endif</td>
                    <td>{{$option->name}}</td>
                    <td>{{$option->price}}</td>
                    <td>{{$option->surface}}</td>
                    <td>{{$option->en}}</td>
                    <td>{{$option->de}}</td>
                    <td>
                        <button class="edit_modal btn btn-primary" data-id="{{$option->id}}">Edit</button>
                    </td>
                    <td>
                        <button class="delete_option btn btn-danger" data-id="{{$option->id}}">Delete</button>
                    </td>
                </tr>
            @endforeach
        @else
            <h1>No options!</h1>
        @endif
        </tbody>
    </table>

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            //datatables
            $('#option_table').DataTable({
                "pageLength": 10,
                "columnDefs": [ {
                    "className": "dt-center",
                    "targets": "_all"
                } ]
            });

            //delete option
            $('.delete_option').click(function () {

                if(!confirm('Are you sure you want to delete option?')){
                    return false;
                }

                let id = $(this).data('id');
                $.ajax({
                    url: '{{ url('/admin/delete_option') }}',
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

            //edit option delete photo
            $('.delete_photo').click(function (e) {

                e.preventDefault();

                if(!confirm('Are you sure you want to delete option photo?')){
                    return false;
                }

                let image_name = $(this).data('name');
                let id = $(this).data('id');
                let photo_id = $(this).data('photoid');

                $.ajax({
                    url: '{{ url('/admin/delete_option_photo') }}',
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
