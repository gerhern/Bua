@extends('index')
@section('content')

    <div class="w-3/4 bg-black text-white mx-auto text-center">
        <h2 class="text-6xl my-2 py-2">Crear Nuevo Empleado</h2>
    </div>

    <!--div de erroeres-->
    @if ($errors->any())
        <div class="w-2/5 mx-auto text-red-600 p-4 bg-red-200 border border-red-600 my-4 text-xl">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="p-16" method="post" action="{{ route('employee.store') }}">
        @csrf

        <label class="block font-medium text-lg text-gray-700">Nombre*</label>
        <input type="text" name="name" class="form-input border-2 border-black w-full rounded-md shadow-sm my-4" value="{{ old('name') }}">

        <label class="block font-medium text-lg text-gray-700">Apellido Paterno*</label>
        <input type="text" name="firstName" class="border-2 border-black form-input w-full rounded-md shadow-sm my-4"
            value="{{ old('firstName') }}">

        <label class="block font-medium text-lg text-gray-700">Apellido Materno*</label>
        <input type="text" name="secondName" class="border-2 border-black form-input w-full rounded-md shadow-sm my-4"
            value="{{ old('secondName') }}">

        <label class="block font-medium text-lg text-gray-700">Fecha de Nacimiento*</label>
        <input type="date" name="birthday" class="border-2 border-black form-input w-full rounded-md shadow-sm my-4" value="{{ old('date') }}">

        <label class="block font-medium text-lg text-gray-700">Ingreso Anual*</label>
        <input type="number" step="0.01" name="annualInn" class="border-2 border-black form-input w-full rounded-md shadow-sm my-4"
            value="{{ old('number') }}">

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded-md my-2 shadow-md">Crear</button>

    </form>

@endsection
