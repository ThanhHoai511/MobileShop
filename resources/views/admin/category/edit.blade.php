@extends('admin.layouts.app')
@section('title', 'Add Category')
@section('content')
	<form role="form" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" value="{{ $category->name }}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="" cols="119" rows="5" style="border-radius: 4px;">{{ $category->description }}</textarea>
        </div>
        <button type="submit" name="btnAdd" class="btn btn-success">Edit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
@endsection
