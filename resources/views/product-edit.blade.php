<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Thêm sản phẩm mới') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100 font-semibold text-xl">
                    <form id="productForm">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('Tên sản phẩm')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name') ?? $product->name" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="price" :value="__('Giá')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price"
                                :value="old('price') ?? $product->price" required autofocus />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Mô tả')" />
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                                :value="old('description') ?? $product->description" required autofocus />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="source" :value="__('Nguồn')" />
                            <x-text-input id="source" class="block mt-1 w-full" type="text" name="source"
                                :value="old('source') ?? $product->source" required autofocus />
                            <x-input-error :messages="$errors->get('source')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="is_stackable" :value="__('Cho đồ vật xếp chồng')" />
                            <input id="is_stackable" type="checkbox" @if ($product->is_stackable) checked @endif
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="is_stackable">
                        </div>

                        <div class="mt-4">
                            <x-input-label for="category_id" :value="__('Danh mục')" />
                            <select id="category_id" name="category_id"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @if ($product->category->id == $category->id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-input-label for="images" :value="__('Ảnh')" />
                            <input type="file" id="images" name="images" multiple accept="image/*"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                onchange="previewImages()">
                            <div id="imagePreview" class="flex flex-row items-center space-x-5 mt-3"></div>
                        </div>
                        <div class="mt-4">
                            <x-input-label for="model_path" :value="__('File mô hình 3D')" />
                            <input type="file" id="model_path" name="model_path" accept=".glb"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                        </div>
                        <div id="dynamicList" class="mt-4">
                            <x-input-label for="measurements" :value="__('Thông số kỹ thuật')" />
                            @foreach ($product->measurements as $measurement)
                                <div class="flex flex-row items-center space-x-3">
                                    <select name="measurement_type[]" required
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                        @foreach ($measurementTypes as $measurementType)
                                            <option value="{{ $measurementType->id }}"
                                                @if ($measurementType->id == $measurement->measurement_type_id) selected @endif>
                                                {{ $measurementType->name }}
                                                ({{ $measurementType->unit }})
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-text-input id="measurement_value" class="block mt-1" type="number"
                                        name="measurement_value[]" :value="old('measurement_value[]') ?? $measurement->value" required autofocus />
                                    <button class="text-red-400" type="button" onclick="removeRow(this)"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" onclick="addRow()"><i class="fas fa-plus"></i></button>
                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Lưu') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyBfHureQdoE0A3EkI4C9NCfdsoBA4LkYUs",
            authDomain: "ar-decor-app.firebaseapp.com",
            databaseURL: "https://ar-decor-app-default-rtdb.firebaseio.com",
            projectId: "ar-decor-app",
            storageBucket: "ar-decor-app.appspot.com",
            messagingSenderId: "508636360954",
            appId: "1:508636360954:web:df455e7479c4c05119d943",
            measurementId: "G-SH3PV4QKXL"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const storage = firebase.storage();

        const productJson = @json($product);
        const imagePreview = document.getElementById('imagePreview');
        imagePreview.innerHTML = '';
        productJson.images.forEach(image => {
            const img = document.createElement('img');
            img.src = image.image_url
            img.style.width = '120px';
            img.style.height = '120px';
            imagePreview.appendChild(img);
        });

        // Function to preview images
        function previewImages() {
            const imagesInput = document.getElementById('images');
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = '';
            Array.from(imagesInput.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '120px';
                    img.style.height = '120px';
                    imagePreview.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        }

        // Handle form submission
        document.getElementById('productForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const name = document.getElementById('name').value;
            const price = document.getElementById('price').value;
            const description = document.getElementById('description').value;
            const isStackable = document.getElementById('is_stackable').checked;
            const source = document.getElementById('source').value;
            const categoryId = document.getElementById('category_id').value;
            const images = document.getElementById('images').files;
            const modelPath = document.getElementById('model_path').files[0];
            const rows = document.querySelectorAll('#dynamicList .flex.flex-row.space-x-3.items-center');

            const measurements = [];

            rows.forEach(row => {
                const measurementType = row.querySelector('select[name="measurement_type[]"]').value;
                const measurementValue = row.querySelector('input[name="measurement_value[]"]').value;
                measurements.push({
                    measurement_type_id: measurementType,
                    value: measurementValue,
                });
            });

            let imageUrls = [];
            for (const image of images) {
                const imageRef = storage.ref(`images/${image.name}`);
                await imageRef.put(image);
                const imageUrl = await imageRef.getDownloadURL();
                imageUrls.push(imageUrl);
            }

            let modelUrl = '';
            if (modelPath) {
                const modelRef = storage.ref(`models/${modelPath.name}`);
                await modelRef.put(modelPath);
                modelUrl = await modelRef.fullPath;
            }

            const formData = {
                name: name,
                price: price,
                description: description,
                is_stackable: isStackable,
                source: source,
                category_id: categoryId,
                images: [...imageUrls],
                model_path: modelUrl,
                _token: csrfToken,
                measurements: measurements
            };
            // formData.append('name', name);
            // formData.append('price', price);
            // formData.append('description', description);
            // formData.append('is_stackable', isStackable);
            // formData.append('source', source);
            // formData.append('category_id', categoryId);
            // imageUrls.forEach((url, index) => formData.append(`images[${index}]`, url));
            // formData.append('model_path', modelUrl);
            // formData.append('_token', csrfToken);

            var jsonString = JSON.stringify(formData);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/products');
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    // Request finished, handle response
                    if (xhr.status === 200) {
                        // Request was successful
                        window.location.href = '/';
                    } else {
                        // Request failed
                        console.error('Request failed:', xhr.status);
                    }
                }
            };

            xhr.send(jsonString);
        });

        const measurementTypes = @json($measurementTypes);

        function addRow() {
            const dynamicList = document.getElementById('dynamicList');
            const newRow = document.createElement('div');
            newRow.classList.add('flex', 'flex-row', 'space-x-3', 'items-center');
            let measurementTypeOptions = '';
            measurementTypes.forEach(type => {
                measurementTypeOptions += `<option value="${type.id}">${type.name} (${type.unit})</option>`;
            });
            newRow.innerHTML = `
                <select name="measurement_type[]" required
                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                    ${measurementTypeOptions}
                </select>
                <x-text-input id="measurement_value" class="block mt-1" type="number"
                    name="measurement_value[]" :value="old('measurement_value[]')" required autofocus />
                <button class="text-red-400" type="button" onclick="removeRow(this)"><i
                        class="fas fa-trash"></i></button>
            `;
            dynamicList.appendChild(newRow);
        }

        function removeRow(button) {
            const row = button.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
</x-app-layout>
