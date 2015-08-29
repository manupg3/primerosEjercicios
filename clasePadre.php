

   <html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
      class Persona {
	    private $_nombre;
        protected $_apellido;
        private $_dni;		
		  public $nuevo;
		  private $dni;
		  
		  function __construct($nombre,$apellido,$dni){
			    $this->_nombre=$nombre;
				$this->_apellido=$apellido;
				$this->_dni=$dni;
		  } 
		  
		
		 public function getNombre(){
			  return $this->_nombre;
			  
		  }
		   public function setNombre(){
			  return $this->_nombre=$this->nuevo;
		  }
		 public function getDni(){
			  return $this->_dni;
		  }
		   public function setDni(){
			  return $this->_dni=$dni;
		  }
		    
		  
		  
		  
		  function ToString(){
			 echo "<h1>"."NOMBRE Y APELLIDO: ".$this->getNombre() ." &nbsp;".$this->_apellido." <br>DNI:".$this->getDni()."</h1>"
				;
				 
			  
		  }
		  
		  
		  
	  }

 ?>
 </body>
</html>