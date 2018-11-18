@extends('admin.layouts.app')
@section('title', 'Add Category')
@section('content')
	<form role="form" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label>Color</label>
            <input name="color" class="form-control" value="{{ $group->color }}">
        </div>
        <div class="form-group">
            <label>Ram</label>
            <input name="ram" class="form-control" value="{{ $group->ram }}">
        </div>
        <div class="form-group">
            <label>Memory</label>
            <input name="memory" class="form-control" value="{{ $group->memory }}">
        </div>
        <button type="submit" name="btnAdd" class="btn btn-success">Edit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
@endsection
