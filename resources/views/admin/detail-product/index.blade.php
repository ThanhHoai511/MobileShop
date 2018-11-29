@extends('admin.layouts.home')
@section('title', 'Detail Product')
@section('content')
    @include('admin.layouts.flash-msg')
	<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                            <tr>
                                <th>Edit</th>
                                <th>Product Group</th>
                                <th>Detail Bill Import</th>
                                <th>Imei</th>
                                <th>Price</th>
                                <th>Sale</th>
                                <th>Seen</th>
                                <th>Like</th>
                                <th>Camera before</th>
                                <th>Camera after</th>
                                <th>Pin</th>
                                <th>Screen</th>
                                <th>Weight</th>
                                <th>Photos</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($dp as $dp)
                            <tr>
                                <td><a href="{{ asset('admin/detail-product/edit/'. $dp->id) }}"><button class="btn btn-success">Edit</button></a></td>
                                <td>{{ $dp->id_product_group }}</td>
                                <td>{{ $dp->id_detail_bill_import }}</td>
                                <td>{{ $dp->imei }}</td>
                                <td>{{ $dp->price }}</td>
                                <td>{{ $dp->sale }}</td>
                                <td>{{ $dp->seen }}</td>
                                <td>{{ $dp->like }}</td>
                                <td>{{ $dp->camera_before }}</td>
                                <td>{{ $dp->camera_after }}</td>
                                <td>{{ $dp->pin }}</td>
                                <td>{{ $dp->screen }}</td>
                                <td>{{ $dp->weight }}</td>
                                <td>
                                    @php
                                        $imgs = $dp->getImage($dp->id);
                                    @endphp
                                    @if($imgs)
                                        @foreach ($imgs as $key => $img)
                                            <img src="{{ asset('uploads/mobile/'. $img) }}" alt="" style="width: 100px;height: 90px;">
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{ $dp->description }}</td>
                                {{-- <td>
                                	
                                	<a href="{{ asset('admin/detail-product/delete/' . $dp->id) }}" onclick="return confirm('Ban co chac chan muon xoa?')"><button class="btn btn-danger">Delete</button></a>
                                </td> --}}
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
