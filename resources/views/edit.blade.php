@extends('welcome')

@section('edit-form')
<div class="container mt-4">
    <h3>Edit a Session = {!! $data->id !!}</h3> <hr> <br>

    <form action="{{ URL::to('students/'.$data->id.'')}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
          <input type="text" value="{{ $data->session }}"  class="form-control" id="session" name="session" placeholder="Enter Session">
        </div>
        <div class="form-group mb-3">
          <input type="text"  value="{{ $data->student_name }}" class="form-control" id="student_name" name="student_name" placeholder="Enter Student Name">
        </div>
        <div class="form-group mb-3">
          <input type="email"  value="{{ $data->student_email }}" class="form-control" id="student_email" name="student_email" placeholder="Enter a E-mail">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection