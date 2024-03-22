<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $content = $this->getContent();

        return view('home', compact('content'));
    }

    public function getHeroComponent() {
        $oContentPage = $this->getContent();

        $inIframe = true;

        return view('components.hero-banner', ['content' => $oContentPage, 'inIframe' => $inIframe]);
    }

    public function getAboutUsComponent() {
        $oContentPage = $this->getContent();

        $inIframe = true;

        return view('components.aboutus', ['content' => $oContentPage, 'inIframe' => $inIframe]);
    }

    public function getOfferBannerComponent() {
        $oContentPage = $this->getContent();

        $inIframe = true;

        return view('components.offer-banner', ['content' => $oContentPage, 'inIframe' => $inIframe]);
    }

    public function getEcoFriendlyComponent() {
        $oContentPage = $this->getContent();

        $inIframe = true;

        return view('components.eco-friendly', ['content' => $oContentPage, 'inIframe' => $inIframe]);
    }

    public function getNewsComponent() {
        $oContentPage = $this->getContent();

        $inIframe = true;

        return view('components.news', ['content' => $oContentPage, 'inIframe' => $inIframe]);
    }

    private function getContent() {
        $oContent = Content::where('page', 'home')->get();

        // make an object oContentPage : section => key => value
        $oContentPage = new \stdClass();
        foreach ($oContent as $content) {
            if (!isset($oContentPage->{$content->section})) {
                $oContentPage->{$content->section} = new \stdClass();
            }
            $oContentPage->{$content->section}->{$content->key} = $content->value;
        }

        return $oContentPage;
    }
}
