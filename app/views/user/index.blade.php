@extends('layouts.default')

@section('title')
Your Profile | PDA
@stop
@section('styles')
<link href="{{{ asset('assets/css/multi-select.css') }}}" rel="stylesheet">
@stop

@section('content')
    <div class="row">
        @if ( isset($characters) )
            <div class="accordion characters" id="characters">
                <?php $n = 1; ?>
                @foreach($characters as $character)
                    <div class="accordion-group">
                        <div class="accordion-heading {{ $character->class }}">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#characters" href="#collapse<?php echo $n; ?>" >
                            {{ $character->name }}
                            </a>
                            <a class="edit" href="{{ URL::action('CharacterController@getProfile', [$character->id]) }}">
                                <i class="icon-eye-open"></i>
                            </a>
                        </div>
                        <div id="collapse<?php echo $n; ?>" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="pull-left"><img src="assets/img/d3/portraits/64/<?php echo $character->class . '_' . $character->gender; ?>.png" alt=""></div>
                                <div class="span3">
                                    <div class="progress progress-striped">
                                        <div class="bar" style="width: <?php echo floor($character->level * 1.67); ?>%">
                                            <span class="badge badge-info">Level: {{ $character->level }}</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="bar" style="width: <?php echo $character->paragonLevel; ?>%">
                                            <span class="badge badge-info">{{ $character->paragonLevel }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end accordion-inner -->
                    </div>
                    <?php $n++; ?>
                @endforeach
            </div><!-- end .accordion #accordion2 -->
        @endif
        <a class="btn" data-toggle="modal" href="#modal" ><i class="icon-download-alt"></i>Launch</a>
    </div>
@stop

@section('scripts')
<script src="{{{ asset('assets/js/jquery.multi-select.js') }}}"></script>
<script>
    $(".d3characters").multiSelect();
</script>
@stop
