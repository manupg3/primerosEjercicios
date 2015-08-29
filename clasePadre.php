

   <html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
      class Persona {
	    protected $_nombre;
        protected $_apellido;
        protected $_dni;		
		  
		  function __construct($nombre,$apellido,$dni){
			    $this->_nombre=$nombre;
				$this->_apellido=$apellido;
				$this->_dni=$dni;
		  } 
		  
		  
		  
		  function ToString(){
			 echo "<h1>"."NOMBRE Y APELLIDO: ".$this->_nombre ." &nbsp;".$this->_apellido." <br>DNI:".$this->_dni."</h1>"
				;
				 
			  
		  }
		  
		  
		  
	  }

 ?>
 </body>
</html>