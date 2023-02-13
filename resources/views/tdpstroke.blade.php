<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	{{-- font awesome --}}
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

    <title>PENERAPAN SVM</title>
  </head>
  <body>
    <h1 class="text-center mb-4">EDIT DATA PENYAKIT STROKE</h1>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-8">
				<div class="card">
					<div class="card-body">
						<form action="/udpstroke/{{$data->id}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Gender</label>
								<select class="text" name="gender" aria-label="Default select example">
								  <option selected>{{$data->gender}}</option>
								  <option value="male">Male</option>
								  <option value="female">Female</option>
								</select>
							</div>
							<div class="mb-3">
							  <label for="exampleInputAge1" class="form-label">Age</label>
							  <input type="number" name="age" class="form-control" id="exampleInputAge1" value="{{$data->age}}">
							</div>
							<div class="mb-3">
								<label for="exampleInputHypertension1" class="form-label">Hypertension</label>
								<input type="number" name="hypertension" class="form-control" id="exampleInputHypertension1" value="{{$data->hypertension}}">
							</div>
							<div class="mb-3">
								<label for="exampleInputHeartDisease1" class="form-label">Heart Disease</label>
								<input type="number" name="heart_disease" class="form-control" id="exampleInputHeartDisease1" value="{{$data->heart_disease}}">
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Ever Married</label>
								<select class="text" name="ever_married" aria-label="Default select example">
								  <option selected>{{$data->ever_married}}</option>
								  <option value="yes">Yes</option>
								  <option value="no">No</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="exampleInputAvgGlucoseLevel1" class="form-label">Avg Glucose Level</label>
								<input type="number" name="avg_glucose_level" class="form-control" id="exampleInputAvgGlucoseLevel1" value="{{$data->avg_glucose_level}}">
							</div>
							<div class="mb-3">
								<label for="exampleInputBmi1" class="form-label">BMI</label>
								<input type="number" name="bmi" class="form-control" id="exampleInputBmi1" value="{{$data->bmi}}">
							</div>
							<div class="mb-3">
								<label for="exampleInputSmokingStatus" class="form-label">Smoking Status</label>
								<input type="text" name="smoking_status" class="form-control" id="exampleInputSmokingStatus1" value="{{$data->smoking_status}}">
							</div>
							<div class="mb-3">
								<label for="exampleInputStroke1" class="form-label">Stroke</label>
								<input type="number" name="stroke" class="form-control" id="exampleInputStroke1" value="{{$data->stroke}}">
							</div>
							<button type="submit" class="btn btn-dark">Submit</button>
						  </form>
					</div>
				</div>
			</div>

		</div>
	</div>



    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
