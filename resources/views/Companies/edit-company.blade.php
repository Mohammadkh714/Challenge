@extends('layouts.app')

@section('title')
    Edit Companies
@endsection
@section('content')

<div class="card">
<div class="card-body">
    <form enctype="multipart/form-data" method="post" action="{{ route('index') }}">
        @csrf
        <div class="label">Company Name:</div>
        <input class="form-control" type="text" name="name"></input>
        <div class="label">Company Email:</div>
        <input class="form-control" type="text" name="email"></input>
        <div class="label">Company Site:</div>
        <input class="form-control" type="text" name="site"></input>
        <div class="label">Company Logo</div>
        <input class="form-control" type="file" name="logo"></input>
    <div class="form-group"></br>
        <button type="submit" class="btn btn-primary">Add Company</button>

    </div>
    </form>
    <div>
    </br>
        <a href="{{route('index')}}">Go Back</a>
    </div>
</div>
</div>


@endsection