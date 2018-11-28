@extends('admin.layouts.app')
@section('title', 'Bill Import')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                	<a href="{{ route('addBillImport') }}"><button class="btn btn-primary" style="margin-bottom: 20px;">Add</button></a>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Supplier</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bill_import as $bi)
                                <tr>
                                    <td>{{ $bi->id }}</td>
                                    <td>{{ $bi->supplier_name }}</td>
                                    <td>{{ $bi->total }}</td>
                                    <td>{{ $bi->date }}</td>
                                    <td>
                                    	<a href="{{ route('editBillImport', [$bi->id]) }}"><button class="btn btn-success">Edit</button></a>
                                    	<a href="{{ route('deleteBillImport', [$bi->id]) }}" onclick="return confirm('Ban co chac chan muon xoa?')"><button class="btn btn-danger">Delete</button></a>
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
