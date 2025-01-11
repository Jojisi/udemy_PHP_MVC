<?php

function validate_name_course($name_course) {
    $sql = "SELECT * FROM courses WHERE name_course='$name_course'";

    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    $course = mysqli_fetch_object($res);  // Usamos mysqli_fetch_object correctamente
    connect::close($conexion);
    return $course;  // Devuelve el objeto o null si no se encuentra
}

function validate_price_course($price_course) {
    $sql = "SELECT * FROM courses WHERE price_course='$price_course'";

    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    $num_rows = mysqli_num_rows($res);  // Número de filas, usado para ver si existe el precio
    connect::close($conexion);
    return $num_rows;  // Devuelve el número de filas encontradas
}

function validate() {
    $check = true;

    // Verificamos que los campos estén presentes antes de usarlos
    $name_course = isset($_POST['name_course']) ? $_POST['name_course'] : '';
    $price_course = isset($_POST['price_course']) ? $_POST['price_course'] : '';

    // Validación de nombre de curso
    $name_course_check = validate_name_course($name_course);
    if ($name_course_check !== null) {
        echo '<script language="javascript">setTimeout(() => {
            toastr.error("El nombre no puede estar repetido");
        }, 1000);</script>';
        $check = false;
    }

    // Validación de precio del curso
    $price_course_check = validate_price_course($price_course);
    if ($price_course_check > 0) {
        echo '<script language="javascript">setTimeout(() => {
            toastr.error("El precio no puede estar repetido");
        }, 1000);</script>';
        $check = false;
    }

    return $check;
}
?>
