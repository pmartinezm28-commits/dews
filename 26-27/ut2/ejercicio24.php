<!-- Crea una excepción personalizada ErrorDeValidacion y una función validarAlumno($nombre, $edad, $nota)
que compruebe que el nombre no está vacío, que la edad está entre 0 y 120 y que la nota está entre 0 y 10.
Si algún dato no es válido, lanza la excepción con un mensaje descriptivo. Prueba la función con datos correctos e incorrectos. -->
<?php
    class ErrorDeValidacion extends Exception {}

    function validarAlumno($nombre, $edad, $nota){
        if($nombre === ""){
            throw new ErrorDeValidacion("El nombre no puede estar vacío");
        }
        if($edad < 0 || $edad > 120){
            throw new ErrorDeValidacion("La edad no puede ser negativa o superior a 120");
        }
        if($nota < 0 || $nota > 10){
            throw new ErrorDeValidacion("La nota no puede ser negativa o superior a 10");
        }
        return true;
    }


try{
    validarAlumno("", 2, 2);

    validarAlumno("Juan", -12, 3);

    validarAlumno("Juan", 12, 13);
}   
catch(ErrorDeValidacion $e){
    echo "Error: " . $e->getMessage() . "<br>";
}