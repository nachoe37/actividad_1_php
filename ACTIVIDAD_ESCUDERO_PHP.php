<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actividad POO Escudero</title>
    </head>
    <body>
       <?php
       $alumnos= [
           "Mi Nombre"=> "Ignacio",
           "Mi Apellido"=> "Escudero",
           "Mi Edad"=> "31",
           "Mi Hobbie"=> "El cine",
           "Mi Editor"=> "Visual Estudio Code",
           "Mi Sitema operativo"=> "Windows"
       ];
       foreach ($alumnos as $clave => $valor){
           echo $clave . "  ". "es" . "  " . $valor . "<br>";
       }





       ?>
    </body>
</HTML>