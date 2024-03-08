<!-- ========== HEADER ========== -->
<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-3 sm:py-0 h-48">
    <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold" href="#" aria-label="Brand">
                <img class="w-28 xl:w-48" src="{{ asset('assets/logo/logo.svg') }}" alt="Logo">
            </a>
            {{-- <div class="sm:hidden">
                <button type="button" class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                    <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div> --}}
            <div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7 2xl:ps-36 ">
                <a class="font-bold text-ds-green sm:py-6 text-lg xl:text-xl " href="#" aria-current="page">Home</a>
                <a class="font-bold text-ds-blue hover:text-ds-green sm:py-6 text-lg xl:text-xl" href="#">About</a>
    
                <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-4">
                <button type="button" class="flex items-center w-full text-ds-blue hover:text-ds-green font-bold text-lg xl:text-xl ">
                    Pages
                    <svg class="flex-shrink-0 ms-2 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>
                </div>
    
                <a class="font-bold text-ds-blue hover:text-ds-green sm:py-6 text-lg xl:text-xl" href="#">Shop</a>
                <a class="font-bold text-ds-blue hover:text-ds-green sm:py-6 text-lg xl:text-xl" href="#">Projects</a>
                <a class="font-bold text-ds-blue hover:text-ds-green sm:py-6 text-lg xl:text-xl" href="#">News</a>
            </div>
        </div>
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">
            <div class="flex items-center gap-x-2 sm:ms-auto">
                <div class="bg-slate-50 p-1 rounded-full border border-slate-50">
                    <div class="relative">
                        <input class="w-56 h-10 px-3 py-2 text-sm text-gray-700 border-none rounded-full bg-slate-50 focus:outline-none focus:ring focus:ring-slate-50" type="text">
                        <button class="absolute inset-y-0 right-0 flex items-center justify-center w-10 h-10 text-gray-400 bg-ds-green rounded-full p-2" type="submit">
                            <img class="h-8" src="{{ asset('assets/icons/search_icon.svg') }}" alt="button de recherche">
                        </button>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-full flex items-center p-1 gap-2">
                    <a href="#" class="flex items-center justify-center w-10 h-10 text-gray-400 bg-ds-blue rounded-full p-2">
                        <img class="h-8" src="{{ asset('assets/icons/cart_icon.svg') }}" alt="Logo">
                    </a>
                    <p class="">Cart (0)</p>
                </div>
            </div>
        </div>
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->