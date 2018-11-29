@extends('admin.layouts.home')
@section('title', 'Detail Bill Import')
@section('content')
    @include('admin.layouts.flash-msg')
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                	<a href="{{ route('addDetailBillImport') }}"><button class="btn btn-primary" style="margin-bottom: 20px;">Add</button></a>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                            <tr>
                                <th>ID</th>
                                <th>Bill Import</th>
                                <th>Product Group</th>
                                <th>Imei</th>
                                <th>Price</th>
                                <th>Camera before</th>
                                <th>Camera after</th>
                                <th>Pin</th>
                                <th>Screen</th>
                                <th>Weight</th>
                                <th>Photos</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($dbi as $dbi)
                            <tr>
                                <td>{{ $dbi->id }}</td>
                                <td>{{ $dbi->bill_import->supplier_name }} {{ $dbi->bill_import->date }}</td>
                                <td>{{ $dbi->product_group->product->name }} {{ $dbi->product_group->group->color }} {{ $dbi->product_group->group->ram }} {{ $dbi->product_group->group->memory }}</td>
                                <td>{{ $dbi->imei }}</td>
                                <td>{{ $dbi->price }}</td>
                                <td>{{ $dbi->camera_before }}</td>
                                <td>{{ $dbi->camera_after }}</td>
                                <td>{{ $dbi->pin }}</td>
                                <td>{{ $dbi->screen }}</td>
                                <td>{{ $dbi->weight }}</td>
                                <td style="width: 30%;">
                                    @php
                                        $imgs = $dbi->getImage($dbi->id);
                                    @endphp
                                    @if($imgs)
                                        @foreach ($imgs as $key => $img)
                                            <img src="{{ asset('uploads/mobile/'. $img) }}" alt="" style="width: 100px;height: 90px;">
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{ $dbi->description }}</td>
                                <td>
                                	<a href="{{ asset('admin/detail-bill-import/edit/'. $dbi->id) }}"><button class="btn btn-success">Edit</button></a>
                                	{{-- <a href="{{ asset('admin/detail-bill-import/delete/' . $dbi->id) }}" onclick="return confirm('Ban co chac chan muon xoa?')"><button class="btn btn-danger">Delete</button></a> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection
