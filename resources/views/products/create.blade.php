<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/daisyui@4.4.20/dist/full.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>create</title>
    </head>
    <body class="text-center">
        @include('components.navbar')
        <!-- resources/views/products/create.blade.php -->

        <form
            class="mx-20"
            action="{{ route('products.store') }}"
            method="post"
        >
            @csrf
            <div>
                <div class="m-4">
                    <label for="name">Product Name:</label>
                    <input
                        type="text"
                        placeholder="Type here"
                        class="input input-bordered w-full max-w-xs"
                        name="name"
                        required
                    />
                </div>

                <div class="m-4">
                    <label for="price">Product Price:</label>
                    <input
                        type="number"
                        name="price"
                        placeholder="Type here"
                        class="input input-bordered w-full max-w-xs"
                        required
                    />
                </div>

                <div class="m-4">
                    <label for="quantity">Product Quantity:</label>
                    <input
                        type="number"
                        name="quantity"
                        placeholder="Type here"
                        class="input input-bordered w-full max-w-xs"
                        required
                    />
                </div>

                <button type="submit" class="btn btn-active">
                    Add Product
                </button>
            </div>
        </form>
    </body>
</html>