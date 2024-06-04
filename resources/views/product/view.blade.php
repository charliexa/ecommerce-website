<x-app-layout>
    <div class="container mx-auto px-4">
        <div class="row gap-4 flex flex-col lg:flex-row">
            <div class="col text-center flex-1">
                <img src="{{ $product->image }}" alt="{{ $product->title }}" class="max-w-full h-auto">
            </div>
            <div class="lg:col-span-2">
                <h1 class="text-lg font-semibold">
                    {{ $product->title }}
                </h1>
                <div class="text-xl font-bold mb-6">${{ $product->price }}</div>
                <div class="flex items-center justify-between mb-5">
                    <label for="quantity" class="block font-bold mr-4">
                        Quantity
                    </label>
                    <input type="number" name="quantity" x-ref="quantityEl" value="1" min="1"
                        class="w-32 focus:border-purple-500 focus:outline-none rounded" />
                </div>
                <button @click="addToCart($refs.quantityEl.value)"
                    class="btn-primary py-4 text-lg flex justify-center min-w-0 w-full mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Add to Cart
                </button>
                <div class="mb-6" x-data="{ expanded: false }">
                    <div x-show="expanded" x-collapse.min.120px class="text-gray-500 wysiwyg-content">
                        {{ $product->description }}
                    </div>
                    <p class="text-right">
                        <a @click="expanded = !expanded" href="javascript:void(0)"
                            class="text-purple-500 hover:text-purple-700"
                            x-text="expanded ? 'Read Less' : 'Read More'"></a>
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row gap-4">
            <div class="col text-center">
                <img src="{{ $product->image }}" alt="{{ $product->title }}">
            </div>
            <div class="col gap-3 d-flex flex-column fs-6 text-gray-600">
                <div class="ProdTitle text-black">
                    <h1 class="font-bold fs-4">(Product 21) Sample - Computers & Accessories For Sale</h1>
                </div>
                <div class="descSection gap-2 d-flex flex-column">
                    <div class="description">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud
                        felis. Pellentesque diam dolor, elementum etos lobortis...</div>
                    <div>Vendor: Ella - Halothemes<br>
                        SKU: KJSU-58636
                        <div class="Availability">Availability: In Stock</div>
                    </div>
                </div>
                <div class="price fw-bolder fs-4 text-black">
                    <div class="price-compare flex gap-2">
                        <dd class="price-original">${{ $product->price }}</dd>
                        <div class="price-last">${{ $product->price }}</div>
                    </div>
                </div>
                <div class="warning text-danger fw-bold">Please hurry! Only 8 left in stock</div>
                <div class="size">
                    <p class="mb-2 text-black"><strong class=" ">Size:</strong> XS</p>
                    <div class="SizeContai d-flex flex-row gap-2">
                        <div class="border p-1 w-8 text-center border-black text-black cursor-pointer">XS</div>
                        <div class="border p-1 w-8 text-center text-black cursor-pointer">S</div>
                        <div class="border p-1 w-8 text-center text-black cursor-pointer">L</div>
                        <div class="border p-1 w-8 text-center text-black cursor-pointer">XL</div>
                    </div>
                </div>
                <div class="color">
                    <p class="mb-2 text-black"><strong class=" ">Color:</strong> Black</p>
                    <div class="SizeContai d-flex flex-row gap-2">
                        <div class="border-4 p-1 w-10 h-10 text-center border-white text-black rounded-5 bg-danger outline outline-1"></div>
                        <div class="border-4 p-1 w-10 h-10 text-center border-white text-black rounded-5 bg-danger outline outline-1"></div>
                        <div class="border-4 p-1 w-10 h-10 text-center border-white text-black rounded-5 bg-danger outline outline-1"></div>
                        <div class="border-4 p-1 w-10 h-10 text-center border-white text-black rounded-5 bg-danger outline outline-1"></div>
                    </div>
                </div>
                <div class="flex items-center mb-5 text-black">
                    <label for="quantity" class="block font-bold mr-4">Quantity:</label>
                    <input type="number" name="quantity" x-ref="quantityEl" value="1" min="1"
                        class="w-32 focus:border-purple-500 focus:outline-none rounded">
                </div>
                <div class="flex flex-row align-items-center justify-center gap-3 mr-4">
                    <button class="btn bg-dark py-2 text-white fs-4 flex justify-center min-w-0 w-full rounded-5">Add to Cart</button>
                    <div class="border-1 flex items-center justify-center p-2 text-center border-gray-300 text-gray-400 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="#2a2a2a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
