<?php
    function validate_nombre($nombre){
        $sql = "SELECT * FROM usuario WHERE name='$nombre'";

        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql)->fetch_object();
        connect::close($conexion);
        return $res;
    }

    function validate_dni($dni){
        $sql = "SELECT * FROM usuario WHERE dni='$dni'";

        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        $res = $res->num_rows;
        connect::close($conexion);
        return $res;
    }
    
    function validate() {
        // $data = 'hola validate php';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        $check = true;

        $nombre = $_POST['nombre'];
        $dni = $_POST['DNI'];
        $nombre = validate_nombre($nombre);
        $dni = validate_dni($dni);

        if($nombre !== null){
            echo '<script language="javascript">setTimeout(() => {
                toastr.error("El nombre no puede estar repetido");
            }, 1000);</script>';
            $check = false;
        }

        if($dni !== 0){;
            echo '<script language="javascript">setTimeout(() => {
                toastr.error("El DNI no puede estar repetido");
            }, 1000);</script>';
            $check = false;
        }

        return $check;
    }
