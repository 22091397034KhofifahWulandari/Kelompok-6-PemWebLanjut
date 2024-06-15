<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Coblos Pemilu</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <div class="border rounded-lg p-4 text-center">
                        <img src="{{ asset('images/PAN.jpg') }}" class="h-40 mx-auto mb-4" alt="Election Option">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">PAN </h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded">Surat Suara</button>
                    </div>
                    <div class="border rounded-lg p-4 text-center">
                        <img src="{{ asset('images/PKB.png') }}" class="h-40 mx-auto mb-4" alt="Election Option">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">PKB </h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded">Surat Suara</button>
                    </div>
                    <div class="border rounded-lg p-4 text-center">
                        <img src="{{ asset('images/PDI-P.png') }}" class="h-40 mx-auto mb-4" alt="Election Option">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">PDI-P </h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded">Surat Suara</button>
                    </div>
                    <div class="border rounded-lg p-4 text-center">
                        <img src="{{ asset('images/PSI.png') }}" class="h-40 mx-auto mb-4" alt="Election Option">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">PSI </h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded">Surat Suara</button>
                    </div>
                    <div class="border rounded-lg p-4 text-center">
                        <img src="{{ asset('images/GOLKAR.png') }}" class="h-40 mx-auto mb-4" alt="Election Option">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">GOLKAR </h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded">Surat Suara</button>
                    </div>
                    <div class="border rounded-lg p-4 text-center">
                        <img src="{{ asset('images/NASDEM.png') }}" class="h-40 mx-auto mb-4" alt="Election Option">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">NasDem </h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded">Surat Suara</button>
                    </div>
                    <div class="border rounded-lg p-4 text-center">
                        <img src="{{ asset('images/GERINDA.png') }}" class="h-40 mx-auto mb-4" alt="Election Option">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">GERINDA </h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded">Surat Suara</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-black py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <p>&copy; Hak Cipta MIA 2022 @2024.</p>
        </div>
    </footer>
</body>
</html>
