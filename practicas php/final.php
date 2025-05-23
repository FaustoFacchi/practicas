<?php
class escuela{
    define("SERVIDOR", "escuela")
    define("USUARIO", "alumno")
    define("CONTRASENA", "examen")
    define("BDD", "examen")

    try{
        $conectar = mysql_connect(SERVIDOR, USUARIO, CONTRASENA, BDD);
        return $conectar;
    } catch (\throwable $th) {
        echo "Error en la conexion con la base de datos: $th";
        exit;
    }
    
}
public function borrarmaterias($id){
    $bdd = $this->conexion();
    $tabla = "materias;"

    if(!$this->verificarExistencia($id, $bdd, $tabla)) {
        $bdd close();

        return "La Materia con el id $id no existe$;
    }
}
?>