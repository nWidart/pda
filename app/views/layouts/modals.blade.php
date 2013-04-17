<div class="modal hide fade in" id="modal">
  <div class="modal-header">
    <ul class="modalList">
        <li><a href="#profile" class="jsProfile" data-toggle="tab">Proile</a></li>
        <li><a href="#importHeroes" data-toggle="tab">Import Heroes</a></li>
        <li><a href="#settings" data-toggle="tab">Settings</a></li>
    </ul>
  </div>
  <div class="modal-body">
    <div class="row-fluid">
        <div id="modalTab">
                <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profileBattleNet" data-toggle="tab">Battle.net</a></li>
                            <li><a href="#profileInfo" data-toggle="tab">Info</a></li>
                            <li><a href="#profileSecurity" data-toggle="tab">Security</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="profileBattleNet">
                                {{ Form::open( ['url' => '/dashboard/update-user-btag-info', 'method' => 'put', 'class' => 'form-horizontal updateBtagInfo'] ) }}
                                {{ Form::hidden('userID', Sentry::getUser()->id) }}
                                {{ Form::token() }}
                                <div class="control-group">
                                {{ Form::label('battletag', 'Battletag', ['class' => 'control-label' ])}}
                                    <div class="controls">
                                        <?php $battletag = (isset($user)) ? $user->battletag : ''; ?>
                                        {{ Form::text('battletag', $battletag, array('placeholder' => 'Battletag')) }}
                                    </div>
                                </div>
                                <div class="control-group">
                                {{ Form::label('server', 'Server', ['class' => 'control-label' ])}}
                                    <div class="controls">
                                        <?php $server = (isset($user)) ? $user->server : 'eu'; ?>
                                        {{ Form::select('server', ['eu' => 'EU', 'us' => 'US', 'tw' => 'TW', 'kr' => 'KR', 'cn' => 'CN' ], $server) }}
                                    </div>
                                </div>

                                <div class="modal-footer">
                                  <a href="/dashboard" class="btn">Cancel</a>
                                  {{ Form::submit('Update Battle.net information', ['class' => 'btn btn-primary']) }}
                                </div>
                                {{ Form::close() }}
                            </div>
                            <!-- end #profileBattleNet -->

                            <div class="tab-pane fade" id="profileInfo">
                                {{ Form::open( ['url' => '/dashboard/update-user-info', 'method' => 'put', 'class' => 'form-horizontal updateProfileInfo'] ) }}
                                {{ Form::hidden('userID', Sentry::getUser()->id) }}
                                {{ Form::token() }}
                                  <div class="control-group">
                                    {{ Form::label('firstName', 'First Name', ['class' => 'control-label' ])}}
                                    <div class="controls">
                                      <?php $firstName = (isset($user)) ? $user->first_name : ''; ?>
                                      {{ Form::text('firstName', $firstName, array('placeholder' => 'First Name')) }}
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    {{ Form::label('lastName', 'Last Name', ['class' => 'control-label' ])}}
                                    <div class="controls">
                                      <?php $lastName = (isset($user)) ? $user->last_name : ''; ?>
                                      {{ Form::text('lastName', $lastName, array('placeholder' => 'Last Name')) }}
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="/dashboard" class="btn">Cancel</a>
                                    {{ Form::submit('Update profile', ['class' => 'btn btn-primary']) }}
                                  </div>
                                </form>
                            </div>
                            <!-- end #profileInfo -->

                            <div class="tab-pane fade" id="profileSecurity">
                                profileSecurity
                            </div>
                            <!-- end #profileSecurity -->

                        </div>
                    </div>
                    <div class="tab-pane fade" id="importHeroes">
                        <?php if ( !empty( $user->battletag ) && !empty( $user->server) ): ?>
                        <form class="d3form_p2" action="/diablo/import" method="post">
                            @if ( !empty( $options ) )
                                <select multiple="multiple" class="d3characters" name="d3characters[]">
                                    @foreach($options as $option)
                                        {{ $option }}
                                    @endforeach
                                </select>
                            @else
                                <p class="text-error">No characters were found for: <strong><?php echo $user->battletag; ?></strong> on server: <strong><?php echo strtoupper( $user->server ); ?></strong></p>
                                <p>
                                    <a href="#profile" class="jsProfile" data-toggle="tab">Add/modify your Battletag and server info.</a>
                                </p>
                            @endif
                            <br>
                            <div class="modal-footer">
                              <a href="/dashboard" class="btn">Cancel</a>
                              {{ Form::submit('Import', ['class' => 'btn btn-primary']);}}
                            </div>
                        </form>
                        <?php else: ?>
                            <p>
                                You havent set your Battletag & server yet. <a href="#profile" class="jsProfile" data-toggle="tab">Set your battletag & server.</a>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="tab-pane fade" id="settings">

                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
