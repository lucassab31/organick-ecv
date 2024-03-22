@if (isset($inIframe) && $inIframe)
    @extends('layouts.component')
    @section('content')
@endif

    <div class="relative flex w-full">
        <picture class="aspect-[960/449]" loading="lazy">
            <source
                srcset="{{ isset($content->hero->image) ? asset('storage/images/webp/' . pathinfo($content->hero->image, PATHINFO_FILENAME) . '.webp') : '' }}"
                type="image/webp">
            <img src="{{ isset($content->hero->image) ? asset('storage/images/original/' . $content->hero->image) : '' }}"
                alt="Hero banner" />
        </picture>
        <div class="absolute top-0 left-0 w-full h-full flex items-center container mx-auto p-5 lg:p-10">
            <div class="max-w-[530px] translate-x-1/2">
                <span
                    class="font-yellowtail text-ds-green text-h4 mb-2">{{ isset($content->hero->subtitle) ? $content->hero->subtitle : '' }}</span>
                <h1 class="text-h1 mb-5">{{ isset($content->hero->title) ? $content->hero->title : '' }}</h1>
                <a href="#" class="btn btn--secondary">
                    <span>{{ isset($content->hero->button) ? $content->hero->button : '' }}</span>
                    <div>
                        <svg width="9" height="8" viewBox="0 0 9 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="m4.476 1.129 3.395 3.064-3.395 3.065M7.4 4.193H.516" stroke="#fff"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>

@if (isset($inIframe) && $inIframe)
    @endsection
@endif
