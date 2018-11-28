@extends('admin.layouts.app')
@section('title', 'Add Product Group')
@section('content')
	<form role="form" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label>Product</label>
            <select name="id_product" id="">
                @foreach($product as $pro)
                    <option value="{{ $pro->id }}">{{ $pro->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Group</label>
            <select name="id_group" id="">
                @foreach($group as $gr)
                    <option value="{{ $gr->id }}">{{ $gr->color }} {{ $gr->ram }} {{ $gr->memory }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" name="btnAdd" class="btn btn-success">Add</button>
        <a href="{{ route('listProductGroup') }}"><button type="button" class="btn btn-primary">Back</button></a>
    </form>
@endsection
