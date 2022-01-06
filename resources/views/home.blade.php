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

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-3">
            <div class="card" style="width: 13rem;">
                <div class="card-body">
                  <h5 class="card-title">Chat</h5>
                  <h6 class="card-subtitle mb-2 text-muted">simple chat</h6>
                  <p class="card-text">simple chat using socket</p>
                  <a href="#">Try out!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
