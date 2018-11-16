@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-2 border shadow-lg p-4 mb-4 bg-white">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Clearance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pages.index') }}">Blotter</a>
            </li>
        </ul>
    </div>
    <div class="col-md-10 ">
        <div class="card shadow-lg p-4 mb-4 bg-white">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
</div>
    
@endsection
