@extends('layouts.default')

@section('title')
Account Signup | PDA
@stop

@section('content')
<div class="row">
    <div class="span4 offset4 well">
        <legend>Sign Up</legend>
        <form method="post" action="" class="">
            <input type="hidden" name="csrf_token" id="csrf_token" class="span4" value="{{{ Session::getToken() }}}" />


            <div class="control-group {{{ $errors->has('email') ? 'error' : '' }}}">
                <div class="controls">
                    <input type="text" name="email" id="email {{{ $errors->has('email') ? 'inputWarning' : '' }}}" class="span4" value="{{{ Request::old('email') }}}" placeholder="Email"/>
                    <span class="help-block">
                        {{ $errors->first('email') }}
                    </span>
                </div>
            </div>

            <div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
                <div class="controls">
                    <input type="password" name="password" id="password {{{ $errors->has('password') ? 'inputWarning' : '' }}}" class="span4" value="" placeholder="Password" />
                    <span class="help-block">
                        {{ $errors->first('password') }}
                    </span>
                </div>
            </div>

            <div class="control-group {{{ $errors->has('password_confirmation') ? 'error' : '' }}}">
                <div class="controls">
                    <input type="password" name="password_confirmation" id="password_confirmation {{{ $errors->has('password_confirmation') ? 'inputWarning' : '' }}}" class="span4" value="" placeholder="Password confirmation" />
                    <span class="help-block">
                        {{ $errors->first('password_confirmation') }}
                    </span>
                </div>
            </div>

            <button type="submit" class="btn btn-info btn-block">Signup</button>
        </form>
    </div>

</div>
@stop
