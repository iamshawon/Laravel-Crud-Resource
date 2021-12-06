@extends('welcome')

@section('content')
    <div class="container"><br>
        <h1 align="center">Student Session</h1>
        <hr> <br>

        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Select Session
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                @foreach ($data as $row)
                    <li>
                        <a class="dropdown-item" href="{{ URL::to('students/' . $row->id . '') }}">{{ $row->session }}</a>
                    </li>
                @endforeach
            </ul>
            <div>
                <a class="btn btn-success mx-2" href="{{ URL::to('students/create') }}" role="button">Add New Student</a>
            </div>

        </div>

        <br> <br>

        <div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Session</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Student Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->session }}</td>
                            <td>{{ $row->student_name }}</td>
                            <td>{{ $row->student_email }}</td>
                            <td class="d-flex">
                                <a class="btn btn-primary mx-1" href="{{ URL::to('students/' . $row->id . '') }}">View</a>
                                <a class="btn btn-secondary mx-1" href="{{ URL::to('students/' . $row->id . '/edit') }}"
                                        role="button">Edit</a>

                                <form class="mx-1" action="{{ URL::to('students/' . $row->id . '') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
