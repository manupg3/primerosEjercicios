

   <html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 
 <?php
     include_once"clasePadre.php";
     include_once "claseHija.php"; 
        
      class Fabrica{
	   public $empleado;
	  
	  public function __construct(){
        $this->empleado=array();
	   }
	   public function agregar($emp){
		 
		   array_push($this->empleado,$emp);
	   }
	   public function ToString(){
	      echo"<h1>" .var_dump($this->empleado)."</h1>";
		   
		   
	   }
	  public function quitarEmpleado($emp){
		 
		   unset($this->empleado[0]);
	   }	
		
		
		
		
	}
   
   
   
   
   
      
 ?>
 </body>
</html>