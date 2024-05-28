<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>

    <h1 class="my-5 text-center text-4xl">Listado Mochilas</h1>


    <div class="container px-5 py-5 mx-auto">

        <a href="/backoffice/crear" class=" text-xl p-3 bg-slate-400 uppercase rounded-md">Agregar Mochila</a>


        @if(count($backpacks))



        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>


                <tbody>


                    @foreach($backpacks as $backpack)

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$backpack->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$backpack->manufacturer}}
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            ${{$backpack->price}}
                        </td>

                        <td class="px-6 py-4">
                            <img class=" size-40" src="{{$backpack->image}}" alt="">
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex justify-between">
                                <a href="/backoffice/{{$backpack->id}}/editar" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                            </div>
                        </td>
                    </tr>

                    @endforeach



                </tbody>
            </table>
        </div>

        @else
        <h2 class="text-center">No se cargaron mochilas</h2>
        @endif

    </div>



</body>

</html>