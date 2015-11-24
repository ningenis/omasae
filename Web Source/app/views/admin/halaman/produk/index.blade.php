@extends('admin.master')

@section('konten')

<div class="portlet box purple">
	<div class="portlet-title">
		<div class="caption"><i class="icon-comments"></i>Daftar Produk</div>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a>
			<a href="#portlet-config" data-toggle="modal" class="config"></a>
			<a href="javascript:;" class="reload"></a>
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Foto</th>
					<th>Nama</th>
					<th>Kategori</th>
					<th>Modal</th>
					<th>Harga Konsumer</th>
					<th>Harga Reseller</th>
					<th>Qty</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td></td>
					<td>MacBook Pro 13inch XVA2014</td>
					<td>Laptop</td>
					<td>570.000</td>
					<td>650.000</td>
					<td>610.000</td>
					<td>3</td>
					<td><span class="label label-sm label-success">Oke</span></td>
					<td></td>
				</tr>
				<tr>
					<td>1</td>
					<td></td>
					<td>TOSHIBA S350</td>
					<td>Laptop</td>
					<td>570.000</td>
					<td>650.000</td>
					<td>610.000</td>
					<td>3</td>
					<td><span class="label label-sm label-success">Oke</span></td>
					<td></td>
				</tr>
				<tr>
					<td>1</td>
					<td></td>
					<td>TOSHIBA S350</td>
					<td>Laptop</td>
					<td>570.000</td>
					<td>650.000</td>
					<td>610.000</td>
					<td>3</td>
					<td><span class="label label-sm label-success">Oke</span></td>
					<td></td>
				</tr>
			</tbody>
			</table>
		</div>
	</div>
</div>

@stop