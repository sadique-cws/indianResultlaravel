@extends('school/base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-danger w-100 btn-lg py-4">View Students</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="{{ route("school.insertResult") }}" class="btn btn-info w-100 btn-lg py-4">Insert Result</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-success w-100 btn-lg py-4">Download Reports</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-warning w-100 btn-lg py-4">Manage Results</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-primary w-100 btn-lg py-4">Manage Results</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-secondary w-100 btn-lg py-4">Manage Results</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-dark w-100 btn-lg py-4">Manage Results</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <table class="table">
                    <tr>
                        <th>School Name</th>
                        <td>{{ $school->schoolName }}</td>
                    </tr>
                    <tr>
                        <th>School Code</th>
                        <td>{{ $school->schoolCode }}</td>
                    </tr>
                    <tr>
                        <th>Reg No</th>
                        <td>{{ $school->schoolRegNo }}</td>
                    </tr>
                    <tr>
                        <th>Est Year</th>
                        <td>{{ $school->est_year }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $school->address }}, {{ $school->city }} ({{ $school->state }})</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection