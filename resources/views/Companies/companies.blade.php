
@extends('layouts.app')
@section('title')
    List of companies
@endsection
@section('content')
<table class="table table-bordered table-hover">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Website</th>
        <th>Logo</th>
    </thead>
    <tbody>
        @if ($companies->count() == 0)
        <tr>
            <td colspan="5">No products to display.</td>
        </tr>
        @endif
        @foreach ($companies as $company)
        <tr>
            <td><a href="{{route('company',['company'=>$company->id])}}">{{ $company->name }}</a></td>
            <td>{{ $company->email }}</td>
            <td>{{ $company->website }}</td>
            <td><img src="storage/{{ $company->logo }}" alt="{{ $company->name }}" width="100" height="100"></td>
            <td>
                <a style="color:#FF0000;" href="{{ route('delete',['company'=>$company->id]) }}">Delete</a>
                </br>
                <a style="color:#008000;" href="{{ route('view_update',['company'=>$company->id, 'company'=>$company]) }}">Update</a>
            </td>
        @endforeach
        </tr>
        <tr><td><a href="{{ route('add') }}">Insert new company</a></td></tr>
    </tbody>
</table>
{{ $companies->links() }}
<p>
Displaying {{$companies->count()}} of {{ $companies->total() }} companies.
</p>
@endsection