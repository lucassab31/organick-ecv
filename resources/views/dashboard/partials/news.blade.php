<section class="grid lg:grid-cols-2">
    <div>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Section News banner
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Vous pouvez modifier les information de la section news ici.
            </p>
        </header>

        <form method="post" action="{{ route('admin.content.news.save') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf

            <div>
                <x-input-label for="author_1" value="Auteur news N°1" />
                <x-text-input id="author_1" name="author_1" type="text" class="mt-1 block w-full" :value="old('author_1', (isset($content->news->author_1) ? $content->news->author_1 : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('author_1')" />
            </div>
            <div>
                <x-input-label for="title_1" value="Titre news N°1" />
                <x-text-input id="title_1" name="title_1" type="text" class="mt-1 block w-full" :value="old('title_1', (isset($content->news->title_1) ? $content->news->title_1 : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('title_1')" />
            </div>
            <div>
                <x-input-label for="description_1" value="Description news N°1" />
                <x-textarea-input id="description_1" name="description_1" class="mt-1 block w-full" required autofocus>
                    {{ old('description_1', (isset($content->news->description_1) ? $content->news->description_1 : '')) }}
                </x-textarea-input>
                <x-input-error class="mt-2" :messages="$errors->get('description_1')" />
            </div>
            <div>
                <canvas id="imageCanvas_1" style="display: none;"></canvas>
                <x-input-label for="image_1" value="Image news N°1" />
                <x-file-input id="image_1" name="image_1" class="mt-1 block w-full" accept="image/*" autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('image')" />
            </div>
            <hr />
            <div>
                <x-input-label for="author_2" value="Auteur news N°2" />
                <x-text-input id="author_2" name="author_2" type="text" class="mt-1 block w-full" :value="old('author_2', (isset($content->news->author_2) ? $content->news->author_2 : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('author_2')" />
            </div>
            <div>
                <x-input-label for="title_2" value="Titre news N°2" />
                <x-text-input id="title_2" name="title_2" type="text" class="mt-1 block w-full" :value="old('title_2', (isset($content->news->title_2) ? $content->news->title_2 : ''))" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('title_2')" />
            </div>
            <div>
                <x-input-label for="description_2" value="Description news N°2" />
                <x-textarea-input id="description_2" name="description_2" class="mt-1 block w-full" required autofocus>
                    {{ old('description_2', (isset($content->news->description_2) ? $content->news->description_2 : '')) }}
                </x-textarea-input>
                <x-input-error class="mt-2" :messages="$errors->get('description_2')" />
            </div>
            <div>
                <canvas id="imageCanvas_2" style="display: none;"></canvas>
                <x-input-label for="image_2" value="Image news N°2" />
                <x-file-input id="image_2" name="image_2" class="mt-1 block w-full" accept="image/*" autofocus />
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
        <iframe src="{{ route('components.news') }}" width="100%" height="100%"></iframe>
    </div>
</section>

<script>
    document.getElementById('image_1').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (!file.type.match('image.*')) {
            alert('Veuillez sélectionner une image.');
            return;
        }

        const reader = new FileReader();
        reader.onload = function(readerEvent) {
            const image = new Image();
            image.onload = function(imageEvent) {
                const canvas = document.getElementById('imageCanvas_1');
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
                    document.getElementById('image_1').files = container.files;
                }, 'image/png', 0.75); // Ajustez la qualité de l'image comme nécessaire
            }
            image.src = readerEvent.target.result;
        }
        reader.readAsDataURL(file);
    });

    document.getElementById('image_2').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (!file.type.match('image.*')) {
            alert('Veuillez sélectionner une image.');
            return;
        }

        const reader = new FileReader();
        reader.onload = function(readerEvent) {
            const image = new Image();
            image.onload = function(imageEvent) {
                const canvas = document.getElementById('imageCanvas_2');
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
                    document.getElementById('image_2').files = container.files;
                }, 'image/png', 0.75); // Ajustez la qualité de l'image comme nécessaire
            }
            image.src = readerEvent.target.result;
        }
        reader.readAsDataURL(file);
    });
</script>
