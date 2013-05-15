@extends('layouts.default')

@section('title')
Comparing Items | PDA
@stop
@section('styles')
@stop

@section('content')
    <div class="row">
        <div class="span8">
            <h1>Comparing Items</h1>
        </div>
    </div>
    <div class="row">
        <div class="span6">
            <h2>You're comparing:</h2>
            <div class="badge-item">
                <div class="head">
                    <p>{{ $item1->name }}</p>
                </div>
                <div class="item-data">
                    <div class="icon">
                        {{ HTML::image("assets/img/d3/items/large/{$item1->icon}.png", $item1->name, ['class' => $item1->type ] ) }}
                    </div>
                    <p>{{ $item1->name }}</p>
                    <div class="clearfix"></div>
                    <ul class="attrs">
                        @foreach ($item1->attributes as $attr)
                            <li>{{ $attr-> name }} : <span class="value">{{ $attr->max }} </span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="footer"></div>
            </div>
        </div>
        <div class="span6 last">
            <h2>With:</h2>
        </div>
    </div>
@stop

@section('scripts')
<script>

</script>
@stop
