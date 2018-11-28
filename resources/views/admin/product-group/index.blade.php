@extends('admin.layouts.app')
@section('title', 'Category')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                	<a href="{{ route('addProductGroup') }}"><button class="btn btn-primary" style="margin-bottom: 20px;">Add</button></a>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Group</th>
                                <th style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pro_group as $pg)
                                <tr>
                                    <td>{{ $pg->id }}</td>
                                    <td>{{ $pg->product->name }}</td>
                                    <td>{{ $pg->group->color }} {{ $pg->group->ram }} {{ $pg->group->memory }}</td>
                                    <td>
                                    	<a href="{{ route('editProductGroup', [$pg->id]) }}"><button class="btn btn-success">Edit</button></a>
                                    	<a href="#" onclick="return confirm('Ban co chac chan muon xoa?')"><button class="btn btn-danger">Delete</button></a>
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
