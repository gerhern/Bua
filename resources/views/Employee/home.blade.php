@extends('index')

@section('content')
    <div class="w-3/4 bg-black text-white mx-auto text-center">
        <h2 class="text-6xl">Empleados</h2>
    </div>

    <div class="w-3/4 mx-auto my-4">
        <table class="w-full">
            <tr class="text-white bg-black text-3xl text-center">
                <th class="border border-white">Id</th>
                <th class="border border-white">Nombre</th>
                <th class="border border-white">Fecha de Nacimiento</th>
                <th class="border border-white">Ingresos Anuales</th>
            </tr>
            <tr v-for="employee in employees" class="text-center text-2xl" :key="employee.id">

            </tr>
        </table>
    </div>

@endsection
