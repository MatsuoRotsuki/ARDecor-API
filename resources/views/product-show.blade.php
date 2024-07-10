<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ARDecor Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this item?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <form id="deleteForm" action="{{ route('product.destroy', ['id' => $product->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <!-- Include other necessary hidden inputs here -->
        </form>

        <script>
            document.getElementById('confirmDeleteButton').addEventListener('click', function() {
                document.getElementById('deleteForm').submit();
            });
        </script>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-start justify-between my-3">
            <div class="w-[60%]">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        @for ($i = 1; $i < count($product->images); $i++)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
                        @endfor
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ $product->images()->first()->image_url }}"
                                alt="First slide">
                        </div>
                        @foreach ($product->images->slice(1) as $image)
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ $image->image_url }}" alt="Second slide">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ml-6 w-[50%]">
                <div class="p-4 text-gray-900 dark:text-gray-100 text-lg">
                    <div class="flex flex-col">
                        <div class="self-end flex space-x-4">
                            {{-- <a href="{{ route('product.360view', ['model_path' => $product->model_path]) }}">
                                <x-primary-button>Xem mô hình</x-primary-button>
                            </a> --}}
                            <button type="button" class="text-red-500" data-toggle="modal"
                                data-target="#confirmDeleteModal">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="font-semibold">{{ $product->name }}</div>
                        <div class="text-3xl font-bold">${{ $product->price }}</div>

                        <div class="font-medium text-base mt-3">{{ $product->description }}</div>

                        <div class="flex items-center justify-center w-full h-16 mt-3 space-x-5">
                            @foreach ($product->product_variations as $variation)
                                <a class="h-full hover:border hover:border-gray-800 block @if ($variation->id == $product->id) border-2 border-black @endif"
                                    href="{{ route('web.product.show', ['id' => $variation->id]) }}">
                                    <img src="{{ $variation->image_url }}" class="h-full object-contain" />
                                </a>
                            @endforeach
                        </div>

                        <div class="font-semibold text-xl mt-6">Thông số kỹ thuật</div>
                        <div class="mt-2 ml-6 w-[70%]">
                            @foreach ($product->measurements as $measurement)
                                <div class="flex justify-between items-center">
                                    <div class="font-semibold">{{ $measurement->measurement_type->name }}</div>
                                    <div class="text-sm font-medium">
                                        {{ $measurement->value }} {{ $measurement->measurement_type->unit }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="w-full mt-4">
                            <a href="{{ $product->source }}">
                                <x-primary-button>Go to source</x-primary-button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
