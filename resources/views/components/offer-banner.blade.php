@if (isset($inIframe) && $inIframe)
    @extends('layouts.component')
    @section('content')
    @endif

    <section class="relative flex justify-center w-full p-14">
        <article class="flex items-center max-w-[1390px] gap-9">
          <div class="relative">
            <picture class="aspect-[960/449]" loading="lazy">
                <source
                    srcset="{{ isset($content->offer_banner->image) ? asset('storage/images/webp/' . pathinfo($content->offer_banner->image, PATHINFO_FILENAME) . '.webp') : '' }}"
                    type="image/webp">
                <img src="{{ isset($content->offer_banner->image) ? asset('storage/images/original/' . $content->offer_banner->image) : '' }}"
                    alt="Hero banner" />
            </picture>
            <div class="absolute top-1/2 -translate-y-1/2 left-10">
              <p class="font-yellowtail text-ds-green text-h4 mb-2">Titre de l'image 1</p>
              <p class="text-lg text-white text-h3">Sous-titre de l'image 1</p>      
            </div>
          </div>
          <div class="relative">
            <picture class="aspect-[960/449]" loading="lazy">
                <source
                    srcset="{{ isset($content->offer_banner->image) ? asset('storage/images/webp/' . pathinfo($content->offer_banner->image, PATHINFO_FILENAME) . '.webp') : '' }}"
                    type="image/webp">
                <img src="{{ isset($content->offer_banner->image) ? asset('storage/images/original/' . $content->offer_banner->image) : '' }}"
                    alt="Hero banner" />
            </picture>
            <div class="absolute top-1/2 -translate-y-1/2 left-10">
              <p class="font-yellowtail text-ds-green text-h4 mb-2">Titre de l'image 2</p>
              <p class="text-lg text-ds-blue text-h3">Sous-titre de l'image 2</p>
            </div>
          </div>
        </article>
    </section>      

    @if (isset($inIframe) && $inIframe)
    @endsection
@endif
