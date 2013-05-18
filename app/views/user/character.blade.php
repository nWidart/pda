@extends('layouts.default')

@section('title')
Character View | PDA
@stop
@section('styles')
@stop

<?php
    $options = [];
    foreach ($characters as $char)
    {
        $options[$char->id] = $char->name;
    }
?>
@section('content')
    <div class="row">
        <div class="span4">
            <h1>Character</h1>
        </div>
        <div class="span4 charTitle">
            {{ Form::select('character', $options, $character['id'], ['class' => 'm-wrap jsCharSelect']);}}
            <a href="" data-toggle="tooltip" title="" data-original-title="Change the currently viewed character"><i class="icon-info-circled"></i></a>
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
                <a href="{{ URL::to('diablo/sync/' . $character['id'] )}}" class="m-btn red rnd mini" data-toggle="tooltip" title="" data-original-title="Sync with Battle.net"><i class="icon-arrows-ccw"></i></a>
            </div>

        </div>
    </div>


    <div class="row characterStatsRow">
        <div class="span6 skillView">
            <ul>
                @foreach( $skills as $skill)
                    <li><a href="/d3/en/class/barbarian/passive/ruthless">{{ HTML::image("assets/img/d3/skills/64/{$skill['icon']}.png") }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="clearfix"></div>

        <div class="span6 characterView">
            <ul>
                <?php $n = 0; ?>
                @foreach($items as $item)
                    <?php $uniqueness = ( $item['unique'] ) ? 'unique' : ''; ?>
                    <?php if ( $item['type'] === 'ring' ) : ?>
                        <li class="<?php echo $item['type'] . ' ' . $uniqueness . ' ring-' . $n; ?>" id="<?php echo $n; ?>">
                            <div class="icon">
                                <a href="{{ URL::to('item/compare')}}" data-tooltip="<?php
                                  foreach ($item['item']['attributes'] as $attr) {
                                        echo $attr['name'] . ' : ' . $attr['max'].'<br>';
                                    }
                                ?>" class="nwTooltip" data-tooltip-title="{{ $item['item']['name'] }}">
                                {{ HTML::image("assets/img/d3/items/large/{$item['item']['icon']}.png", $item['item']['name'], ['class' => $item['type'] . ' ' . $uniqueness ] ) }}
                                </a>
                            </div>
                        </li>
                        <?php $n++; ?>
                    <?php else: ?>
                        <li class="<?php echo $item['type'] . ' ' . $uniqueness; ?>">
                            <div class="icon">
                                <a href="{{ URL::to('item/compare/' . $item['item']['id'] ) }}" data-tooltip="<?php
                                  foreach ($item['item']['attributes'] as $attr) {
                                        echo $attr['name'] . ' : ' . $attr['max'] .'<br>';
                                    }
                                ?>" data-tooltip-title="{{ $item['item']['name'] }}" class="nwTooltip" data-itemId="{{ $item['item']['id'] }}">
                                {{ HTML::image("assets/img/d3/items/large/{$item['item']['icon']}.png", $item['item']['name'], ['class' => $item['type'] . ' ' . $uniqueness ] ) }}
                                </a>
                            </div>
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
$(document).ready(function()
{
    // Making the select dropdown redirect to correct profile page
    $('.jsCharSelect').change( function ()
    {
        var charId = $(this).val();
        window.location = "/character/profile/" + charId;
    });

    // Activating the tooltips
    $('a[title]').qtip();

    // Making the table awesome
    $("table").tablecloth({
        theme: "default",
        bordered: false,
        striped: false,
    });

    // Activating the tooltips
    $('.nwTooltip').qtip({
        content: {
            title: {
                text: function (api)
                {
                    return $(this).data('tooltip-title');
                }
            },
            attr: 'data-tooltip'
        },
        style: {
            classes: 'qtip-tipsy qtip-shadow'
        }
    });
});
</script>
@stop
