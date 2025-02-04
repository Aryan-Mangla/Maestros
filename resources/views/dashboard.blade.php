@extends('layouts.app')

@section('content')
@include('layouts.navigation')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Welcome</div>

                <div class="card-body">
                    @if (Auth::check())
                        <p>Hello <strong>{{ Auth::user()->name }} </strong>. Our esteemed <strong>{{ Auth::user()->role }} </strong> </p>
                     

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
