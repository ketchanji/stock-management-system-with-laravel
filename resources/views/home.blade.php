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

                   @can('isAdmin')
                        <h4>this is for admin</h4>
                   @endcan


                   @can('isWorker')
                        <h4>this is for worker</h4>
                   @endcan
                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
