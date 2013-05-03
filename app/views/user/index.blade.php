@extends('layouts.default')

@section('title')
Your Profile | PDA
@stop
@section('styles')
<link href="{{{ asset('assets/css/multi-select.css') }}}" rel="stylesheet">
@stop

@section('content')
    <div class="row">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        @if ( isset($characters) )
            @foreach($characters as $character)
                <div class="span3 badge-big">
                    <a href="{{ URL::action('CharacterController@getProfile', [$character->id]) }}" data-toggle="tooltip" title="View Character Details" class="hidden-eye"><i class="icon-eye-1"></i></a>
                    <div class="badge-body">
                        <img src="assets/img/d3/portraits/64/<?php echo $character->class . '_' . $character->gender; ?>.png" alt="" class="avatar">
                        <h3>{{ $character->name }}</h3>
                        <h4>{{ $character->class }}</h4>
                    </div>
                    <div class="badge-footer">
                        <div class="level">
                            <p>Level</p>
                            <span class="legend">{{ $character->level }}</span>
                        </div>
                        <div class="plevel">
                            <p>P. Level</p>
                            <span class="plegend">{{ $character->paragonLevel }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@stop

@section('scripts')
<script src="{{{ asset('assets/js/jquery.multi-select.js') }}}"></script>
<script>
    $(".d3characters").multiSelect();
</script>
@stop
