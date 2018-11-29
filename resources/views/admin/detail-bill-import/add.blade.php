@extends('admin.layouts.app')
@section('title', 'Add Detail Bill Import')
@section('content')
	<form role="form" method="POST" enctype="multipart/form-data" style="margin-bottom: 30px;">
        {{csrf_field()}}
        @include('admin.layouts.flash-msg')
        <div class="form-group">
            <label>Bill Import</label>
            <select name="id_bill_import" id="" class="form-control">
                @foreach($bi as $bi)
                    <option value="{{ $bi->id }}" {{ old('id_bill_import') == $bi->id ? 'selected' : ''}}>{{ $bi->supplier_name }} {{ $bi->date }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Product Group</label>
            <select name="id_product_group" id="" class="form-control">
                @foreach($pg as $pg)
                    <option value="{{ $pg->id }}" {{ old('id_product_group') == $pg->id ? 'selected' : ''}}>{{ $pg->product->name }} {{ $pg->group->color }} {{ $pg->group->ram }} {{ $pg->group->memory }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Imei</label>
            <input type="text" name="imei" id="" class="form-control" placeholder="Enter imei">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" id="" class="form-control" placeholder="Enter imei">
        </div>
        <div class="form-group">
            <label>Camera before</label>
            <input type="text" name="camera_before" id="" class="form-control" placeholder="Enter camera before">
        </div>
        <div class="form-group">
            <label>Camera after</label>
            <input type="text" name="camera_after" id="" class="form-control" placeholder="Enter camera after">
        </div>
        <div class="form-group">
            <label>Pin</label>
            <input type="text" name="pin" id="" class="form-control" placeholder="Enter pin">
        </div>
        <div class="form-group">
            <label>Screen</label>
            <input type="text" name="screen" id="" class="form-control" placeholder="Enter screen">
        </div>
        <div class="form-group">
            <label>Weight</label>
            <input type="text" name="weight" id="" class="form-control" placeholder="Enter weight">
        </div>
        <div class="form-group">
            <label>Photos</label>
            <input type="file" name="photos[]" id="" class="form-control"  multiple>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
@endsection
