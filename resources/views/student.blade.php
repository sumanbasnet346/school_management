<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('storage/css/style.css')}}">
    <title>Welcome</title>
</head>

<body>
    @include('navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>
    @if ($layout == 'index')
    <div class="container">
            <section class="my-2">
                @include('studentslist')
            </section>
        </div>

    </div>

    @elseif($layout == 'create')
    <div class="container-fluid">
        <div class="row my-4">
            <div class="col">
                @include('studentslist')
            </div>
            <div class="col">
                <form method="POST" action="{{url('/store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Firstname</label>
                        <input type="text" class="form-control" name="firstname" id="exampleFormControlInput1"
                            placeholder="Firstname">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Lastname</label>
                        <input type="text" class="form-control" name="lastname" id="exampleFormControlInput1"
                            placeholder="Lastname">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Class</label>
                        <input type="text" class="form-control" name="class" id="exampleFormControlInput1"
                            placeholder="Class">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Section</label>
                        <input type="text" class="form-control" name="section" id="exampleFormControlInput1"
                            placeholder="Section">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Age</label>
                        <input type="text" class="form-control" name="age" id="exampleFormControlInput1"
                            placeholder="Age">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Speciality</label>
                        <input type="text" class="form-control" name="speciality" id="exampleFormControlInput1"
                            placeholder="Speciality">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Save">
                    <input type="submit" class="btn btn-danger" value="Reset">
                </form>
            </div>

        </div>
    </div>
    @elseif($layout == 'show')
    <div class="container-fluid">
        <div class="row">
            <section class="col my-2">
                @include('studentslist')
            </section>
            <section class="col"></section>
        </div>

    </div>

    @elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-6">
                <div class="card mb-3">
                    <img src="{{asset('storage/images/logo.jpeg')}}" class="card-img-top" alt style="width:727px;height:400px">
                    <div class="card-body">
                        <hr>
                        <h5 class="card-title" style="text-align: center;color:green">Update students information</h5>
                    </div>
                </div>
            </div>
            
            <div class="col-6">
                <form method="POST" action="{{url('/update/'.$student->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Firstname</label>
                        <input type="text" class="form-control" name="firstname" id="exampleFormControlInput1"
                            value="{{$student->firstname}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Lastname</label>
                        <input type="text" class="form-control" name="lastname" id="exampleFormControlInput1"
                            value="{{$student->lastname}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Class</label>
                        <input type="text" class="form-control" name="class" id="exampleFormControlInput1"
                            value="{{$student->class}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Section</label>
                        <input type="text" class="form-control" name="section" id="exampleFormControlInput1"
                            value="{{$student->section}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Age</label>
                        <input type="text" class="form-control" name="age" id="exampleFormControlInput1"
                            value="{{$student->age}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Speciality</label>
                        <input type="text" class="form-control" name="speciality" id="exampleFormControlInput1"
                            value="{{$student->speciality}}">
                    </div>
                    <input type="submit" class="btn btn-primary" value="update">
    
                </form>
            </div>
            

    </div>

    @endif
    <footer></footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>