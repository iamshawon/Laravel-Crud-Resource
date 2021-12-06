@extends('welcome')

@section('show')
<div class="container mt-4">
    <h3>Show a Session: {!! $data->id !!}</h3> <hr> <br>

    <div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Session</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Email</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->session }}</td>
                        <td>{{ $data->student_name }}</td>
                        <td>{{ $data->student_email }}</td>
                    </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection