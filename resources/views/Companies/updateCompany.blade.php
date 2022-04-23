@extends('layouts.app')

@section('title')
    Edit Companies
@endsection
@section('content')

<div class="card">
<div class="card-body">
    <form enctype="multipart/form-data" method="post" action="{{ route('update',['company'=>$company->id]) }}">
        @csrf
        <div class="label">Company Name:</div>
        <input class="form-control" type="text" name="name" value="{{ $company->name }}"></input>
        <div class="label">Company Email:</div>
        <input class="form-control" type="text" name="email" value="{{ $company->email }}"></input>
        <div class="label">Company Site:</div>
        <input class="form-control" type="text" name="site" value="{{ $company->website }}"></input>
</br>
        <button type="submit" class="btn btn-primary">Update Company</button>

    </div>
    </form>
    <div>
    </br>
        <a href="{{route('index')}}">Go Back</a>
    </div>
</div>
</div>


@endsection