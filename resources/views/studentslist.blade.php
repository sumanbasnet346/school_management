<div class="card mb-3" style="background-color: #eee">
  <img src="{{asset('storage/images/title.jpeg')}}" class="card-img-top" alt style="width:750px;height:400px;align-self:center">
<hr>

  <div class="card-body">
    <div class="row">
      <div class="col-2">
        <p class="card-text"><h4>Student List</h4></p>
      </div>
    <div class="col-8 msg"><h3>{{session('msg')}}</h3></div>
    <div class="col-2">
      <a href="{{url('/create')}}" class="btn btn-success" style="margin-top:15px">Create New Data</a>
    </div>
    </div>
  </div>


  <table class="table">
    <thead class="thead">
      <tr>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Class</th>
        <th scope="col">Section</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($student as $item)
      <tr>
        <td>{{$item->firstname}}</td>
        <td>{{$item->lastname}}</td>
        <td>{{$item->class}}</td>
        <td>{{$item->section}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->speciality}}</td>
        <td>
          <a href="{{url('/show/'.$item->id)}}" class="btn btn-sm btn-primary">Show</a>
          <a href="{{url('/edit/'.$item->id)}}" class="btn btn-sm btn-info">Edit</a>
          <a href="{{url('/destroy/'.$item->id)}}" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach


    </tbody>
  </table>
</div>