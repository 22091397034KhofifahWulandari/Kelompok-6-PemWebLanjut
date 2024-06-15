@extends('layoutsadmin.dashboardadmin')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Profile') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="username">{{ __('Username') }}</label>
                        <p id="username" class="form-control">{{ Auth::guard('admin')->user()->username }}</p>
                    </div>

                    <!-- You can add more profile fields here if needed -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
