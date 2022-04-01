@extends('admin/base')


@section('content')
    <div class="container mt-3">
       <table class="table">
           <tr>
               <th>id</th>
               <th>name</th>
               <th>code</th>
               <th>SchoolName</th>
               <th>Address</th>
               <th>city</th>
               <th>state</th>
               <th>RegNo</th>
               <th>est_year</th>
               <th>date of Creation</th>
               <th>Action</th>
           </tr>
           @foreach ($schools as $school)
               <tr>
                   <td>{{ $school->id }}</td>
                   <td>{{ $school->name }}</td>
                   <td>{{ $school->schoolCode }}</td>
                   <td>{{ $school->schoolName }}</td>
                   <td>{{ $school->address }}</td>
                   <td>{{ $school->city }}</td>
                   <td>{{ $school->state }}</td>
                   <td>{{ $school->schoolRegNo }}</td>
                   <td>{{ $school->est_year }}</td>
                   <td>{{ $school->created_at }}</td>
                   <td>
                       <a href="" class="btn btn-danger">X</a>
                       <a href="" class="btn btn-info">edit</a>
                       <a href="" class="btn btn-success">View</a>
                   </td>
               </tr>
           @endforeach
            </table>
    </div>
@endsection