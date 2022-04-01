@extends('admin/base')


@section('content')
    <div class="container mt-3">
        <h1>insert school</h1>

        <form action="{{ route('school.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="mb-3 col">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col">
                    <label for="">email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col">
                    <label for="">password</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col">
                    <label for="">schoolName</label>
                    <input type="text" name="schoolName" class="form-control @error('schoolName') is-invalid @enderror"
                        value="{{ old('schoolName') }}" name="schoolName">
                    @error('schoolName')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col">
                    <label for="">schoolCode</label>
                    <input type="text" name="schoolCode" class="form-control @error('schoolCode') is-invalid @enderror"
                        value="{{ old('schoolCode') }}" name="schoolCode">
                    @error('schoolCode')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="">address</label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                    value="{{ old('address') }}" name="address">
                @error('address')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">city</label>
                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"
                    value="{{ old('city') }}" name="address">
                @error('city')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="">state</label>
                    <input type="text" name="state" class="form-control @error('state') is-invalid @enderror"
                        value="{{ old('state') }}" name="state">
                    @error('state')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col">
                    <label for="">schoolRegNo</label>
                    <input type="text" name="schoolRegNo" class="form-control @error('schoolRegNo') is-invalid @enderror"
                        value="{{ old('schoolRegNo') }}" name="schoolRegNo">
                    @error('schoolRegNo')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col">
                    <label for="">est_year</label>
                    <input type="text" name="est_year" class="form-control @error('est_year') is-invalid @enderror"
                        value="{{ old('est_year') }}" name="est_year">
                    @error('est_year')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <input type="submit" value="Create an School" class="btn btn-success w-100">
            </div>
        </form>
    </div>
@endsection
