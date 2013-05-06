@extends('layouts.default')

@section('title')
Character View | PDA
@stop
@section('styles')
@stop

@section('content')
    <div class="row">
        <div class="span12">
            <h1>Character</h1>
        </div>
    </div>
    <div class="row">
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
            <table class="table statistics table-hover">
                <thead>
                    <tr>
                        <th>Offensive Statistics</th>
                        <th><i class="icon-down-open-1"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DPS</td>
                        <td>80 000</td>
                    </tr>
                    <tr>
                        <td>DPS</td>
                        <td>70 000</td>
                    </tr>
                    <tr>
                        <td>DPS</td>
                        <td>50 000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="span3">
            <table class="table statistics table-hover">
                <thead>
                    <tr>
                        <th>Offensive Statistics</th>
                        <th><i class="icon-down-open-1"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DPS</td>
                        <td>80 000</td>
                    </tr>
                    <tr>
                        <td>DPS</td>
                        <td>70 000</td>
                    </tr>
                    <tr>
                        <td>DPS</td>
                        <td>50 000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="m-btn-group actionBar">
            <a href="#" class="m-btn red icn-only" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left"><i class="icon-remove icon-white"></i></a>
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
