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
        <div class="accordion" id="accordion2">
            <?php $n = 1; ?>
            @foreach($characters as $character)
                <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $n; ?>" >
                        {{ $character->name }}
                      </a>
                    </div>
                    <div id="collapse<?php echo $n; ?>" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Level : {{ $character->level }}
                        <br>
                        Paragon Level : {{ $character->paragonLevel }}
                      </div>
                    </div>
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
