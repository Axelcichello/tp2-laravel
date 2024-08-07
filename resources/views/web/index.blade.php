<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>


    <div class="container-xl mx-10 my-5">

        <h1 class="my-5 text-center text-4xl">Nuestras Mochilas</h1>

        <div class="flex items-center justify-between">
            <nav class="flex">
                @foreach($categories as $cat)
                <a href="categories/{{$cat->id}}" class="m-3 uppercase">{{$cat->name}}</a>
                @endforeach
            </nav>

            <a href="/checkout" class="ml-4 text-gray-600 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 011 1v1a1 1 0 01-1 1H4a1 1 0 01-1-1V5zm3 6a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    <path d="M2 6v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4a2 2 0 00-2 2zm12 2a2 2 0 11-4 0 2 2 0 014 0zM7 6a2 2 0 100 4 2 2 0 000-4z" />
                </svg>
            </a>
        </div>

        @if(count($backpacks))

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($backpacks as $backpack)
            <div class="p-5 bg-slate-100 rounded-md">
                <a href="/backpack/{{$backpack->id}}">
                    <div>
                        <h2 class="text-center text-2xl my-3">{{$backpack->name}}</h2>
                    </div>
                    <div>
                        <img class=" m-auto h-60  size-65 max-w-full rounded-lg" src="{{$backpack->image}}" alt="">
                    </div>
                    <div>
                        <p class="my-5">{{$backpack->description}}</p>
                    </div>
                    <div class="flex justify-between py-2">
                        <p>Categoria</p>
                        <p class=" font-bold ">${{$backpack->price}}</p>
                    </div>

                    <p class="uppercase text-center bg-slate-400 rounded-sm">ver</p>
                </a>
            </div>
            @endforeach
        </div>

        @else
        <h2 class="text-center">No se encontraron resultados</h2>
        @endif




    </div>




</body>

</html>