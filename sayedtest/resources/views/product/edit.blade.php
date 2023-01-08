@include('header')

       <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Product </h2>
            <p class="mb-4">Edit: {{ $product->name }}</p>
        </header>


        <div class="row">


            <div class="col-3"></div>
            
            <div class="col-6">
        <div class=" justify-center">
            <div class="w-1/2 bg-white p-6 rounded-lg">
             

        <form method="POST" action="/product/{{ $product->id }}/update" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Product Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    value="{{ $product->name }}" />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">description</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="description"
                    placeholder="Example: Senior Laravel Developer" value="{{ $product->description }}" />

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>




            <div class="mb-6">
                <label for="price" class="inline-block text-lg mb-2">
                    price
                </label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="price"
                    value="{{ $product->price }}" />

                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>



            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update 
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>

    </div>
        </div>
        <div class="col-3"></div>
</div>
</div>


