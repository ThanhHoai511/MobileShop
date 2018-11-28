@extends('admin.layouts.app')
@section('title', 'Edit Bill Import')
@section('content')
	<form role="form" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label>Supplier</label>
            <input name="supplier_name" class="form-control" value="{{ $bi->supplier_name }}">
        </div>
        <div class="form-group">
            <label>Total</label>
            <input type="text" class="form-control" name="total" id="" value="{{ $bi->total }}">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" id="" value="{{ $bi->date }}">
        </div>
        <button type="submit" name="btnAdd" class="btn btn-success">Edit</button>
        <a href="{{ route('listBillImport') }}"><button type="button" class="btn btn-primary">Back</button></a>
    </form>
@endsection
