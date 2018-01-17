<?php

use PicoDb\Database;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author UESR
 */
class funciones {

//put your code here    
    public function connectBD() {
        $conn = new mysqli("localhost", "root", "", "rubix");
        return $conn;
    }

    function insertar($nombre,$identificacion,$email,$telefono,$usuario,$pass,$certificado) {
        $conn = $this->connectBD();
        $sql = "INSERT INTO `registro_atv` (`nombre`, `identificacion`, `email`,`telefono`,`usuario`, `pass`, `certificado`) VALUES ('".$nombre."', '".$identificacion."', '".$email."', '".$telefono."', '".$usuario."', '".$pass."', '".$certificado."')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    
    function resultados(){
        $enlace = $this->connectBD();
        $consulta = "select * from registro_atv";
        
        
        $contador =0;
        $data=array();
        
        if ($resultado = mysqli_query($enlace, $consulta)) {
            while ($fila = mysqli_fetch_row($resultado)) {
                 $data[$contador]['nombre']=$fila[1];
                 $data[$contador]['identificacion']=$fila[2];
                 $data[$contador]['email']=$fila[3];
                 $data[$contador]['telefono']=$fila[4];
                 $data[$contador]['usuario']=$fila[5];
                 $data[$contador]['pass']=$fila[6];
                 $data[$contador]['certificado']=$fila[7];
                 $contador++;        
            }
        }
        return $data;
        
    }

}
