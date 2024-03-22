@if (isset($inIframe) && $inIframe)
    @extends('layouts.component')
    @section('content')
    @endif

    <section class="relative flex justify-center w-full p-14">
        <article class="flex items-center max-w-[1390px] gap-9">
            <div>
                <div class="bg-cover bg-center rounded-lg h-[360px] flex items-center pl-16 pr-36"
                    style="background-image: url('{{ asset('assets/offer1.png') }}')">
                    <div class="">
                        <p class="font-yellowtail text-ds-green text-h4 mb-2">Titre de l'image 1</p>
                        <p class="text-lg text-white text-h3">Sous-titre de l'image 1</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-cover bg-center rounded-lg h-[360px] flex items-center pl-16 pr-36 "
                    style="background-image: url('{{ asset('assets/offer2.png') }}')">
                    <div>
                        <p class="font-yellowtail text-ds-green text-h4 mb-2">Titre de l'image 2</p>
                        <p class="text-lg text-ds-blue text-h3">Sous-titre de l'image 2</p>
                    </div>
                </div>
            </div>
        </article>
    </section>

    @if (isset($inIframe) && $inIframe)
    @endsection
@endif
