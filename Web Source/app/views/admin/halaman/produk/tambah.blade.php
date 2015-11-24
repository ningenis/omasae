@extends('admin.master')

@section('konten')

<div class="row">
	<div class="col-md-6">
		<div class="portlet box purple">
			<div class="portlet-title">
				<div class="caption"><i class="icon-reorder"></i>Tambah Produk</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="#portlet-config" data-toggle="modal" class="config"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"></a>
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="#" class="">
					<div class="form-actions top right">
						<button type="submit" class="btn green">Submit</button>
						<button type="button" class="btn default">Cancel</button> 
					</div>
					<div class="form-body">
						<div class="form-group">
							<label class="control-label">Nama</label>
							<input type="text" class="form-control" placeholder="Masukkan nama produk">
							<span class="help-block">A block of help text.</span>
						</div>
						<div class="form-group">
							<label class="control-label">Harga modal</label>
							<input type="text" class="form-control" placeholder="Masukkan harga modal">
						</div>
						<div class="form-group">
							<label class="control-label">Harga konsumer</label>
							<input type="text" class="form-control" placeholder="Masukkan harga konsumer">
						</div>
						<div class="form-group">
							<label class="control-label">Harga reseller</label>
							<input type="text" class="form-control" placeholder="Masukkan harga reseller">
						</div>
					</div>
					<div class="form-actions right">
						<button type="submit" class="btn green">Submit</button>
						<button type="button" class="btn default">Cancel</button>      
					</div>
				</form>
				<!-- END FORM--> 
			</div>
		</div>
	</div>
</div>

@stop