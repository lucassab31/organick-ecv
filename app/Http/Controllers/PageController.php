<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $oContent = Content::where('page', 'home')->get();

        // make an object oContentPage : section => key => value
        $oContentPage = new \stdClass();
        foreach ($oContent as $content) {
            $oContentPage->{$content->section}->{$content->key} = $content->value;
        }

        return view('home', ['content']);
    }
}
