@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form method="POST" action="/auth/register">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            Name
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        </div>

                        <div class="form-group">
                            Email
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                        </div>

                        <div class="form-group">
                            Password
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            Confirm Password
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>

                        <div>
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection