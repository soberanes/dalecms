<?php
class AdminController extends BaseController {

    public function index(){

        $contacts_count = Contact::count();
        $users_count = User::count();

        $data = array(
            "contacts_count" => $contacts_count,
            "contacts_count" => $contacts_count,
        );


        return View::make('admin.index', $data);
    }

}
