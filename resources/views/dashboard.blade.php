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
        <title>sale History</title>
    </head>
    <body>
        @include('components.navbar')

        <!-- resources/views/dashboard.blade.php -->
        <div class="container text-center">
            <h1 class="text-4xl font-bold mb-10">Sales Dashboard</h1>

            <div
                class="grid grid-cols-4 gap-4 content-center max-w-5xl mx-auto"
            >
                <div class="card w-60 bg-primary text-primary-content">
                    <div class="card-body">
                        <h2 class="card-title">Today's Sales:</h2>
                        <p>${{ $todaySales }}</p>
                    </div>
                </div>
                <div class="card w-60 bg-primary text-primary-content">
                    <div class="card-body">
                        <h2 class="card-title">Yesterday's Sales:</h2>
                        <p>${{ $yesterdaySales }}</p>
                    </div>
                </div>
                <div class="card w-60 bg-primary text-primary-content">
                    <div class="card-body">
                        <h2 class="card-title">This Month's Sales:</h2>
                        <p>${{ $thisMonthSales }}</p>
                    </div>
                </div>
                <div class="card w-60 bg-primary text-primary-content">
                    <div class="card-body">
                        <h2 class="card-title">Last Month's Sales:</h2>
                        <p>${{ $lastMonthSales }}</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>