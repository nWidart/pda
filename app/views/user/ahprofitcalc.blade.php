@extends('layouts.default')

@section('title')
Real-Money AH Profit Calculator | PDA
@stop
@section('styles')
@stop

@section('content')
    <div class="row">
        <div class="span12">
            <h1>Real-Money Auction House Profit Calculator</h1>
            <p class="muted">
                Here you are able to check the profit you will make after the <em>auction house</em> and <em>cash out</em> fee. <br>
                Simply input the price of the item/commodity was solf for and you'll be able to check the profit.
            </p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="span12">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <div class="m-input-prepend">
                            <span class="add-on">$</span>
                            {{ Form::input('text', 'inputPrice','', [ 'placeholder' => 'Amount', 'class' => 'm-wrap' ] ) }}
                        </div>
                    </tr>
                    <tr>
                        <th></th>
                        <th>Sell Price</th>
                        <th>Battle.net Profit</th>
                        <th>Battle.net Profit %</th>
                        <th>Cash Out Profit</th>
                        <th>Cash Out Profit %</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Item</th>
                        <td class="itemSellPrice"></td>
                        <td class="itemBnetProfit"></td>
                        <td class="itemBnetProfitPercent"></td>
                        <td class="itemCashOutProfit"></td>
                        <td class="itemCashOutProfitPercent"></td>
                    </tr>
                    <tr>
                        <th>Commodity</th>
                        <td class="commoditySellPrice"></td>
                        <td class="commodityBnetProfit"></td>
                        <td class="commodityBnetProfitPercent"></td>
                        <td class="commodityCashOutProfit"></td>
                        <td class="commodityCashOutProfitPercent"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('scripts')
<script>
$(document).ready(function() {
    $("input[name='inputPrice']").on("change keyup paste", function(){
        var value = parseFloat($(this).val());
        if (value != 0 && !isNaN(value))
        {
            var item1 = value - 1,
                item2 = item1 * 0.85,
                comm1 = value * 0.85,
                comm2 = comm1 * 0.85;

            $('.itemSellPrice').html('$' + roundTwo(value).toFixed(2)); // 0
            $('.itemBnetProfit').html('$' + roundTwo(item1).toFixed(2));
            $('.itemBnetProfitPercent').html(roundTwo(item1 / value * 100).toFixed(2) + '%');
            $('.itemCashOutProfit').html('$' + roundTwo(item2).toFixed(2));
            $('.itemCashOutProfitPercent').html(roundTwo(item2 / value * 100).toFixed(2) + '%');

            $('.commoditySellPrice').html('$' + roundTwo(value).toFixed(2)); // 5
            $('.commodityBnetProfit').html('$' + roundTwo(comm1).toFixed(2)); // 6
            $('.commodityBnetProfitPercent').html(roundTwo(comm1 / value * 100).toFixed(2) + '%');
            $('.commodityCashOutProfit').html('$' + roundTwo(comm2).toFixed(2));
            $('.commodityCashOutProfitPercent').html(roundTwo(comm2 / value * 100).toFixed(2) + '%');
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
