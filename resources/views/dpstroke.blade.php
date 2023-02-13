@extends('layout.admin')

{{-- section data stroke --}}
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

		</div>
		<div class="row">
			<table class="table table-hover">
				<thead>
				  <tr>
					<th scope="col">No</th>
					<th scope="col">Gender</th>
					<th scope="col">Age</th>
					<th scope="col">Hypertension</th>
					<th scope="col">Heart Disease</th>
					<th scope="col">Ever Married</th>
					<th scope="col">Avg Glucose Level</th>
					<th scope="col">BMI</th>
					<th scope="col">Smoking Status</th>
					<th scope="col">Stroke</th>
					<th scope="col">Aksi</th>
				  </tr>
				</thead>
				<tbody>
				@php
					$no = 1;
				@endphp
				@foreach ($data as $index => $row)
				  <tr>
					<th scope="row">{{ $index + $data->firstItem()}}</th>
					<td>{{$row->gender}}</td>
					<td>{{$row->age}}</td>
					<td>{{$row->hypertension}}</td>
					<td>{{$row->heart_disease}}</td>
					<td>{{$row->ever_married}}</td>
					<td>{{$row->avg_glucose_level}}</td>
					<td>{{$row->bmi}}</td>
					<td>{{$row->smoking_status}}</td>
					<td>{{$row->stroke}}</td>
					<td>
						<a href="/tdpstroke/{{$row->id}}" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></a>
						<a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-gender="{{$row->gender}}"><i class="fa-solid fa-trash"></i></i></a>
					</td>
				  </tr>
				  @endforeach
				</tbody>
			  </table>
			  {{ $data->links() }}
			</div>
	</div>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{-- sweetalert delete --}}
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- toastr delete --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
<script>
$('.delete').click(function(){
var pstrokeid = $(this).attr('data-id');
var gender = $(this).attr('data-gender');
swal({
	  title: "Delete data stroke?",
	  text: "Data stroke Gender "+gender+" ",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	window.location = "/hpstroke/"+pstrokeid+""
	swal("DATA SUCCESSFULLY DELETED", {
	  icon: "success",
	});
	  } else {
	  swal("Undelete Data");
	  }
	});
});
</script>

{{-- script toastr --}}
<script>
@if (Session::has('success'))
	toastr.success("{{ Session::get('success') }}");
@endif
</script>
@endsection
