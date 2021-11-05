<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\CommonController;


class SearchController extends Controller
{
    //

    //
    public function index() {
        $commonController = new CommonController;
        $commonController->selectBrowser();
        $page_title = "原チケ-Search";
        $page_type = "SEARCH";

        $dispData = [
            'pageTitle' => $page_title,
            'pageType' => $page_type,
        ];

        return view('customer.'. USER_AGENT .'.search', $dispData);

    }
}
