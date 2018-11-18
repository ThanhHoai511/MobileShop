@extends('admin.layouts.app')
@section('title', 'Add Group')
@section('content')
	<form role="form" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label>Color</label>
            <input type="text" name="color" class="form-control" placeholder="Enter color">
        </div>
        <div class="form-group">
            <label>Ram</label>
            <input type="text" name="ram" id="" class="form-control" placeholder="Enter ram">
        </div>
        <div class="form-group">
            <label>Memory</label>
            <input type="text" name="memory" id="" class="form-control" placeholder="Enter memory">
        </div>
        <button type="submit" name="btnAdd" class="btn btn-success">Add</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
@endsection
