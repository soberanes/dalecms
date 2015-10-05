<?php
class LandingController extends BaseController {

    public function index(){
        return View::make('landing.index');
    }

}
