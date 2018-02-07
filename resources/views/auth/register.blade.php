@extends('layouts.app')

@section('content')


<div class="container">
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-20">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Daftar Sekarang</h1>

                    <form action="{{ route('register') }}" method="POST" role="form">

                        {{ csrf_field() }}

                        <div class="field">
                            <label for="username" class="label">Username</label>
                            <div class="control">
                                <input type="text" class="input" name="username" id="username" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="email" class="label">Email</label>
                            <div class="control">
                                <input type="text" class="input" name="email" id="email" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="password" class="label">Password</label>
                            <div class="control">
                                <input type="password" class="input" name="password" id="password" required>
                            </div>
                        </div>
                        
                        <div class="field">
                            <label for="password-confirm" class="label">Konfirmasi Password</label>
                            <div class="control">
                                <input type="password" class="input" required>
                            </div>
                        </div>

                        <button class="button is-success is-outlined is-fullwidth m-t-50">Daftar</button>
                    </form> 

                </div>
            </div>
    
            <h5 class="has-text-centered m-t-20"><a class="is-muted" href="{{ route('login') }}">Sudah punya akun ?</a></h5>

        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
