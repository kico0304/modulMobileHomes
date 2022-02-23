@extends('layouts.appadmin')

@section('componentcss')
    <style>
        input[type=checkbox] + label {
            width: 60px;
            margin-bottom: 2px;
            text-align: center;
            padding: 2px 5px;
            border-radius: 4px;
            color: #fff;
        }

        input[type=checkbox]:checked + label {
            background-color: rgba(90, 120, 217, 1);
        }

        input[type=checkbox]:not(:checked) + label {
            background-color: #888;
        }
    </style>
@endsection

@section('content')

    <button class="add_modal btn btn-success">Add new Options</button>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="modal_add">

        <form method="post" action="{{url('/admin/add_options')}}" enctype="multipart/form-data">

            @csrf
            <h3>Add new Options</h3>
            <p>All values must be inserted</p>
            <div class="row">
                <label for="name">Name :</label>
                <input id="name" name="name" type="text" class="form-control">
            </div>
            <div class="row">
                <label>Text :</label>
                <textarea name="text" type="text" class="form-control"></textarea>
            </div>
            <div class="row" style="margin-top: 10px; margin-bottom: 10px;">
                @foreach($language as $lang)
                    <input name="lang_{{$lang->id}}" id="options_{{$lang->lang}}" type="checkbox" hidden>
                    <label for="options_{{$lang->lang}}" style="margin-left: 3px;">{{strtoupper($lang->lang)}}</label>
                @endforeach
            </div>
            <div class="row">
                <button type="submit" class="btn btn-success">Save Options</button>
                <button class="close_new_modal btn btn-danger">Close</button>
            </div>

        </form>

    </div>

    <table id="options_table" class="display" style="width:100%">
        <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Name</th>
            <th class="text-center">Price</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>
        </tr>
        </thead>
        <tbody>
        @if(!$options->isEmpty())
            @foreach ($options as $option)

                <div class="modal_edit edit_modal_{{$option->id}}">

                    <form method="post" action="{{url('/admin/edit_options')}}" enctype="multipart/form-data">

                        @csrf
                        <h3>Edit Options</h3>
                        <p>All values must be inserted</p>
                        <input name="options_id" type="hidden" value="{{$option->id}}">
                        <div class="row">
                            <label>Name :</label>
                            <input name="name" type="text" class="form-control" value="{{$option->name}}">
                        </div>
                        <div class="row">
                            <label for="text">Text :</label>
                            <input id="text" name="text" type="text" class="form-control" value="{{$option->text}}">
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-success">Save Option Changes</button>
                            <button class="close_edit_modal btn btn-danger">Close</button>
                        </div>

                    </form>

                </div>
                <tr>
                    <td>{{$option->id}}</td>
                    <td>{{$option->name}}</td>
                    <td>{{$option->price}}</td>
                    <td>
                        <button class="edit_modal btn btn-primary" data-id="{{$option->id}}">Edit</button>
                    </td>
                    <td>
                        <button class="delete_options btn btn-danger" data-id="{{$option->id}}">Delete</button>
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
            $('#options_table').DataTable({
                "pageLength": 10,
                "columnDefs": [ {
                    "className": "dt-center",
                    "targets": "_all"
                } ]
            });

            //delete options
            $('.delete_options').click(function () {

                if(!confirm('Are you sure you want to delete options?')){
                    return false;
                }

                let id = $(this).data('id');
                $.ajax({
                    url: '{{ url('/admin/delete_options') }}',
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
        });
    </script>
@endsection
