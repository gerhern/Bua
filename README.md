# Prueba de evaluacion tecnica

### Prueba el resultado de esta prueba en http://buatest.herokuapp.com

## Objetivo:

### Crear una aplicación web en php que permita registrar empleados con las siguientes características

## Datos de los empleados:

* ####  Nombre
* ### Apellido Paterno
* ### Apellido Materno
* ### Fecha de nacimiento (El registro de la fecha será en formato dd/mm/Y)
* ### Ingresos anuales (cantidad a 2 decimales)

### Para esta prueba puede utilizar el framework PHP o Javascript de su preferencia. Puede hacer uso de las librerías de php/javascript que desee

## Instrucciones:

### 1. Crear 2 tablas una que contenga el nombre del usuario y la segunda tabla que tenga la fecha de nacimiento y los ingresos anuales.

### 2. Crear una pagina la cual contenga un formulario que permita ingresar nuevos empleados.

### 3. Crear una pagina la cual muestre el listado de los empleados guardados y crear un formulario que permita consultar un empleado por medio del ID del empleado.

### 4. Crear una API por medio de un servicio web REST que permite agregar empleados y consultar un empleado por medio del envío del ID del empleado desde el consumo de la misma.

## Puntos Extras:

* ### Validación de los datos que se ingresan en el formulario.
* ### Utilizar ajax para guardar o mostrar los datos.
* ### Utilizar Bootstrap (la versión que desee) para la interfaz gráfica de las páginas.

# Comentarios:


#### Esta evaluacion tecnica ha sido completada utilizando el framework de Laravel 8 mientras que a nivel de base de datos se cumplen con los requisitos por medio del ORM Eloquent.

#### Esta aplicacion web cuenta con un crontab el cual limpiara los registros existentes e insertara 25 nuevos registros cada hora.

### __Por motivos economicos esta aplicacion web no cuenta con el crontab activado, con el primer salario se activara esta funcion__

## Puntos Extra:

####  [X] Se encuentran completas las validaciones en los formularios

#### [ ] No se implemento el uso de Ajax para guardar/mostrar datos

#### [ ] No se realizo el uso de Bootstrap para el diseño de estilos, en su lugar se uso Tailwindcss

## Esta aplicacion cuenta con una barra de tareas fija en la cual se encuentran los siguientes apartados:

* ### Inicio
* ### Crear Empleado
* ### Coleccion Api
* ### Documentacion

# Inicio

### En este apartado se encuentra el listado principal de empleados, los datos de estos empleados se muestran en una tabla los cuales estan ordenados mostrando primero los empleados que han sido registrados mas recientemente.

### En el lateral derecho de esta tabla se muestra un boton en color verde el cual mostrara el empleado seleccionado en su formato Json indicado en el punto 4 para su consulta API, este es unicamente para poder ser visualizado de forma grafica pero es perfectamente consumible para servicios API REST.

### En la parte superior se cuenta con una barra de busqueda la cual filtra la lista de trabajadores por medio de su ID y muestra todos los trabajadores que cuentan con un ID similar al ingresado, una vez realizada una busqueda al presionar el boton de "Buscar" nuevamente se muestran de nuevo todos los trabajadores.

### Los resultados de esta seccion cuentan con paginacion ubicada en la parte inferior de la tabla, esta paginacion mostrara unicamente los primeros 13 resultados

### En caso de no contar con registros para mostrar se mostrara un mensaje con la leyenda "No hay datos"

# Crear Empleados

### En este apartado se muestra el formulario de creacion de un empleado nuevo, todos los campos estan validados como requeridos, asi como los campos de fecha de nacimiento e ingreso anual cuentan con el formato especificado.

### Al momento de tratar de registrar un empleado con datos incompletos o sin un formato adecuado la aplicacion web mostrara un cuadro con los errores registrados.

# Coleccion API

### Esta seccion fue creada para dar una muestra grafica del funcionamiento de los recursos API REST los cuales seran perfectamente consumibles mediante las urls:

### Coleccion

* ### http://buatest.herokuapp.com/api/v1/employees

### Recursos

* ### //buatest.herokuapp.com/api/v1/employees/__{ID}__
