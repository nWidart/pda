@extends('layouts.default')

@section('content')
<div class="row-fluid">
    <h1>Hello World!</h1>

    <div class="banner">
        <ul>
            <li>This is a slide.</li>
            <li>This is another slide.</li>
            <li>This is a final slide.</li>
        </ul>
    </div>

</div>
@stop
@section('scripts')
<script>
    $(function() {
        $('.banner').unslider({ dots: true });
    });
</script>
@stop
