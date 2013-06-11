<div class="tab-pane fade" id="importHeroes">
    <?php if ( !empty( $user->battletag ) && !empty( $user->server) ): ?>
    <form class="d3form_p2" action="/diablo/import" method="post">
        <div class="inner-form">
            @if ( !empty( $heroes ) )
                @foreach( $heroes as $hero )
                    <div class="badge-small">
                        <input type="checkbox" name="{{$hero['name']}}" value="{{$hero['id']}}" />
                        <img src="/assets/img/d3/portraits/64/{{$hero['class']}}_{{$hero['gender']}}.png" alt="" class="avatar">

                        <h3>{{$hero['name']}}</h3>
                        <h4>{{$hero['class']}}</h4>
                        <i class="icon-check-1"></i>
                    </div>
                @endforeach
            @else
                <p class="text-error">No characters were found for: <strong><?php echo $user->battletag; ?></strong> on server: <strong><?php echo strtoupper( $user->server ); ?></strong></p>
                <p>
                    <a href="#profile" class="jsProfile" data-toggle="tab">Add/modify your Battletag and server info.</a>
                </p>
            @endif
        </div><!-- end inner-form -->
        <div class="clearfix"></div>
        <br>
        <div class="modal-footer">
            <div class="m-btn-group">
                {{ Form::submit('Import', ['class' => 'm-btn green']);}}
                <a href="#" data-dismiss="modal" class="m-btn black jsCloseModal">Close</a>
            </div>
        </div>
    </form>
    <?php else: ?>
        <p>
            You havent set your Battletag & server yet. <a href="#profile" class="jsProfile" data-toggle="tab">Set your battletag & server.</a>
        </p>
    <?php endif; ?>
</div><!--end import heroes -->
