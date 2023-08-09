<?php

class formulario {
 public  $nombres = '';
 public  $apellidos = '';
 public  $tipoDocumento = '';
 public  $documento = '';
 public  $fechaNacimiento = '';
 public  $telefono = '';
 public  $direccion = '';
 public  $ciudad = '';
 public  $correo = '';


    public function __construct($nombres, $apellidos, $tipoDocumento, $documento, $fechaNacimiento, $telefono, $direccion, $ciudad, $correo) {

        $this->nombres=$nombres;
        $this->apellidos=$apellidos;
        $this->tipoDocumento=$tipoDocumento;
        $this->documento=$documento;
        $this->fechaNacimiento=$fechaNacimiento;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
        $this->ciudad=$ciudad;
        $this->correo=$correo;
    }
    function getDataUser(){
        return $this->nombres.'<br>'.$this->apellidos.'<br>'.$this->tipoDocumento.'<br>'.$this->documento.'<br>'.$this->fechaNacimiento.'<br>'.$this->direccion.'<br>'.$this->telefono.'<br>'.$this->ciudad.'<br>'.$this->correo;
        
        
        

    }
}
?>