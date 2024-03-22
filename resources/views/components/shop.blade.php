<section class="text-center container mx-auto px-5 py-28 !max-w-[1400px]">
    <span class="text-h4 font-yellowtail text-ds-green mb-2">Categories</span>
    <h2 class="text-h2 mb-10">Our Products</h2>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 mb-16 lg:mb-28">
        @for ($i = 0; $i < 8; $i++)
            <div class="flex flex-col gap-2 justify-start text-left p-4 lg:p-8 bg-ds-white rounded-2xl">
                <span class="w-max text-ds-white bg-ds-blue rounded-lg p-1 text-xs lg:text-base">Vegetable</span>
                <img src="{{ asset('assets/broccoli.png') }}" alt="Broccoli">
                <div class="flex flex-col gap-2">
                    <span class="mb-1 text-sm font-bold lg:text-btn">Calabrese Broccoli</span>
                    <hr class="bg-ds-grey text-ds-grey">
                    <div class="flex flex-wrap justify-between">
                        <div class="flex gap-2">
                            <del class="text-xs lg:text-base opacity-60">$20.00</del>
                            <span class="text-sm font-bold lg:text-btn">$13.00</span>
                        </div>
                        <div class="flex gap-[2px]">
                            @for ($j = 0; $j < 5; $j++)
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.678 1.094c.308-.904 1.586-.904 1.893 0l.984 2.89a1 1 0 0 0 .947.677h3.08c.98 0 1.375 1.263.57 1.822L11.74 8.155a1 1 0 0 0-.377 1.144l.94 2.76c.31.913-.724 1.693-1.517 1.144l-2.592-1.798a1 1 0 0 0-1.14 0l-2.593 1.798c-.792.55-1.827-.231-1.516-1.144l.94-2.76a1 1 0 0 0-.377-1.144l-2.41-1.672c-.805-.559-.41-1.822.57-1.822h3.08a1 1 0 0 0 .947-.678z"
                                        fill="#FFA858" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
    <a href="#" class="btn btn--primary mx-auto">
        <span>Load more</span>
        <div>
            <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="m4.476 1.129 3.395 3.064-3.395 3.065M7.4 4.193H.516" stroke="#fff" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </div>
    </a>
</section>
