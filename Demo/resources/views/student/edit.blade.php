<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <h1>xin chao</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
            <div class="card">
                <div class="card-header">
                    <h4>Edit Student with IMAGE
                        <a href="{{url('students')}}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('update-student/'.$student->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                    <label for="">Student Name</label>
                    <input type="text" name="name" value="{{$student->name}}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                    <label for="">Student Email</label>
                    <input type="text" name="email" value="{{$student->email}}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                    <label for="">Student Course</label>
                    <input type="text" name="course" value="{{$student->course}}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                    <label for="">Student Profile Image</label>
                    <input  type="file" name="profile_image" class="form-control">
                    <img src="{{asset('uploads/students/'.$student->profile_image)}}" width="70px" height="70px" alt="Image">
                    </div>
                    <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Update Student</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
