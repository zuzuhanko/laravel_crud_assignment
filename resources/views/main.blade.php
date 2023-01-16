<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=he, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="row mt-4">
        <div class="col-12">
          <div class="card">


                  <a href="{{route('createlist')}}"> <button class=" col-12 btn bg-success text-white" >Create</button> </a>
               <div class="card-tools d-flex">


            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap text-center">
                <thead>
                  <tr>

                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job</th>
                    <th>Phone</th></th>
                    <th>Address</th>
                    <th>Age</th>
                    <th></th>
                 </tr>
                </thead>

<tbody>
     @foreach ( $employee as $item )
    <tr>

        <td>{{$item->first_name}}</td>
        <td>{{$item->last_name}}</td>
        <td>{{$item->job}}</td>

        <td>{{$item->phone}}</td>

        <td>{{$item->address}}</td>

        <td>{{$item->age}}</td>


<td> <a href="{{route('edit', $item->employee_id)}}"> <button class="btn btn-sm bg-primary ">Edit</button></a></td>


<td><a href="{{route('delete',$item->employee_id)}}"> <button class="btn btn-sm bg-danger ">Delete</button></a></td>

     </tr>

    @endforeach
</tbody>

</table>
            </div>

          </div>
        </div>
    </div>

 <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>
