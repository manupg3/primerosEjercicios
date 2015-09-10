

   <html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
    include_once "clasePadre.php";  
    include_once "claseHija.php";  
    include_once "claseFabrica.php";  
     
	    
		
      $empleado1 = new Empleado("JUAN","RAMIREZ",356664421,2234,20000);
      $empleado2 = new Empleado("LEON","HITZ",44212221,0001,40000);
        
      $empleado1->Tostring();
	  $empleado2->Tostring();
      $fabrica= new Fabrica();
		$fabrica->agregar($empleado1);
		$fabrica->agregar($empleado2);
	   echo	$fabrica->ToString();
	   $fabrica->quitarEmpleado($empleado2);
	   echo	$fabrica->ToString();
 ?>
 </body>
</html>