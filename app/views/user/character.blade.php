@extends('layouts.default')

@section('title')
Character View | PDA
@stop
@section('styles')
@stop

@section('content')
    <div class="row">
        <div class="span8">
            <h1>Character</h1>
        </div>
        <div class="span4 charToolbar">
            <div class="m-btn-strip">
                <div class="m-btn-group">
                  <a class="m-btn red rnd mini"><i class="icon-list-1"></i> Items</a>
                  <a class="m-btn red rnd dropdown-carrettoggle mini" data-toggle="dropdown" data-hover="dropdown" href="#">
                    <span class="caret white"></span>
                  </a>
                  <ul class="m-dropdown-menu">
                      <li><a href="#"><i class="icon-list-1"></i> View Saved Items</a></li>
                      <li><a href="#"><i class="icon-list-add"></i> Add New Item</a></li>
                  </ul>
                </div>
                <a class="m-btn red rnd mini" data-toggle="tooltip" title="" data-original-title="Sync with Battle.net"><i class="icon-arrows-ccw"></i></a>
            </div>

        </div>
    </div>
    <div class="row characterStatsRow">
        <div class="span6 characterView">
            <ul>
                <?php $n = 0; ?>
                @foreach($items as $item)
                    <?php $uniqueness = ( $item['unique'] ) ? 'unique' : ''; ?>
                    <?php if ( $item['item']['name'] === 'ring' ) : ?>
                        <li class="<?php echo $item['type'] . ' ' . $uniqueness; ?>" id="123 <?php echo $n; ?>">
                            {{ Html::image("assets/img/d3/items/large/{$item['item']['icon']}.png", $item['item']['name'], ['class' => $item['type'] . ' ' . $uniqueness ] ) }}
                        </li>
                        <?php $n++; ?>
                    <?php else: ?>
                        <li class="<?php echo $item['type'] . ' ' . $uniqueness; ?>">
                            {{ Html::image("assets/img/d3/items/large/{$item['item']['icon']}.png", $item['item']['name'], ['class' => $item['type'] . ' ' . $uniqueness ] ) }}
                        </li>
                    <?php endif; ?>
                @endforeach
            </ul>
        </div>
        <div class="span3">
            @include('layouts.tables.offensiveStatistics')
        </div>
        <div class="span3">
            @include('layouts.tables.defensiveStatistics')
        </div>
        <div class="span3">
            @include('layouts.tables.damageRange')
        </div>
        <div class="span3">
            @include('layouts.tables.defensiveSpecifics')
        </div>
        <div class="span3">
            @include('layouts.tables.baseStatistics')
        </div>
        <div class="span3">
            @include('layouts.tables.healthStatistics')
        </div>
    </div>
@stop

@section('scripts')
<script>
$(document).ready(function() {
    $("table").tablecloth({
        theme: "default",
        bordered: false,
        striped: false,
    });
});
</script>
@stop
