<div class="modal hide fade in" id="modal" data-backdrop="static">
  <div class="modal-header">
    <ul class="modalList">
        <li class="active">
            <a href="#profile" data-toggle="tab">
                <i class="icon-user-1 s30"></i>
                Profile</a>
        </li>
        <li>
            <a href="#importHeroes" data-toggle="tab">
                <i class="icon-download-1 s30"></i>
                Import Heroes</a>
        </li>
        <li>
            <a href="#settings" data-toggle="tab">
                <i class="icon-cog-1 s30"></i>
                Settings</a>
        </li>
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
                            <li><a href="#changePassword" data-toggle="tab">Change password</a></li>
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
                                        {{ Form::text('battletag', $battletag, array('placeholder' => 'Battletag', 'class' => ' m-wrap')) }}
                                    </div>
                                </div>
                                <div class="control-group">
                                {{ Form::label('server', 'Server', ['class' => 'control-label' ])}}
                                    <div class="controls">
                                        <?php $server = (isset($user)) ? $user->server : 'eu'; ?>
                                        {{ Form::select('server', ['eu' => 'EU', 'us' => 'US', 'tw' => 'TW', 'kr' => 'KR', 'cn' => 'CN' ], $server, array('class'=> 'm-wrap')) }}
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="m-btn-group">
                                      {{ Form::submit('Update Battle.net information', ['class' => 'm-btn green']) }}
                                      <a href="#" data-dismiss="modal" class="m-btn black jsCloseModal">Close</a>
                                    </div>
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
                                      {{ Form::text('firstName', $firstName, array('placeholder' => 'First Name', 'class' => ' m-wrap')) }}
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    {{ Form::label('lastName', 'Last Name', ['class' => 'control-label' ])}}
                                    <div class="controls">
                                      <?php $lastName = (isset($user)) ? $user->last_name : ''; ?>
                                      {{ Form::text('lastName', $lastName, array('placeholder' => 'Last Name', 'class' => ' m-wrap')) }}
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <div class="m-btn-group">
                                        {{ Form::submit('Update profile', ['class' => 'm-btn green']) }}
                                        <a href="#" data-dismiss="modal" class="m-btn black jsCloseModal">Close</a>
                                    </div>
                                  </div>
                                </form>
                            </div>
                            <!-- end #profileInfo -->

                            <div class="tab-pane fade" id="changePassword">
                                {{ Form::open( ['url' => '/account/changeUserPassword', 'method' => 'post', 'class' => 'form-horizontal updateUserPassword'] ) }}
                                    {{ Form::hidden('userID', Sentry::getUser()->id) }}
                                    {{ Form::token() }}

                                    <!-- Old Password -->
                                    <div class="control-group{{ $errors->first('oldPassword', ' error') }}">
                                        {{ Form::label('oldPassword', 'Old Password', ['class' => 'control-label' ])}}
                                        <div class="controls">
                                            <input type="password" name="oldPassword" id="oldPassword" class="m-wrap" value="" />
                                            {{ $errors->first('oldPassword', '<span class="help-block">:message</span>') }}
                                        </div>
                                    </div>

                                    <!-- New Password -->
                                    <div class="control-group{{ $errors->first('password', ' error') }}">
                                        <label class="control-label" for="password">New Password</label>
                                        <div class="controls">
                                            <input type="password" name="password" id="password" class="m-wrap"  value="" />
                                            {{ $errors->first('password', '<span class="help-block">:message</span>') }}
                                        </div>
                                    </div>

                                    <!-- Confirm New Password  -->
                                    <div class="control-group{{ $errors->first('password_confirm', ' error') }}">
                                        <label class="control-label" for="password_confirm">Confirm New Password</label>
                                        <div class="controls">
                                            <input type="password" name="password_confirm" id="password_confirm" class="m-wrap"  value="" />
                                            {{ $errors->first('password_confirm', '<span class="help-block">:message</span>') }}
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <div class="m-btn-group">
                                            {{ Form::submit('Change password', ['class' => 'm-btn green']) }}
                                            <a href="#" data-dismiss="modal" class="m-btn black jsCloseModal">Close</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- end #changePassword -->

                        </div>
                    </div>

                    <!-- include the Import Heroes tab -->
                    @include('layouts.modals.modal_importHeroes')

                    <div class="tab-pane fade" id="settings">

                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<script>

</script>
