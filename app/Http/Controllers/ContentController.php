<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index() {
        $oContent = Content::where('page', 'home')->get();

        $oContentPage = new \stdClass();
        foreach ($oContent as $content) {
            if (!isset($oContentPage->{$content->section})) {
                $oContentPage->{$content->section} = new \stdClass();
            }
            $oContentPage->{$content->section}->{$content->key} = $content->value;
        }

        return view('dashboard', [
            'content' => $oContentPage
        ]);
    }

    public function saveHero(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'button' => 'required|string|max:255',
            // 'image' => 'required',
        ]);

        // create or save the content
        $oContent = Content::updateOrCreate(
            ['page' => 'home', 'section' => 'hero', 'key' => 'title'],
            ['value' => $request->title]
        );
        $oContent = Content::updateOrCreate(
            ['page' => 'home', 'section' => 'hero', 'key' => 'subtitle'],
            ['value' => $request->subtitle]
        );
        $oContent = Content::updateOrCreate(
            ['page' => 'home', 'section' => 'hero', 'key' => 'button'],
            ['value' => $request->button]
        );

        return redirect()->route('admin.dashboard')->with('success', 'Hero section updated successfully');
    }
}
