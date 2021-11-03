<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\CommonController;

class RuleController extends Controller
{
    //
    public function index() {
        //SP/PC切り替え--customerページでのみ利用（その他はPCのみ作成でOK）
        CommonController::selectBrowser();
        $page_title = "原チケ-RULE";
        $page_type = "RULE";

        $dispData = [
            'pageTitle' => $page_title,
            'pageType' => $page_type,
        ];

        return view('customer.'. USER_AGENT .'.rule', $dispData);

    }

}