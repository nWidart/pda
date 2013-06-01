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
        <div class="span4 ">
            <a href="{{ URL::previous() }}" class="m-btn black pull-right"><i class="icon-reply-1"></i>  Character View</a>
        </div>
    </div>
    <div class="row">
        <div class="span5 itemContainer">
            <h2>You're comparing</h2>
            <div class="badge-item">
                <div class="head">
                    <p class="">{{ $item1->name }}</p>
                </div>
                <div class="item-data">
                    <div class="icon">
                        {{ HTML::image("assets/img/d3/items/large/{$item1->icon}.png", $item1->name, ['class' => $item1->type ] ) }}
                    </div>
                    <p class="qualityRare">{{ $item1->name }}</p>
                    <ul class="attrs">
                        @foreach ($item1->attributes as $attr)
                            <li>{{ $attr-> name }} : <span class="value">{{ $attr->max }} </span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="footer"></div>
            </div> <!-- End .badge Item -->
        </div>
        <div class="span5 itemContainer">
            <h2>With</h2>
            <div class="badge-item">
                <div class="head">
                    <p>
                        <a href="#" class="itemEdit itemName" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Name"></a>
                    </p>
                </div>
                <div class="item-data">
                    <p>
                        Type:
                        <a href="#" class="itemType" data-type="select" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Select Item Type"></a>
                    </p>
                    <p>
                        Quality:
                        <a href="#" class="itemQuality" data-type="select" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Select Item Quality"></a>
                    </p>
                    <ul class="attrs">
                        <!-- <li>
                            <a href="#" class="attributes" data-type="select2" data-pk="1" data-value="ru" data-url="{{ URL::to("items/update") }}" data-original-title="Select Attribute"></a> :
                            <span class="value">
                                <a href="#" class="itemEdit itemAttr" data-type="text" data-pk="1" data-url="{{ URL::to("items/update") }}" data-original-title="Enter Item Attr"></a>
                            </span>
                        </li> -->
                        <li>
                            {{ Form::label('strength', 'Strength', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'strength', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemStr" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Strength">0</span></a>
                        </li>
                        <li>
                            {{ Form::label('dexterity', 'Dexterity', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'dexterity', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemDex" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Dexterity">0</a></span>
                        </li>
                        <li>
                            {{ Form::label('intelligence', 'Intelligence', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'intelligence', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemInt" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Intelligence">0</a></span>
                        </li>
                        <li>
                            {{ Form::label('vitality', 'Vitality', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'vitality', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemVit" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Vitality">0</a></span>
                        </li>
                        <li>
                            {{ Form::label('armor', 'Armor', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'armor', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemArmor" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Armor">0</a></span>
                        </li>
                        <li>
                            {{ Form::label('allResi', 'All Resist', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'allResi', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemAllRes" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item All Resist">0</a></span>
                        </li>
                        <li>
                            {{ Form::label('dodgePercent', 'Dodge %', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'dodgePercent', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemDodgePercent" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Dodge %">0</a></span>
                        </li>
                        <li>
                            {{ Form::label('bonusLifePercent', 'Extra Life %', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'bonusLifePercent', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemBonusLifePercent" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Extra Life %">0</a></span>
                        </li>
                        <li>
                            {{ Form::label('meleeReduction', 'Melee Reduction', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'meleeReduction', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemMeleeReduction" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Melee Reduction">0</a></span>
                        </li>
                        <li>
                            {{ Form::label('rangedReduction', 'Ranged Reduction', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'rangedReduction', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemRangedReduction" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Ranged Reduction">0</a></span>
                        </li>
                        <li>
                            {{ Form::label('eliteReduction', 'Elite Reduction', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'eliteReduction', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemEliteReduction" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Elite Reduction">0</a></span>
                        </li>
                        <li>
                            {{ Form::label('blockChance', 'Block Chance', ['class' => 'm-wrap inline']) }} :
                            <!-- {{ Form::input('text', 'blockChance', '0', ['class' => 'm-wrap m-ctrl-mini' ]) }} -->
                            <span class="value"><a href="#" class="itemEdit itemBlockChance" data-type="text" data-pk="1" data-url="{{ URL::to('items/update') }}" data-original-title="Enter Item Block Chance">0</a></span>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <!-- <button class="m-btn green mini jsAddAttr">+</button> -->
                </div>
            </div> <!-- End .badge Item -->
            <button class="m-btn red big btn-block calc">Calculate</button>
        </div> <!-- End span5 -->
        <div class="span2 results">
            <h2>Results</h2>
            <div class="spinner"></div>
            <div class="JsResults">
                <div class="dpsChange">
                  <span class="red">-8 478.83</span>
                  <p>DPS Difference</p>
                </div>
                <div class="ehpChange">
                  <span class="green">+75 961.45</span>
                  <p>EHP Difference</p>
                </div>
                <table class="table table-condensed table-hover">
                    <thead>
                        <tr>
                        </tr>
                        <tr>
                            <th>Stat</th>
                            <th>Diff</th>
                            <th>%</th>
                            <th>Old</th>
                            <th>New</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Str</td>
                            <td><span class="red">-83</span></td>
                            <td><span class="red">-4%</span></td>
                            <td><span class="green">2219</span></td>
                            <td><span class="red">2136</span></td>
                        </tr>
                        <tr>
                            <td>Int</td>
                            <td><span class="green">+21</span></td>
                            <td><span class="green">6%</span></td>
                            <td><span class="red">340</span></td>
                            <td><span class="green">361</span></td>
                        </tr>
                        <tr>
                            <td>Dex</td>
                            <td><span class="green">+21</span></td>
                            <td><span class="green">6%</span></td>
                            <td><span class="red">340</span></td>
                            <td><span class="green">361</span></td>
                        </tr>
                        <tr>
                            <td>Vit</td>
                            <td><span class="green">+13</span></td>
                            <td><span class="green">1%</span></td>
                            <td><span class="red">1138</span></td>
                            <td><span class="green">2136</span></td>
                        </tr>
                        <tr>
                            <td>+Life</td>
                            <td><span class="green">+15</span></td>
                            <td><span class="green">15%</span></td>
                            <td><span class="red">0</span></td>
                            <td><span class="green">15</span></td>
                        </tr>
                        <tr>
                            <td>Armor</td>
                            <td><span class="green">+140</span></td>
                            <td><span class="green">3%</span></td>
                            <td><span class="red">5098</span></td>
                            <td><span class="green">5238</span></td>
                        </tr>
                        <tr>
                            <td>Poison Res</td>
                            <td><span class="red">-46</span></td>
                            <td><span class="red">100%</span></td>
                            <td><span class="green">46</span></td>
                            <td><span class="red">0</span></td>
                        </tr>
                        <tr>
                            <td>Resist All</td>
                            <td><span class="green">+2.1</span></td>
                            <td><span class="green">0%</span></td>
                            <td><span class="red">544</span></td>
                            <td><span class="green">546.1</span></td>
                        </tr>
                        <tr>
                            <td>Dodge %</td>
                            <td><span class="red">-2</span></td>
                            <td><span class="red">2%</span></td>
                            <td><span class="green">54</span></td>
                            <td><span class="red">50</span></td>
                        </tr>
                    </tbody>
                </table>
                <div class="m-btn-group">
                    <a href="#" class="m-btn green"><i class="icon-switch"></i> Equip</a>
                    <a href="#" class="m-btn red"><i class="icon-list-add"></i> Save</a>
                    <a href="#" class="m-btn black reset"><i class="icon-ccw-1"></i> Reset</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
<script>
$(function()
{
    // Reset the results table (hide it)
    $('.reset').on('click', function(e)
    {
        $('.JsResults').slideUp();
    });

    // Calculate the stats
    // TODO a post request to realy calculate something...
    $('button.calc').on('click', function(e)
    {
        $('.spinner').show();
        setTimeout(function(){
            $('.JsResults').slideDown();
            $('.spinner').hide();
        }, 1000);
    });

    // Styling the table and making it sortable
    $("table").tablecloth({
        theme: "stats",
        bordered: true,
        condensed: true,
        sortable: true,
        striped: true,

    });

    // Searchable select boxes
    $(".select").select2();

    // Add a attribute
    // Not used
    $('.jsAddAttr').on('click', function(e)
    {
        var html = '<li>';
        // html += '<a href="#" class="attributes" data-type="select2" data-pk="1" data-value="ru" data-url="{{ URL::to("items/update") }}" data-original-title="Select Attribute">a</a> :';
        // html += '<span class="value">';
        // html += '<a href="#" class="itemEdit itemAttr" data-type="text" data-pk="1" data-url="{{ URL::to("items/update") }}" data-original-title="Enter Item Attr"></a>';
        // html += '</span>';
        html += '<select class="select">';
        html += '<option value="AL">Alabama</option>';
        html += '<option value="WY">Wyoming</option>';
        html += '</li>';
        $('ul.attrs').append( html );
    });

    $.fn.editable.defaults.mode = 'inline';
    $('.itemEdit').editable();

    $('.itemType').editable({
        value: 1,
        source: [
              {value: 1, text: 'Amulet'},
              {value: 2, text: 'Belt'},
              {value: 3, text: 'Boots'},
              {value: 4, text: 'Bracers'},
              {value: 5, text: 'Chest Armor'},
              {value: 6, text: 'Cloak'},
              {value: 7, text: 'Gloves'},
              {value: 8, text: 'Helm'},
              {value: 9, text: 'Pants'},
              {value: 10, text: 'Mighty Belt'},
              {value: 11, text: 'Ring'},
              {value: 12, text: 'Shoulders'},
              {value: 13, text: 'Spirit Stone'},
              {value: 14, text: 'Vodoo Mask'},
              {value: 15, text: 'Wizard Hat'},
              {value: 16, text: 'Two-Handed Mace'},
              {value: 17, text: 'Two-Handed Awe'},
              {value: 18, text: 'Bow'},
              {value: 19, text: 'Diabo'},
              {value: 20, text: 'Crossbow'},
              {value: 21, text: 'Two-Handed Mighty Weapon'},
              {value: 22, text: 'Polearm'},
              {value: 23, text: 'Staff'},
              {value: 24, text: 'Two-Handed Sword'},
              {value: 25, text: 'Axe'},
              {value: 26, text: 'Ceremonial Knife'},
              {value: 27, text: 'Hand Crossbow'},
              {value: 28, text: 'Dagger'},
              {value: 29, text: 'Fist Weapon'},
              {value: 30, text: 'Mace'},
              {value: 31, text: 'Mighty Weapon'},
              {value: 32, text: 'Spear'},
              {value: 33, text: 'Sword'},
              {value: 34, text: 'Wand'},
              {value: 35, text: 'Mojo'},
              {value: 36, text: 'Source'},
              {value: 37, text: 'Quiver'},
              {value: 38, text: 'Shield'},
        ]
    });
    $('.itemQuality').editable({
        value: 1,
        source: [
              {value: 1, text: 'Inferior'},
              {value: 2, text: 'Normal'},
              {value: 3, text: 'Superior'},
              {value: 4, text: 'Magic'},
              {value: 5, text: 'Rare'},
              {value: 6, text: 'Legendary'},
              {value: 7, text: 'Set'},
           ]
    });
    $('.attributes').editable({
        source: [
              {id: 'gb', text: 'Great Britain'},
              {id: 'us', text: 'United States'},
              {id: 'ru', text: 'Russia'}
           ],
        select2: {
           multiple: false
        }
    });
});
</script>
@stop
