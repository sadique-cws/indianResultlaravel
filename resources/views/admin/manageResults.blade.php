@extends('admin/base')


@section('content')
    <div class="container mt-3">
       <table class="table">
           <tr>
               <th>id</th>
               <th>rollNo</th>
               <th>SchoolName</th>
               <th>reg_no</th>
               <th>father</th>
               <th>mother</th>
               <th>maths</th>
               <th>sci</th>
               <th>sst</th>
               <th>hindi</th>
               <th>eng</th>
               <th>Action</th>
           </tr>
           @foreach ($results as $result)
               <tr>
                   <td>{{ $result->id }}</td>
                   <td>{{ $result->rollNo }}</td>
                   <td>{{ $result->schoolName }}</td>
                   <td>{{ $result->reg_no }}</td>
                   <td>{{ $result->fatherName }}</td>
                   <td>{{ $result->montherName }}</td>
                   <td>{{ $result->maths }}</td>
                   <td>{{ $result->sci }}</td>
                   <td>{{ $result->sst }}</td>
                   <td>{{ $result->hindi }}</td>
                   <td>{{ $result->eng }}</td>
                  
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