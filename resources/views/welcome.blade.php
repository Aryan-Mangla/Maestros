@extends(Auth::check() ? 'layouts.app' : 'layouts.guest')

@section('content')
<x-navbar />

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Welcome</div>

                <div class="card-body">
                    @if (Auth::check())
                        <p>You are logged in as <strong>{{ Auth::user()->name }}</strong>.</p>
                        <a href="{{ route('dashboard') }}" class="btn btn-success">Go to Dashboard</a>
                    @else
                        <p>Welcome, guest! Please log in or register to access more features.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
