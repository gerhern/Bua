@extends('index')

@section('content')
    <div class="w-3/4 bg-black text-white mx-auto text-center py-2">
        <h2 class="text-6xl">Empleados</h2>
    </div>

    <div class="w-3/4 mx-auto my-4">
        <table class="w-full table-auto">
            <tr class="text-white bg-black text-2xl">
                <th class="border border-white">Id</th>
                <th class="border border-white">Nombre</th>
                <th class="border border-white">Fecha de Nacimiento</th>
                <th class="border border-white">Ingresos Anuales</th>
                <th class="border border-white">Api</th>
            </tr>
            @forelse ($employees as $employee)
                <tr class="text-center text-xl border border-black h-12">
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->full_name }}</td>
                    <td>{{ $employee->date->birthday }}</td>
                    <td>{{ $employee->date->annualInn }}</td>
                    <td><a href="{{ route('apiShow', $employee->id) }}" class="bg-green-400 p-2 border rounded-md text-white hover:bg-green-700 shadow-md">Ver</a></td>
                </tr>
            @empty

            @endforelse
        </table>

        {{ $employees->links() }}

    </div>

@endsection
