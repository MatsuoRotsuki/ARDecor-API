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
                    <form id="productForm" method="POST" action="{{ route('variation.store') }}">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('Tên tập hợp')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="selected_products" :value="__('Cách sản phẩm đã chọn')" />
                            <div id="selected-products" class="grid justify-items-center grid-cols-5 gap-3 mt-2">
                            </div>
                            <x-input-error :messages="$errors->get('selected_products')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Tạo tập hợp biến thể') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-4 text-gray-900 dark:text-gray-100 font-semibold text-xl">
                    <div>
                        <x-input-label for="keyword" :value="__('Tìm kiếm sản phẩm theo tên')" />
                        <x-text-input id="userInput" class="block mt-1 w-full" type="text" name="keyword"
                            :value="old('keyword')" required autofocus autocomplete="keyword" />
                    </div>
                </div>
            </div>
            <div id="products" class="grid justify-items-center grid-cols-5 gap-3 mt-6">
                {{-- <div class="flex flex-col items-start bg-white hover:scale-105">
                    <img class="inline-block h-full object-contain" src="" />
                    <div class="flex justify-start flex-col">
                        <p class="px-3">{{ $product->name }}</p>
                        <p class="mt-2 ml-2 font-bold text-2xl">${{ $product->price }}</p>
                    </div>
                </div> --}}
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

        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('userInput');
            let timeout = null;
            const selectedProductsContainer = document.getElementById('selected-products');
            let selectedProducts = [];

            input.addEventListener('input', function() {
                clearTimeout(timeout);

                timeout = setTimeout(function() {
                    const query = input.value;
                    fetchData(query);
                }, 1000);
            });

            fetchData('');

            function fetchData(query) {
                fetch(`/api/products/search?keyword=${query}&representative=1`)
                    .then(response => response.json())
                    .then(data => {
                        const resultContainer = document.getElementById('products');
                        resultContainer.innerHTML = '';

                        data?.data.forEach(product => {
                            const productElement = document.createElement('div');
                            productElement.classList.add('flex', 'flex-col', 'items-start', 'bg-white',
                                'hover:scale-105');
                            productElement.innerHTML = `
                                <img class="inline-block h-full object-contain" src="${product.image_url}">
                                <div class="flex justify-start flex-col">
                                    <p class="px-3">${product.name}</p>
                                    <p class="mt-2 ml-2 font-bold text-2xl">$${product.price}</p>
                                </div>
                            `
                            productElement.addEventListener('click', function() {
                                addSelectedProduct(product);
                            });
                            resultContainer.appendChild(productElement);
                        })
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });

            }

            function addSelectedProduct(product) {
                // Check if the product is already selected
                if (!selectedProducts.find(p => p.name === product.name)) {
                    selectedProducts.push(product);
                    renderSelectedProducts();
                }
            }

            function removeSelectedProduct(id) {
                selectedProducts = selectedProducts.filter(p => p.id != id);
                renderSelectedProducts();
            }

            function renderSelectedProducts() {
                selectedProductsContainer.innerHTML = '';

                selectedProducts.forEach(product => {
                    const productElement = document.createElement('div');
                    productElement.classList.add('flex', 'flex-col', 'items-start', 'bg-white');
                    productElement.innerHTML = `
                        <img class="inline-block h-full object-contain" src="${product.image_url}" />
                        <div class="flex justify-start flex-col">
                            <p class="px-3 font-extralight text-base">${product.name}</p>
                            <p class="mt-2 ml-2 font-bold text-2xl">$${product.price}</p>
                            <button class="px-3 py-2 bg-black text-white" onclick="removeSelectedProduct('${product.id}')">Xoá</button>
                            <input type="hidden" name="product_id[]" value="${product.id}">
                        </div>
                    `;
                    selectedProductsContainer.appendChild(productElement);
                });
            }

            window.removeSelectedProduct = removeSelectedProduct;
        });
    </script>
</x-app-layout>
