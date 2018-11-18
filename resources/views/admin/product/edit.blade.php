@extends('admin.layouts.app')
@section('title', 'Add Category')
@section('content')
	<form role="form" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="" cols="119" rows="7">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="id_cate" id="">
                @foreach($category as $cate)
                    <option value="{{$cate->id}}" {{ $product->id_cate == $cate->id ? 'selected' : ''}}>{{ $cate->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" name="btnAdd" class="btn btn-success">Edit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
@endsection
