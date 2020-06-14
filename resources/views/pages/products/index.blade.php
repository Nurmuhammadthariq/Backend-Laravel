@extends('layouts.default')

@section('content')
<div class="orders">
	<div class="row">
			<div class="col-12">
					<div class="card">
							<div class="card-body">
									<h4 class="box-title">Daftar Barang</h4>
							</div>
							<div class="card-body--">
									<div class="table-stats order-table ov-h">
											<table class="table ">
													<thead>
															<tr>
																	<th>No</th>
																	<th>Name</th>
																	<th>Type</th>
																	<th>Price</th>
																	<th>Quantity</th>
																	<th>Action</th>
															</tr>
													</thead>
													<tbody>
														@forelse ($items as $item)
															<tr>
																<td>{{ $item->id }}</td>
																<td>{{ $item->name }}</td>
																<td>{{ $item->type }}</td>
																<td>{{ $item->price }}</td>
																<td>{{ $item->quantity }}</td>
																<td>
																	<a href="" class="btn btn-info btn-sm">
																		<i class="fa fa-picture-o"></i>
																	</a>
																	<a href="" class="btn btn-primary btn-sm">
																		<i class="fa fa-edit"></i>
																	</a>
																	<form action="" method="" class="d-inline">
																		<button class="btn btn-danger btn-sm">
																			<i class="fa fa-trash">z</i>
																		</button>
																	</form>
																</td>
															</tr>
														@empty
																
														@endforelse
													</tbody>
											</table>
									</div> <!-- /.table-stats -->
							</div>
					</div> <!-- /.card -->
			</div>  <!-- /.col-lg-8 -->
	</div>
</div>
@endsection