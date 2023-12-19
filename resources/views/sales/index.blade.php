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
        <title>sale</title>
    </head>
    <body class="text-center">
        @include('components.navbar')

        <!-- resources/views/sales/index.blade.php -->

        <div class="mx-20">
            <h1 class="text-4xl font-bold mb-10">Sale Transactions</h1>

            <h2 class="text-2xl font-bold mb-4">Sell a Product</h2>

            <form action="{{ route('sales.store') }}" method="post">
                @csrf

                <div class="my-4">
                    <label for="product_id">Product:</label>
                    <select
                        placeholder="Type here"
                        class="input input-bordered w-full max-w-xs"
                        name="product_id"
                        required
                    >
                        @foreach ($products as $product)
                        <option value="{{ $product->id }}">
                            {{ $product->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="my-4">
                    <label for="quantity_sold">Quantity Sold:</label>
                    <input
                        placeholder="Type here"
                        class="input input-bordered w-full max-w-xs"
                        type="number"
                        name="quantity_sold"
                        required
                    />
                </div>
                <div class="my-4">
                    <label for="total_price">Total Price:</label>
                    <input
                        placeholder="Type here"
                        class="input input-bordered w-full max-w-xs"
                        type="number"
                        name="total_price"
                        required
                    />
                </div>

                <button type="submit" class="btn btn-active">
                    Sell Product
                </button>
            </form>
        </div>
    </body>
</html>