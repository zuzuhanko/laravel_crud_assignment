<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="row mt-4">
        <div class="col-8 offset-3 mt-5">
          <div class="col-md-9">

            <div class="card">
              <div class="card-header p-3">
                <legend class="text-center">Edit Employee</legend>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <form class="form-horizontal" method="post" action="{{route('update',$employee->employee_id)}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group row">

                          <label for="inputName" class="col-sm-3 col-form-label text-center">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="firstname" value="{{old('firstname',$employee->first_name)}}">
                        </div>

                          <label for="inputName" class="col-sm-3 col-form-label text-center">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="lastname"  value="{{old('lastname',$employee->last_name)}}">
                        </div>

                          <label for="inputName" class="col-sm-3 col-form-label text-center">Job</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="job" value="{{old('job',$employee->job)}}">
                        </div>


                          <label for="inputName" class="col-sm-3 col-form-label text-center">Phone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="phone" value="{{old('phone',$employee->phone)}}">
                        </div>


                          <label for="inputName" class="col-sm-3 col-form-label text-center">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="address" value="{{old('address',$employee->address)}}">
                        </div>

                          <label for="inputName" class="col-sm-3 col-form-label ">Age</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="age" value="{{old('age',$employee->age)}}">
                        </div>

                        <button type="submit" class="btn mt-3 bg-success text-white">Submit</button>

                      </div>
                  </div>
                        </div>


</form>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>
