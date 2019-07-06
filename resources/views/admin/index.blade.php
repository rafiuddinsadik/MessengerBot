@extends('layouts.admin')


@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('admin.dashboard')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <div class="jumbotron text-center">
        <h1>This will be the admin dashboard</h1>
    </div>
@endsection