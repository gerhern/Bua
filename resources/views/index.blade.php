<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
    <main class="flex w-screen h-screen">
        <header class="h-screen flex flex-col text-center w-1/8">
            <nav class="h-screen bg-black text-white text-2xl flex flex-col justify-evenly items-center">

                <a href="{{ route('home') }}"
                    class="hover:text-black hover:bg-white w-full flex flex-grow items-center justify-center">Inicio</a>

                <a href="{{ route('employee.create') }}"
                    class="hover:text-black hover:bg-white w-full flex flex-grow items-center justify-center">Crear
                    Empleado</a>

            </nav>
        </header>
        <section class="bg-red-500 w-full">
            @yield('content')
        </section>
    </main>
</body>

</html>
