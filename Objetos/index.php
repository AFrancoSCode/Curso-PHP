<?php 
    require_once('Clases/Personas.php'); // Para utilizar un documento distinto

    $persona1 = new Persona("Andres Felipe", "Franco Sepulveda", 18);
    
    // $persona1->setNombre("ViCTOR HErnan");
    // $persona1->apellido = 'Franco Sepulveda';
    // $persona1->edad = 18;

    $persona2 = new Persona("Iris Elizabeth", "Godoy", 30);
    
    // $persona2->nombre = 'Iris Elizabeth';
    // $persona2->apellido = 'Godoy';
    // $persona2->edad = 29;

    echo "El nombre de la persona1 es: " . $persona1->getNombre();
    echo "<br>";
    echo "El nombre de la persona2 es: " . $persona2->getNombre();
?>