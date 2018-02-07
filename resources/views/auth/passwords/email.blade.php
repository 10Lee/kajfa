@extends('layouts.app')

@section('content')

<div class="container">
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Lupa Password ?</h1>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="notification is-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <form action="{{ route('password.email') }}" method="POST" role="form">
                        {{ csrf_field() }}

                        <div class="field">
                            <label for="email" class="label">Alamat Email</label>
                            <p class="control">
                                <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                            </p>

                            @if($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <button class="button is-success is-outlined is-fullwidth m-t-30">Dapatkan Link Reset</button>

                    </form>
                </div> <!-- endo of .card-content -->
                
            </div>

            <h5 class="has-text-centered m-t-10"><a class="is-muted" href="{{ route('login') }}" ><i class="fa fa-caret-left"></i> Kembali ke Login</a></h5>

        </div>
    </div> <!-- end of .content -->
</div>


{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
