<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\CommonController;

class HomeController extends Controller
{
    //
    public function index() {
        //SP/PC切り替え--customerページでのみ利用（その他はPCのみ作成でOK）
        CommonController::selectBrowser();
        $page_title = "原チケ-HOME";
        $page_type = "HOME";

        $dispData = [
            'pageTitle' => $page_title,
            'pageType' => $page_type,
        ];

        return view('customer.'. USER_AGENT .'.home', $dispData);

    }

}