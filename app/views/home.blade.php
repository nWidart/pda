@extends('layouts.default')
@section('slider')
<div class="banner has-dots">
    <ul>
        <li style="background-image: url( {{ asset('assets/img/featured/slide1.jpg') }} );  ">
            <h1>Import your characters easily</h1>
            <a class="m-btn red" href="{{ URL::to('auth/register') }}"><i class="icon-play-1"></i> Get Started</a>
            <!-- {{ HTML::image('assets/img/featured/slide1.jpg', '', ['class' => 'sliderImg'])}} -->
        </li>
        <li style="background-image: url({{ asset('assets/img/featured/slide2.jpg') }});  ">
            <h1>Compare items</h1>
            <a class="m-btn red" href="{{ URL::to('auth/register') }}"><i class="icon-play-1"></i> Get Started</a>
        </li>
        <li style="background-image: url({{ asset('assets/img/featured/slide3.jpg') }});  ">
            <h1>Check detailed character statistics.</h1>
            <a class="m-btn red" href="{{ URL::to('auth/register') }}"><i class="icon-play-1"></i> Get Started</a>
        </li>
    </ul>
</div>
@stop
@section('content')
<div class="row">
    <div class="span12">
        <!-- <h1>Features</h1> -->
    </div>
    <div class="span4">
        <h2>Character View</h2>
        <span class="icon"><i class="icon-user-1"></i></span>
        <p>
            You'll be able to easily import all your desired characters to your PDA. You'll be presented with a <strong>clean dashboard view of all your characters</strong> with their current levels. From here you can select to go to single character view for more detailed information.
        </p>

    </div>
    <div class="span4">
        <h2>Item Compare</h2>
        <span class="icon"><i class="icon-tools"></i></span>
        <p>
            <strong>Comparing items have never been easier!</strong> When in single mode view you can select which item to compare, and which item to compare it to. Items can be <strong>created and stored</strong> for future reference in case you want to compare multiple items.
        </p>

    </div>
    <div class="span4">
        <h2>Auction House Calculators</h2>
        <span class="icon"><i class="icon-tools"></i></span>
        <p>
            <strong>Don't want to lose money buying items & commidities on the Auction House?</strong> Find out if an item is worth selling for gold and selling the gold for real money or directly selling that item for real money first.
        </p>
    </div>

</div>
@stop
@section('cta')
    <div class="wrapper cta">
        <div class="inner-wrapper">
            <span class="big">
                Get Started Today!
            </span>
            <a href="{{ URL::to('auth/register') }}" class="m-btn red big">Sign up for free</a>
        </div>
    </div>
@stop

@section('scripts')
<script>
    $(function() {
        if(window.chrome) {
                $('.banner li').css('background-size', '100% 100%');
            }
        $('.banner').unslider({
            dots: true,
            fluid: true,
            speed: 500,
            delay: 5000
        });
    });
</script>
@stop
