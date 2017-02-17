<?php

namespace App\Http\Controllers;


class AdminLogout extends Controller {

	public function doAdminlogout() {

		session_start();

		$_SESSION = [];


		unset($_SESSION);

		session_destroy();

		return redirect()->route('index'); //We redirect to admin_login page
    }
}