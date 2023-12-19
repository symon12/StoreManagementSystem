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
        <title>edit product</title>
    </head>
    <body class="text-center">
        <!-- resources/views/products/edit.blade.php -->
        @include('components.navbar')

        <h1 class="text-4xl font-bold mb-10">Edit Product</h1>

        <form action="{{ route('products.update', $product) }}" method="post">
            @csrf @method('put')

            <label for="name">Product Name:</label>
            <input
                type="text"
                name="name"
                value="{{ $product->name }}"
                required
            />

            <label for="price">Product Price:</label>
            <input
                type="number"
                name="price"
                value="{{ $product->price }}"
                required
            />

            <label for="quantity">Product Quantity:</label>
            <input
                type="number"
                name="quantity"
                value="{{ $product->quantity }}"
                required
            />

            <button type="submit">Update Product</button>
        </form>
    </body>
</html>