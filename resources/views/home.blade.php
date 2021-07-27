@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="user-logged-detail">
                        <li><i class="fas fa-star"></i>&nbsp;Username : {{ Auth::user()->name }}</li>
                        <li><i class="fas fa-star"></i>&nbsp;Email : {{ Auth::user()->email }}</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
