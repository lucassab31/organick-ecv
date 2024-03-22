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
                <canvas id="imageCanvas" style="display: none;"></canvas>
                <x-input-label for="image_hero" value="Image" />
                <x-file-input id="image_hero" name="image" class="mt-1 block w-full" accept="image/*" autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('image')" />
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>Enregistrer</x-primary-button>
                {{-- save redirected with success --}}
                @if (session('status'))
                    <div class="text-green-600">{{ session('success') }}</div>
                @endif
            </div>
        </form>
    </div>
    <div class="p-4">
        <iframe src="{{ route('components.hero') }}" width="100%" height="100%"></iframe>
    </div>
</section>

<script>
    document.getElementById('image_hero').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (!file.type.match('image.*')) {
            alert('Veuillez sélectionner une image.');
            return;
        }

        const reader = new FileReader();
        reader.onload = function(readerEvent) {
            const image = new Image();
            image.onload = function(imageEvent) {
                const canvas = document.getElementById('imageCanvas');
                const max_size = 1920; // Taille maximale pour la largeur ou la hauteur
                let width = image.width;
                let height = image.height;

                if (width > height) {
                    if (width > max_size) {
                        height *= max_size / width;
                        width = max_size;
                    }
                } else {
                    if (height > max_size) {
                        width *= max_size / height;
                        height = max_size;
                    }
                }

                canvas.width = width;
                canvas.height = height;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(image, 0, 0, width, height);

                canvas.toBlob(function(blob) {
                    const newFile = new File([blob], file.name, {
                        type: 'image/png',
                        lastModified: Date.now()
                    });
                    const container = new DataTransfer();
                    container.items.add(newFile);
                    document.getElementById('image_hero').files = container.files;
                }, 'image/png', 0.75); // Ajustez la qualité de l'image comme nécessaire
            }
            image.src = readerEvent.target.result;
        }
        reader.readAsDataURL(file);
    });
</script>
