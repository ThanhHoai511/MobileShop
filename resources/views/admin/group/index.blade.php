@extends('admin.layouts.app')
@section('title', 'Category')
@section('content')
    @include('admin.layouts.flash-msg')
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                	<a href="{{ route('addGroup') }}"><button class="btn btn-primary" style="margin-bottom: 20px;">Add</button></a>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Color</th>
                                <th>Ram</th>
                                <th>Memory</th>
                                <th style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($group as $group)
                                <tr>
                                    <td>{{ $group->id }}</td>
                                    <td>{{ $group->color }}</td>
                                    <td>{{ $group->ram }}</td>
                                    <td>{{ $group->memory }}</td>
                                    <td>
                                    	<a href="{{ route('editGroup', $group->id) }}"><button class="btn btn-success">Edit</button></a>
                                    	<a href="{{ route('deleteGroup', $group->id) }}" onclick="return confirm('Ban co chac chan muon xoa?')"><button class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection
