@extends('layouts.default')

@section('title')
Account Signup | PDA
@stop

@section('content')
<div class="row">
    <div class="span4 offset4 well">
        <legend>Sign In</legend>
       {{ Form::open(array('action' => 'AuthController@postLogin')) }}
            <input type="hidden" name="csrf_token" id="csrf_token" value="{{{ Session::getToken() }}}" />

            <div class="control-group {{{ $errors->has('email') ? 'error' : '' }}}">
                <div class="controls">
                    <input type="text" name="email" id="email" class="m-ctrl-large m-wrap" value="{{{ Input::old('email') }}}" placeholder="Email" />
                    <span class="help-block">
                        {{ $errors->first('email') }}
                    </span>
                </div>
            </div>

            <div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
                <div class="controls">
                    <input type="password" name="password" class="m-ctrl-large m-wrap" id="password" value="" placeholder="Password" />
                    <span class="help-block">
                        {{ $errors->first('password') }}
                    </span>
                </div>
            </div>

            <button type="submit" class="m-btn blue rnd btn-block">Login</button>
        </form>
    </div>
</div>
@stop
