<section class="grid lg:grid-cols-2">
    <div>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Section Hero banner
            </h2>
    
            <p class="mt-1 text-sm text-gray-600">
                Vous pouvez modifier les information de la section hero banner ici.
            </p>
        </header>
    
        <form method="post" action="{{ route('admin.content.hero.save') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf
    
            <div>
                <x-input-label for="subtitle" value="Sous-Titre" />
                <x-text-input id="subtitle" name="subtitle" type="text" class="mt-1 block w-full" :value="old('subtitle', (isset($content->hero->subtitle) ? $content->hero->subtitle : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('subtitle')" />
            </div>
    
            <div>
                <x-input-label for="title" value="Titre" />
                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', (isset($content->hero->title) ? $content->hero->title : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>
    
            <div>
                <x-input-label for="button" value="Boutton" />
                <x-text-input id="button" name="button" type="text" class="mt-1 block w-full" :value="old('button', (isset($content->hero->button) ? $content->hero->button : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('button')" />
            </div>
    
            <div>
                <x-input-label for="image" value="Image" />
                <x-file-input id="image" name="image" class="mt-1 block w-full" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('image')" />
            </div>
    
            <div class="flex items-center gap-4">
                <x-primary-button>Enregistrer</x-primary-button>
                {{-- save redirected with success --}}
                @if (session('status'))
                    <div class="text-green-600">{{ session('status') }}</div>
                @endif
            </div>
        </form>
    </div>
    <div>
        <h4>{{ (isset($content->hero->subtitle) ? $content->hero->subtitle : '--') }}</h4>
        <h1>{{ (isset($content->hero->title) ? $content->hero->title : '--') }}</h1>
        <p>{{ (isset($content->hero->button) ? $content->hero->button : '--') }}</p>
        <picture>
            <source srcset="{{ (isset($content->hero->image) ? asset('storage/images/webp/' . pathinfo($content->hero->image, PATHINFO_FILENAME) . '.webp') : '') }}" type="image/webp">
            <img src="{{ (isset($content->hero->image) ? asset('storage/images/original/' . $content->hero->image) : '') }}" alt="hero banner" class="w-full h-auto" />
        </picture>
    </div>
</section>
