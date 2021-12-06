@extends('welcome')

@section('form')
<div class="container mt-4">
    <h3>Create a Session</h3> <hr> <br>

    <form action="{{route('students.store')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
          <input type="text" class="form-control" id="session" name="session" placeholder="Enter Session">
        </div>
        <div class="form-group mb-3">
          <input type="text" class="form-control" id="student_name" name="student_name" placeholder="Enter Student Name">
        </div>
        <div class="form-group mb-3">
          <input type="email" class="form-control" id="student_email" name="student_email" placeholder="Enter a E-mail">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection