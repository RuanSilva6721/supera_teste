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
                </div>
                    
<div class="col-md-12 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>
</div>
                @include('table')

                 
             </div>
        </div>
    </div>
</div>
@endsection
