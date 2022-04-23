@extends('layouts.app')
@section('title')
    Company
@endsection
@section('content')
<body>
    <table class="table table-bordered table-hover">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Website</th>
            <th>Logo</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->website }}</td>
                <td><img src="storage/{{ $company->logo }}" alt="{{ $company->name }}" width="100" height="100"></td>
                <td>
        </tbody>
    </table>
    <div>
    </br>
        <a href="{{route('index')}}">Go Back</a>
    </div>
@endsection