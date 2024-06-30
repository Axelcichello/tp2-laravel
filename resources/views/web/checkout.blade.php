<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
<div class="max-w-3xl mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4">Carrito de Compras</h1>

    @if ($backpacks->isEmpty())
        <p class="text-gray-600">Aún no tienes productos en tu carrito.</p>

        <a href="/" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mt-4">
            Volver al Inicio
        </a>
    @else
        <div class="overflow-hidden border border-gray-200 rounded-lg mb-4">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Precio
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Descripción
                        </th>
                        <!-- Otros campos relevantes -->
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($backpacks as $backpack)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">{{ $backpack->name }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $backpack->price }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $backpack->description }}</div>
                            </td>
                            <!-- Mostrar otros campos relevantes -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <form action="{{ route('cart.buy') }}" method="POST">
            @csrf
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                Comprar
            </button>
        </form>
    @endif
</div>


</body>

</html>