<?php
function validate_course_id($id_course)
{
    $sql = "SELECT * FROM courses WHERE id_course='$id_course'";

    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql)->fetch_object();
    connect::close($conexion);
    return $res;
}

function validate()
{
    // $data = 'hola validate php';
    // die('<script>console.log('.json_encode( $data ) .');</script>');

    $check = true;

    $id_course = $_POST['id_course'];
    $id_course = validate_course_id($id_course);

    if ($id_course !== null) {
        echo '<script language="javascript">setTimeout(() => {
                toastr.error("The course ID must be an unique value and cannot be repited");
            }, 1000);</script>';
        $check = false;
    }

    return $check;
}
