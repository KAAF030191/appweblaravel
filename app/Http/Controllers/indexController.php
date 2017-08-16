<?php

namespace App\Http\Controllers;


class IndexController extends Controller
{
    public function actionIndex()
    {
        return view('Index/index');
    }
}
?>