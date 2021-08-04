@extends('index')

@section('content')
    <div class="w-3/4 bg-black text-white mx-auto text-center py-2">
        <h2 class="text-6xl">Prueba de evaluacion tecnica</h2>
    </div>


    <div class="w-3/4 mx-auto my-8 border-2 border-black rounded-md">
        <h3 class=" w-full p-4 text-4xl bg-black text-white rounded-md shadow-md">Objetivo:</h3>

        <p class="px-2 my-4 text-2xl">Crear una aplicación web en php que permita registrar empleados con las siguientes
            características.</p>

        <p class="text-3xl px-2">Datos de los empleados:</p>

        <ul class="py-6 px-8 text-xl list-disc">
            <li>Nombre</li>
            <li>Apellido Paterno</li>
            <li>Apellido Materno</li>
            <li>Fecha de nacimiento (El registro de la fecha será en formato dd/mm/Y)</li>
            <li>Ingresos anuales (cantidad a 2 decimales)</li>
        </ul>

        <p class="text-2xl px-2"> Para esta prueba puede utilizar el framework PHP o Javascript de su preferencia. Puede
            hacer uso de las librerías de php/javascript que desee.</p>

        <p class="text-3xl p-2">Tiempo estimado: 4 a 6 hrs</p>

        <h3 class=" w-full p-4 text-3xl">Instrucciones:</h3>

        <ul class="py-2 px-8 text-xl list-decimal">
            <li class="my-2">Crear 2 tablas una que contenga el nombre del usuario y la segunda tabla que tenga la fecha de
                nacimiento y los ingresos anuales.</li>

            <li class="my-2">Crear una pagina la cual contenga un formulario que permita ingresar nuevos empleados.</li>

            <li class="my-2">Crear una pagina la cual muestre el listado de los empleados guardados y crear un formulario
                que permita consultar un empleado por medio del ID del empleado.</li>

            <li class="my-2"> Crear una API por medio de un servicio web REST que permite agregar empleados y consultar un
                empleado por medio del envío del ID del empleado desde el consumo de lamisma.</li>
        </ul>

        <h3 class=" w-full p-4 text-3xl">Puntos Extras:</h3>

        <ul class="py-6 px-8 text-xl list-disc">
            <li>Validación de los datos que se ingresan en el formulario.</li>
            <li>Utilizar ajax para guardar o mostrar los datos.</li>
            <li>Utilizar Bootstrap (la versión que desee) para la interfaz gráfica de las páginas.</li>
        </ul>

        <div>

            <h3 class=" w-full p-4 text-4xl bg-black text-white rounded-md shadow-md">Comentarios:</h3>

            <p class="text-2xl px-2">Esta evaluacion tecnica ha sido completada utilizando el framework de Laravel 8 mientras que a nivel de base de datos se cumplen con los requisitos por medio del ORM Eloquent.</p>

            <p class="text-2xl px-2 my-6">Esta aplicacion web cuenta con un crontab el cual limpiara los registros existentes e insertara 25 nuevos registros cada hora.</p>

            <p class="text-2xl px-2 my-6 font-bold"><span class="font-black">***</span>Por motivos economicos esta aplicacion web no cuenta con el crontab activado, con el primer salario se activara esta funcion <span class="font-black">***</span></p>

           <p class="text-2xl px-2 my-6">Puntos Extra:</p>

           <p class="text-2xl px-2 bg-green-500 text-white">Se encuentran completas las validaciones en los formularios</p>

           <p class="text-2xl px-2 bg-red-500 text-white">No se implemento el uso de Ajax para guardar/mostrar datos</p>

           <p class="text-2xl px-2 bg-yellow-500">No se realizo el uso de Bootstrap para el diseño de estilos, en su lugar se uso Tailwindcss</p>

            <p class="text-2xl px-2 my-6">Esta aplicacion cuenta con una barra de tareas fija en la cual se encuentran los siguientes apartados:</p>

            <ul class="py-6 px-8 text-xl list-disc">
                <li>Inicio</li>
                <li>Crear Empleado</li>
                <li>Coleccion Api</li>
                <li>Documentacion</li>
            </ul>


            <h3 class=" w-full p-4 text-3xl bg-black text-white">Inicio</h3>

            <p class="text-2xl px-2 my-6">En este apartado se encuentra el listado principal de empleados, los datos de estos empleados se muestran en una tabla los cuales estan ordenados mostrando primero los empleados que han sido registrados mas recientemente.</p>

            <p class="text-2xl px-2 my-6">En el lateral derecho de esta tabla se muestra un boton en color verde el cual mostrara el empleado seleccionado en su formato Json indicado en el punto 4 para su consulta API, este es unicamente para poder ser visualizado de forma grafica pero es perfectamente consumible para servicios API REST.</p>

            <p class="text-2xl px-2 my-6">En la parte superior se cuenta con una barra de busqueda la cual filtra la lista de trabajadores por medio de su ID y muestra todos los trabajadores que cuentan con un ID similar al ingresado, una vez realizada una busqueda al presionar el boton de "Buscar" nuevamente se muestran de nuevo todos los trabajadores.</p>

            <p class="text-2xl px-2 my-6">Los resultados de esta seccion cuentan con paginacion ubicada en la parte inferior de la tabla, esta paginacion mostrara unicamente los primeros 13 resultados</p>

            <p class="text-2xl px-2 my-6">En caso de no contar con registros para mostrar se mostrara un mensaje con la leyenda "No hay datos"</p>


            <h3 class=" w-full p-4 text-3xl bg-black text-white">Crear Empleados</h3>

            <p class="text-2xl px-2 my-6">En este apartado se muestra el formulario de creacion de un empleado nuevo, todos los campos estan validados como requeridos, asi como los campos de fecha de nacimiento e ingreso anual cuentan con el formato especificado.</p>

            <p class="text-2xl px-2 my-6">Al momento de tratar de registrar un empleado con datos incompletos o sin un formato adecuado la aplicacion web mostrara un cuadro con los errores registrados.</p>


            <h3 class=" w-full p-4 text-3xl bg-black text-white">Coleccion API</h3>

            <p class="text-2xl px-2 my-6">Esta seccion fue creada para dar una muestra grafica del funcionamiento de los recursos API REST los cuales seran perfectamente consumibles mediante las urls:</p>

            <p class="text-2xl px-2 my-6">Coleccion</p>

            <ul class="py-6 px-8 text-xl">
                <li> <a href="{{ route('apiIndex') }}">http://buatest.herokuapp.com/api/v1/employees</a></li>
            </ul>

            <p class="text-2xl px-2 my-6">Recurso</p>

            <ul class="py-6 px-8 text-xl">
                <li> <a href="#">http://buatest.herokuapp.com/api/v1/employees/{ID}</a></li>
            </ul>


        </div>

    </div>

@endsection
