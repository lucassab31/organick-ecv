<section class="grid lg:grid-cols-2">
    <div>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Section Eco Friendly
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Vous pouvez modifier les information de la section eco friendly ici.
            </p>
        </header>

        <form method="post" action="{{ route('admin.content.eco-friendly.save') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf

            <div>
                <x-input-label for="subtitle" value="Sous-Titre" />
                <x-text-input id="subtitle" name="subtitle" type="text" class="mt-1 block w-full" :value="old('subtitle', (isset($content->eco_friendly->subtitle) ? $content->eco_friendly->subtitle : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('subtitle')" />
            </div>
            <div>
                <x-input-label for="title" value="Titre" />
                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', (isset($content->eco_friendly->title) ? $content->eco_friendly->title : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>
            <hr />
            <div>
                <x-input-label for="subtitle_1" value="Titre sous-section 1" />
                <x-text-input id="subtitle_1" name="subtitle_1" type="text" class="mt-1 block w-full" :value="old('subtitle_1', (isset($content->eco_friendly->subtitle_1) ? $content->eco_friendly->subtitle_1 : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('subtitle_1')" />
            </div>
            <div>
                <x-input-label for="description_1" value="Description sous-section 1" />
                <x-textarea-input id="description_1" name="description_1" class="mt-1 block w-full" required autofocus>
                    {{ old('description_1', (isset($content->eco_friendly->description_1) ? $content->eco_friendly->description_1 : '')) }}
                </x-textarea-input>
                <x-input-error class="mt-2" :messages="$errors->get('description_1')" />
            </div>
            <hr />
            <div>
                <x-input-label for="subtitle_2" value="Titre sous-section 2" />
                <x-text-input id="subtitle_2" name="subtitle_2" type="text" class="mt-1 block w-full" :value="old('subtitle_2', (isset($content->eco_friendly->subtitle_2) ? $content->eco_friendly->subtitle_2 : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('subtitle_2')" />
            </div>
            <div>
                <x-input-label for="description_2" value="Description sous-section 2" />
                <x-textarea-input id="description_2" name="description_2" class="mt-1 block w-full" required autofocus>
                    {{ old('description_2', (isset($content->eco_friendly->description_2) ? $content->eco_friendly->description_2 : '')) }}
                </x-textarea-input>
                <x-input-error class="mt-2" :messages="$errors->get('description_2')" />
            </div>
            <hr />
            <div>
                <x-input-label for="subtitle_3" value="Titre sous-section 3" />
                <x-text-input id="subtitle_3" name="subtitle_3" type="text" class="mt-1 block w-full" :value="old('subtitle_3', (isset($content->eco_friendly->subtitle_3) ? $content->eco_friendly->subtitle_3 : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('subtitle_3')" />
            </div>
            <div>
                <x-input-label for="description_3" value="Description sous-section 3" />
                <x-textarea-input id="description_3" name="description_3" class="mt-1 block w-full" required autofocus>
                    {{ old('description_3', (isset($content->eco_friendly->description_3) ? $content->eco_friendly->description_3 : '')) }}
                </x-textarea-input>
                <x-input-error class="mt-2" :messages="$errors->get('description_3')" />
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
        <iframe src="{{ route('components.eco-friendly') }}" width="100%" height="100%"></iframe>
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
                        type: 'image/jpeg',
                        lastModified: Date.now()
                    });
                    const container = new DataTransfer();
                    container.items.add(newFile);
                    document.getElementById('image_hero').files = container.files;
                }, 'image/jpeg', 0.75); // Ajustez la qualité de l'image comme nécessaire
            }
            image.src = readerEvent.target.result;
        }
        reader.readAsDataURL(file);
    });
</script>
