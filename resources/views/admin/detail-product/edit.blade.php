@extends('admin.layouts.app')
@section('title', 'Edit Detail Product')
@section('content')
	<form role="form" method="POST" enctype="multipart/form-data" style="margin-bottom: 30px;">
        {{csrf_field()}}
        @include('admin.layouts.flash-msg')

        <div class="form-group">
            <label>Product Group</label>
            <select name="id_product_group" id="" class="form-control">
                @foreach($pg as $pg)
                    <option value="{{ $pg->id }}" {{ $pg->id == $dp->id_product_group ? 'selected' : ''}}>{{ $pg->product->name }} {{ $pg->group->color }} {{ $pg->group->ram }} {{ $pg->group->memory }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Imei</label>
            <input type="text" name="imei" id="" class="form-control" value="{{ $dp->imei }}">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" id="" class="form-control" value="{{ $dp->price }}" readonly="readonly">
        </div>
        <div class="form-group">
            <label>Sale</label>
            <input type="text" name="sale" id="" class="form-control" value="{{ $dp->sale }}">
        </div>

        <div class="form-group">
            <label>Camera before</label>
            <input type="text" name="camera_before" id="" class="form-control" value="{{ $dp->camera_before }}">
        </div>
        <div class="form-group">
            <label>Camera after</label>
            <input type="text" name="camera_after" id="" class="form-control" value="{{ $dp->camera_after }}">
        </div>
        <div class="form-group">
            <label>Pin</label>
            <input type="text" name="pin" id="" class="form-control" value="{{ $dp->pin }}">
        </div>
        <div class="form-group">
            <label>Screen</label>
            <input type="text" name="screen" id="" class="form-control" value="{{ $dp->screen }}">
        </div>
        <div class="form-group">
            <label>Weight</label>
            <input type="text" name="weight" id="" class="form-control" value="{{ $dp->weight }}">
        </div>
        <div class="form-group">
            <label>Photos</label>
            <input type="file" name="photos[]" id="" class="form-control"  multiple>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="" cols="30" rows="10">{{ $dp->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
        <a href="{{ route('listDetailProduct') }}"><button type="button" class="btn btn-primary">Back</button></a>
    </form>
@endsection
