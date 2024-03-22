@if (isset($inIframe) && $inIframe)
    @extends('layouts.component')
    @section('content')
    @endif
    <section class="container mx-auto px-5 py-14 w-full flex justify-center">
        <article class="flex flex-col items-center max-w-[1380px]">
            <div class="flex items-end justify-between w-full mb-5">
                <div>
                    <span class="font-yellowtail text-ds-green text-h4 mb-2">News</span>
                    <h2 class="text-h2  text-ds-blue">We Believe in Working <br> Accredited Farmers</h2>
                </div>
                <a href="#" class="btn btn--outlined">
                    <span>More News</span>
                    <div>
                        <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="m4.476 1.129 3.395 3.064-3.395 3.065M7.4 4.193H.516" stroke="#fff"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="flex items-center gap-5 mt-5">
                <div class="relative">
                    <picture class="aspect-[960/449]" loading="lazy">
                        <source
                            srcset="{{ isset($content->news->image_1) ? asset('storage/images/webp/' . pathinfo($content->news->image_1, PATHINFO_FILENAME) . '.webp') : '' }}"
                            type="image/webp" loading="lazy">
                        <img src="{{ isset($content->news->image_1) ? asset('storage/images/original/' . $content->news->image_1) : '' }}"
                            alt="New n°2 image" loading="lazy"/>
                    </picture>
                    <p
                        class="absolute rounded-full bg-ds-white top-3 left-3 w-20 h-20 flex items-center justify-center text-center text-h6 font-extrabold flex-col">
                        25
                        <span class="text-quotes">Nov</span>
                    </p>
                    <div
                        class="absolute p-11 max-w-[600px] min-w-[600px] -bottom-12 bg-ds-white rounded-3xl left-1/2 -translate-x-1/2 drop-shadow-lg">
                        <div class="flex items-center gap-1">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.3161 1.45446C11.4741 0.516515 10.298 0 9 0C7.69504 0 6.51512 0.51339 5.67701 1.44553C4.82983 2.38793 4.41705 3.66873 4.51397 5.05176C4.70608 7.78031 6.71848 9.99994 9 9.99994C11.2815 9.99994 13.2905 7.78076 13.4856 5.05265C13.5838 3.68212 13.1684 2.404 12.3161 1.45446ZM16.6152 19.9999H1.38482C1.18547 20.0026 0.988051 19.9594 0.806921 19.8734C0.625791 19.7874 0.46551 19.6609 0.337738 19.503C0.0564959 19.1561 -0.0568664 18.6825 0.0270736 18.2035C0.392256 16.1133 1.53194 14.3575 3.32323 13.1249C4.91463 12.0307 6.93049 11.4285 9 11.4285C11.0695 11.4285 13.0854 12.0312 14.6768 13.1249C16.4681 14.3571 17.6077 16.1129 17.9729 18.203C18.0569 18.682 17.9435 19.1557 17.6623 19.5026C17.5345 19.6606 17.3743 19.7872 17.1931 19.8732C17.012 19.9592 16.8146 20.0025 16.6152 19.9999Z"
                                    fill="#EFD372" />
                            </svg>
                            <span>{{ isset($content->news->author_1) ? $content->news->author_1 : '' }}</span>
                        </div>
                        <div class="mt-5">
                            <h6 class="text-h6 text-ds-blue">{{ isset($content->news->title_1) ? $content->news->title_1 : '' }}</h6>
                            <p>{{ isset($content->news->decription_1) ? $content->news->decription_1 : '' }}</p>
                        </div>

                        <a href="#" class="btn btn--secondary mt-5">
                            <span>Read More</span>
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
                <div class="relative">
                    <picture class="aspect-[960/449]" loading="lazy">
                        <source
                            srcset="{{ isset($content->news->image_2) ? asset('storage/images/webp/' . pathinfo($content->news->image_2, PATHINFO_FILENAME) . '.webp') : '' }}"
                            type="image/webp" loading="lazy">
                        <img src="{{ isset($content->news->image_2) ? asset('storage/images/original/' . $content->news->image_2) : '' }}"
                            alt="New n°2 image" loading="lazy"/>
                    </picture>
                    <p
                        class="absolute rounded-full bg-ds-white top-3 left-3 w-20 h-20 flex items-center justify-center text-center text-h6 font-extrabold flex-col">
                        31
                        <span class="text-quotes">Jan</span>
                    </p>

                    <div
                        class="absolute p-11 max-w-[600px] min-w-[600px] -bottom-12  bg-ds-white rounded-3xl left-1/2 -translate-x-1/2 drop-shadow-lg">
                        <div class="flex items-center gap-1">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.3161 1.45446C11.4741 0.516515 10.298 0 9 0C7.69504 0 6.51512 0.51339 5.67701 1.44553C4.82983 2.38793 4.41705 3.66873 4.51397 5.05176C4.70608 7.78031 6.71848 9.99994 9 9.99994C11.2815 9.99994 13.2905 7.78076 13.4856 5.05265C13.5838 3.68212 13.1684 2.404 12.3161 1.45446ZM16.6152 19.9999H1.38482C1.18547 20.0026 0.988051 19.9594 0.806921 19.8734C0.625791 19.7874 0.46551 19.6609 0.337738 19.503C0.0564959 19.1561 -0.0568664 18.6825 0.0270736 18.2035C0.392256 16.1133 1.53194 14.3575 3.32323 13.1249C4.91463 12.0307 6.93049 11.4285 9 11.4285C11.0695 11.4285 13.0854 12.0312 14.6768 13.1249C16.4681 14.3571 17.6077 16.1129 17.9729 18.203C18.0569 18.682 17.9435 19.1557 17.6623 19.5026C17.5345 19.6606 17.3743 19.7872 17.1931 19.8732C17.012 19.9592 16.8146 20.0025 16.6152 19.9999Z"
                                    fill="#EFD372" />
                            </svg>
                            <span>{{ isset($content->news->author_2) ? $content->news->author_2 : '' }}</span>
                        </div>
                        <div class="mt-5">
                            <h6 class="text-h6 text-ds-blue">{{ isset($content->news->title_2) ? $content->news->title_2 : '' }}</h6>
                            <p>{{ isset($content->news->decription_2) ? $content->news->decription_2 : '' }}</p>
                        </div>

                        <a href="#" class="btn btn--secondary mt-5">
                            <span>Read More</span>
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
        </article>
    </section>
    @if (isset($inIframe) && $inIframe)
    @endsection
@endif
