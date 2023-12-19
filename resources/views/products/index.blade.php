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
        <title>products</title>
    </head>
    <body class="text-center">
        @include('components.navbar')
        <h1 class="text-4xl font-bold mb-10">Product List</h1>

        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th class="text-2xl">Name</th>
                        <th class="text-2xl">Price</th>
                        <th class="text-2xl">Quantity</th>
                        <th class="text-2xl">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <!-- row 1 -->
                    <tr class="bg-base-200">
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product) }}"
                                >Edit</a
                            >
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>