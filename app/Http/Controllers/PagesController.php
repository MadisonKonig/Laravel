<?php
/**
 * Created by PhpStorm.
 * User: rob
 * Date: 05/04/18
 * Time: 5:41 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PagesController extends Controller
{
	public function contact(){
		return view('pages.contactus');
	}

	public function about(){
		return view('pages.aboutus');
	}
}