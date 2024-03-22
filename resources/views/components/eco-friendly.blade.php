@if (isset($inIframe) && $inIframe)
    @extends('layouts.component')
    @section('content')
    @endif
    <section class="relative flex justify-center w-full">
        <div class="w-1/2 h-[930px]">
            <img src="{{ asset('assets/eco-friendly.jpg') }}" alt="Eco Friendly" class="object-cover object-center">
        </div>
        <div class="w-1/2 relative">
            <div class="absolute bg-white rounded-2xl p-20 top-1/2 -translate-y-1/2 -left-20 w-fit">
                <span class="font-yellowtail text-ds-green text-h4 mb-2">About Us</span>
                <h2 class="text-h2 mb-5 text-ds-blue">
                    Econis is a Friendly<br> Organic Store
                </h2>
                <p class="font-medium text-2xl text-ds-blue ">Start with Our Company First</p>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium <br> doloremque laudantium. Sed
                    ut perspiciatis.
                </p>
                <p class="font-medium text-2xl text-ds-blue mt-9">Learn How to Grow Yourself</p>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium <br> doloremque laudantium. Sed
                    ut perspiciatis.
                </p>
                <p class="font-medium text-2xl text-ds-blue mt-9">Farming Strategies of Today</p>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium <br> doloremque laudantium. Sed
                    ut perspiciatis.
                </p>
            </div>

        </div>
    </section>
    @if (isset($inIframe) && $inIframe)
    @endsection
@endif
