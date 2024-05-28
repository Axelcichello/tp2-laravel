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


        <!-- <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <a href="/backpack">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                </div>
            </a>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
            </div>
        </div> -->



        @if(count($backpacks))

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($backpacks as $backpack)
            <div class="p-5 bg-slate-100 rounded-md">
                <a href="/backpack/{{$backpack->id}}">
                    <div>
                        <h2 class="text-center text-2xl my-3">{{$backpack->name}}</h2>
                    </div>
                    <div>
                        <img class=" m-auto h-auto size-65 max-w-full rounded-lg" src="{{$backpack->image}}" alt="">
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