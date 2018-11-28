@extends('admin.layouts.app')
@section('title', 'Add Bill Import')
@section('content')
	<form role="form" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label>Supplier</label>
            <input name="supplier_name" class="form-control" placeholder="Enter supplier">
        </div>
        <div class="form-group">
            <label>Total</label>
            <input type="text" class="form-control" name="total" id="" placeholder="Enter total">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" id="" placeholder="Enter date">
        </div>
        <button type="submit" name="btnAdd" class="btn btn-success">Add</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
@endsection
