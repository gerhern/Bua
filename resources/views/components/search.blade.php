<div class="w-3/4 mx-auto my-2 flex">
    <form method="GET" action="{{ route('home') }}" >
        @csrf
        <input type="number" class="border-2 border-black p-2"
            placeholder="Buscar por ID" name="q">
        
        <input type="submit" value="Buscar" class="mx-4 p-2 rounded-md bg-blue-500 text-white shadow-md hover:bg-blue-700">
    </form>

</div>