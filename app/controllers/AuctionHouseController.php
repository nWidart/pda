<?php

class AuctionHouseController extends BaseController {
    public $characters;
    /**
     * Attach the Auth filter to the controller
     *
     */
    public function __construct()
    {
        $this->beforeFilter('auth');
        if ( Sentry::check() )
            $this->characters = User::find( (int)Sentry::getUser()->id )->characters;
    }

    public function getAHProfitCalc()
    {
        $data = [
            'user'       => Sentry::getUser(),
            'characters' => $this->characters
        ];
        return View::make('user.ahprofitcalc', $data);
    }

    public function getGoldOrRealMoney()
    {
        $data = [
            'user'       => Sentry::getUser(),
            'characters' => $this->characters
        ];
        return View::make('user.goldRealMoney', $data);
    }
}
