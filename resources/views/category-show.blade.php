<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ARDecor Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-end my-3">
                <form method="GET" action="{{ route('product.create') }}">
                    @csrf
                    <x-primary-button>Thêm sản phẩm</x-primary-button>
                </form>
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
