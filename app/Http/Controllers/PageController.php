<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
    	    return 'Selamat Datang';
	}

    public function about() {
    	    return 'Raya Rabbani A, 244107020159';
	}

    public function articles($id) {
    	    return 'Halaman Artikel dengan ID '.$id;
	}
}
