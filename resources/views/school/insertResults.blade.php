@extends('school/base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5>Insert Result</h5>

                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{ old("name") }}" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">rollNo</label>
                                <input type="text" name="rollNo" value="{{ old("rollNo") }}" class="form-control @error('rollNo') is-invalid @enderror">
                                @error('rollNo')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">reg_no</label>
                                <input type="text" name="reg_no" value="{{ old("reg_no") }}" class="form-control @error('reg_no') is-invalid @enderror">
                                @error('reg_no')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">fatherName</label>
                                <input type="text" name="fatherName" value="{{ old("fatherName") }}" class="form-control @error('fatherName') is-invalid @enderror">
                                @error('fatherName')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">motherName</label>
                                <input type="text" name="motherName" value="{{ old("motherName") }}" class="form-control @error('motherName') is-invalid @enderror">
                                @error('motherName')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            @php
                                $subjects = ["maths","sci","sst","hindi","eng"];
                            @endphp

                            <div class="row">
                                @foreach ($subjects as $subject)
                                <div class="mb-3 col">
                                    <label for=""><?= $subject; ?></label>
                                    <input type="text" name="<?= $subject; ?>" value="{{ old($subject)}}" class="form-control @error($subject) is-invalid @enderror">
                                    @error($subject)
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                @endforeach
                           </div>
                           <div class="row">
                               <div class="mb-3">
                                   <input type="submit" class="btn btn-success w-100">
                               </div>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
@endsection