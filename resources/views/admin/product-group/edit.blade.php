@extends('admin.layouts.app')
@section('title', 'Add Category')
@section('content')
	<form role="form" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="" cols="119" row</textarea>
        </div>
        <button type="submit" name="btnAdd" class="btn btn-success">Edit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
@endsection
