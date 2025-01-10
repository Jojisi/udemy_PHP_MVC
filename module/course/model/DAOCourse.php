<?php
include("model/connect.php");

class DAOCourse
{
	function insert_course($datos)
	{
		// die('<script>console.log('.json_encode( $datos ) .');</script>');

		$id_course = $datos['id_course'];
		$name_course = $datos['name_course'];
		$description_course = $datos['description_course'];
		$category_course = "";
		if (isset($datos['category_course']) && is_array($datos['category_course'])) {
			$category_course = implode(":", $datos['category_course']);
		}
		$level_course = "";
		if (isset($datos['level_course']) && is_array($datos['level_course'])) {
			$level_course = implode(":", $datos['level_course']);
		}
		$price_course = $datos['price_course'];
		// Asegúrate de que 'language_course' se está recibiendo
		$language_course = isset($_POST['language_course']) ? $_POST['language_course'] : '';

		$datestart_course = $datos['datestart_course'];
		$dateend_course = $datos['dateend_course'];


		$sql = "INSERT INTO courses (id_course, name_course, description_course, category_course, level_course, price_course, language_course, datestart_course, dateend_course)"
			. "VALUES ('$id_course', '$name_course', '$description_course', '$category_course', '$level_course', '$price_course', '$language_course', '$datestart_course', '$dateend_course')";


		// die('<script>console.log('.json_encode( $sql ) .');</script>');
		$conexion = connect::con();
		$res = mysqli_query($conexion, $sql);
		connect::close($conexion);
		return $res;
	}

	function select_all_courses()
	{
		// $data = 'hola DAO select_all_courses';
		// die('<script>console.log('.json_encode( $data ) .');</script>');
		$sql = "SELECT * FROM courses ORDER BY id ASC";

		$conexion = connect::con();
		$res = mysqli_query($conexion, $sql);
		connect::close($conexion);
		return $res;
	}

	function select_course($id_course)
	{
		// $data = 'hola DAO select_user';
		// die('<script>console.log('.json_encode( $data ) .');</script>');
		$sql = "SELECT * FROM courses WHERE id_course='$id_course'";

		$conexion = connect::con();
		$res = mysqli_query($conexion, $sql)->fetch_object();
		connect::close($conexion);
		return $res;
	}

	function update_course($datos)
	{
		//die('<script>console.log('.json_encode( $datos ) .');</script>');
		$id_course = $datos['id_course'];
		$name_course = $datos['name_course'];
		$description_course = $datos['description_course'];
		$category_course = "";
		if (isset($datos['category_course']) && is_array($datos['category_course'])) {
			$category_course = implode(":", $datos['category_course']);
		}
		$level_course = "";
		if (isset($datos['level_course']) && is_array($datos['level_course'])) {
			$level_course = implode(":", $datos['level_course']);
		}
		$price_course = $datos['price_course'];
		// Asegúrate de que 'language_course' se está recibiendo
		$language_course = isset($_POST['language_course']) ? $_POST['language_course'] : '';

		$datestart_course = $datos['datestart_course'];
		$dateend_course = $datos['dateend_course'];

		$sql = " UPDATE courses SET name_course='$name_course', description_course='$description_course', category_course='$category_course', level_course='$level_course', price_course='$price_course', "
			. " language_course='$language_course', datestart_course='$datestart_course', dateend_course='$dateend_course' WHERE id_course='$id_course'";

		$conexion = connect::con();
		$res = mysqli_query($conexion, $sql);
		connect::close($conexion);
		return $res;
	}

	function delete_course($id_course)
	{
		$sql = "DELETE FROM courses WHERE id_course='$id_course'";

		$conexion = connect::con();
		$res = mysqli_query($conexion, $sql);
		connect::close($conexion);
		return $res;
	}
}
