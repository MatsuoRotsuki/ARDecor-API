<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ARDecor Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100 font-semibold text-xl">
                    <h2>Danh mục</h2>
                    <div class="pt-4 w-full h-48 overflow-x-auto overflow-y-hidden">
                        <div class="flex space-x-4 h-full w-max">
                            @foreach ($categories as $category)
                                <a href="{{ route('web.category.show', ['id' => $category->id]) }}" class="block">
                                    <div class="h-full relative hover:scale-105">
                                        <img src="{{ $category->image_url }}" class="h-full object-cover" />
                                        <div
                                            class="absolute bottom-0 left-0 w-full text-white text-center bg-black bg-opacity-50 p-2">
                                            {{ $category->name }}
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end my-3 space-x-5">
                <a href="{{ route('product.create') }}">
                    <x-primary-button>Thêm sản phẩm</x-primary-button>
                </a>
                <a href="{{ route('variation.create') }}">
                    <x-primary-button>Tạo tập hợp biến thể</x-primary-button>
                </a>
            </div>
            <div class="grid justify-items-center grid-cols-5 gap-3 mt-6">
                @foreach ($products as $product)
                    <a class="flex flex-col items-start bg-white hover:scale-105"
                        href="{{ route('web.product.show', ['id' => $product->id]) }}">
                        <img class="inline-block h-full object-contain" src="{{ $product->image_url }}" />
                        <div class="flex justify-start flex-col">
                            <p class="px-3">{{ $product->name }}</p>
                            <p class="mt-2 ml-2 font-bold text-2xl">${{ $product->price }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
