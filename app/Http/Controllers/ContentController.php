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
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif',
        ]);

        // create or save the content
        foreach ($request->only(['title', 'subtitle', 'button']) as $key => $value) {
            $oContent = Content::updateOrCreate(
                ['page' => 'home', 'section' => 'hero', 'key' => $key],
                ['value' => $value]
            );
        }

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
            $sName = 'hero_bg_'. Carbon::now()->format('y-m-d_H-i-s');
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

    public function saveAboutUs(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'sub_title_1' => 'required|string|max:255',
            'description_1' => 'required|string',
            'sub_title_2' => 'required|string|max:255',
            'description_2' => 'required|string',
            'button' => 'required|string|max:255',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif',
        ]);

        // create or save all the content
        foreach ($request->only(['title', 'description', 'sub_title_1', 'description_1', 'sub_title_2', 'description_2', 'button']) as $key => $value) {
            $oContent = Content::updateOrCreate(
                ['page' => 'home', 'section' => 'about_us', 'key' => $key],
                ['value' => $value]
            );
        }

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
            $sName = 'about-us_bg_'. Carbon::now()->format('y-m-d_H-i-s');
            $name = $sName . '.' . $originalImage->getClientOriginalExtension();
            $destinationPath = public_path('storage/images/original');

            if ($originalImage->getClientOriginalExtension() != 'webp') {
                $webpPath = 'storage/images/webp/' . $sName . '.webp';
                Webp::make($originalImage)->save(public_path($webpPath));
            }

            $originalImage->move($destinationPath, $name);

            $oContent = Content::updateOrCreate(
                ['page' => 'home', 'section' => 'about_us', 'key' => 'image'],
                ['value' => $name]
            );
        }

        return redirect()->route('admin.dashboard')->with('success', 'About Us section updated successfully');
    }
}
