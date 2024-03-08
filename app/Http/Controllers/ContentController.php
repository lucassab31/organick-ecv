<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Buglinjo\LaravelWebp\Facades\Webp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'image' => 'nullable|file|image|mimes:jpeg,png,gif,webp|max:2048',
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

        // upload the image
        if ($request->hasFile('image')) {
            // delete old file
            $oldImage = Content::where('page', 'home')->where('section', 'hero')->where('key', 'image')->first();
            if ($oldImage) {
                $oldImagePath = public_path('images/original/' . $oldImage->value);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
                $oldImageWebpPath = public_path('images/webp/' . pathinfo($oldImage->value, PATHINFO_FILENAME) . '.webp');
                if (File::exists($oldImageWebpPath)) {
                    File::delete($oldImageWebpPath);
                }
            }

            $originalImage = $request->file('image');
            $sName = 'hero_bg_'. Carbon::now()->format('y-m-d');
            $name = $sName . '.' . $originalImage->getClientOriginalExtension();
            $destinationPath = public_path('storage/images/original');

            if ($originalImage->getClientOriginalExtension() != 'webp') {
                $webpPath = 'storage/images/webp/' . $sName . '.webp';
                Webp::make($originalImage)->save(public_path($webpPath));
            }

            $originalImage->move($destinationPath, $name);

            $oContent = Content::updateOrCreate(
                ['page' => 'home', 'section' => 'hero', 'key' => 'image'],
                ['value' => $name]
            );
        }

        return redirect()->route('admin.dashboard')->with('success', 'Hero section updated successfully');
    }
}
