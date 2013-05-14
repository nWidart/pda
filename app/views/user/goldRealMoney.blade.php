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
        </div>
    </div>
    <div class="row">
        <div class="span12">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <div class="form-inline">
                            {{ Form::open(array('class' => 'goldVsRealMoney')) }}
                            {{ Form::label('goldSellPrice', 'goldSellPrice', ['class' => 'inline']) }}
                            {{ Form::input('text', 'goldSellPrice','', [ 'placeholder' => 'Gold amount', 'class' => 'm-wrap goldSellPrice' ] ) }}

                            {{ Form::label('goldPerDollar', 'goldPerDollar', ['class' => 'inline']) }}
                            {{ Form::input('text', 'goldPerDollar','', [ 'placeholder' => 'Amount', 'class' => 'm-wrap goldPerDollar' ] ) }}
                            <button type="submit" class="m-btn green rnd">Calculate</button>
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
$(document).ready(function() {
    $('form.goldVsRealMoney').on('submit', function(e) {
        e.preventDefault();
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
    });
    function roundTwo( value )
    {
      var value = Math.round(value * 100) / 100
      return value;
    }
});
</script>
@stop
