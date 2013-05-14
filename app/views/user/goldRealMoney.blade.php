@extends('layouts.default')

@section('title')
Gold Or Real Money | PDA
@stop
@section('styles')
@stop

@section('content')
    <div class="row">
        <div class="span12">
            <h1>Selling for gold or real money?</h1>
            <p class="muted">
                 <strong>Find out if selling the item for Gold first and then selling that Gold for real money will gain you more profit than directly selling the item for real money. </strong><br>
                 Simply input the the Gold price the item was sold for plus the current gold/$ exchange rate.
            </p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="span12">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <div class="form-inline">
                                <div class="pull-left">
                                {{ Form::label('goldSellPrice', 'Sell Price', ['class' => 'inline']) }}
                                {{ Form::input('text', 'goldSellPrice','', [ 'placeholder' => 'Gold amount', 'class' => 'm-wrap goldSellPrice' ] ) }}
                                </div>
                                {{ Form::label('goldPerDollar', 'Gold / $', ['class' => 'inline']) }}
                                {{ Form::input('text', 'goldPerDollar','', [ 'placeholder' => 'Amount', 'class' => 'm-wrap goldPerDollar' ] ) }}
                        </div>
                    </tr>
                    <tr>
                        <th>Sell Price</th>
                        <th>Gold Profit</th>
                        <th>Battle.net Profit</th>
                        <th>Cash Out Profit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="sellPrice"></td>
                        <td class="goldProfit"></td>
                        <td class="bNetProfit"></td>
                        <td class="cashOutProfit"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('scripts')
<script>
$(document).ready(function()
{
    $("input.goldSellPrice").on("change keyup paste", function()
    {
        calc();
    });
    $("input.goldPerDollar").on("change keyup paste", function()
    {
        calc();
    });
    function calc()
    {
        var value = parseFloat( $("input.goldSellPrice").val() ),
            gpd = parseFloat( $("input.goldPerDollar").val() );
        if (value != 0 && !isNaN(value) && gpd != 0 && !isNaN(gpd))
        {
            var gold1 = value * 0.85,
                profit0 = gold1 / gpd,
                profit1 = profit0 * 0.85,
                profit2 = profit1 * 0.85;

            $('.sellPrice').html(roundTwo(value).toFixed(2) + ' gold');
            $('.goldProfit').html(roundTwo(gold1).toFixed(2) + ' gold');
            $('.bNetProfit').html('$' + roundTwo(profit1).toFixed(2));
            $('.cashOutProfit').html('$' + roundTwo(profit2).toFixed(2));
        }
    }
    function roundTwo( value )
    {
      var value = Math.round(value * 100) / 100
      return value;
    }
});
</script>
@stop
