<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection Test</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Database Connection Status</h1>
        
        <div class="space-y-4">
            @if($connected)
                <div class="bg-green-100 border-l-4 border-green-500 p-4">
                    <p class="text-green-700">✓ Database connection successful!</p>
                </div>
            @else
                <div class="bg-red-100 border-l-4 border-red-500 p-4">
                    <p class="text-red-700">✗ Database connection failed!</p>
                    @if(isset($error))
                        <p class="text-red-600 mt-2">Error: {{ $error }}</p>
                    @endif
                </div>
            @endif

            <div class="bg-gray-50 p-4 rounded-md">
                <h2 class="text-lg font-semibold mb-3 text-gray-700">Connection Details:</h2>
                <ul class="space-y-2">
                    <li><span class="font-medium">Driver:</span> {{ config('database.default') }}</li>
                    <li><span class="font-medium">Host:</span> {{ config('database.connections.mysql.host') }}</li>
                    <li><span class="font-medium">Database:</span> {{ config('database.connections.mysql.database') }}</li>
                    <li><span class="font-medium">Port:</span> {{ config('database.connections.mysql.port') }}</li>
                </ul>
            </div>

            @if($connected)
                <div class="bg-blue-50 p-4 rounded-md">
                    <h2 class="text-lg font-semibold mb-3 text-gray-700">System Information:</h2>
                    <ul class="space-y-2">
                        <li><span class="font-medium">Laravel Version:</span> {{ app()->version() }}</li>
                        <li><span class="font-medium">PHP Version:</span> {{ PHP_VERSION }}</li>
                        <li><span class="font-medium">Server Time:</span> {{ now() }}</li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</body>
</html>