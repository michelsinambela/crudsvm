@extends('layout.admin')

{{-- bagian section --}}
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	<div class="container">
		<a href="/tpstroke" class="btn btn-dark mb-4">Tambah Data +</a>

		<div class="row g-3 align-items-center">
		<div class="col-auto">
		<form action="/pstroke" method="GET">
			<input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
		</form>
		</div>
		<div class="col-auto">
		<a href="/exportpdf" class="btn btn-dark">Export PDF +</a>
		</div>

		<div class="col-auto">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
		Import Data
		  </button>
		</div>
		<!-- Modal -->
		  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
			<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Import Data Stroke</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
			<form action="/importexcel" method="POST" enctype="multipart/form-data">
					@csrf
				<div class="modal-body">
					<div class="for-group">
						<input type="file" name="file" required>
					</div>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
				</div>
			</form>
	</div>
</div>
@endsection
