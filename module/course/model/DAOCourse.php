<?php
    include("model/connect.php");
    
	class DAOCourse{
		function insert_course($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');

			$id_course=$datos['id_course'];
        	$name_course=$datos['name_course'];
        	$description_course=$datos['description_course'];
            foreach ($datos['category_course'] as $indice) {
        	    $category_course=$category_course."$indice:";
        	}
        	$level_course=$datos['level_course'];
        	$price_course=$datos['price_course'];
        	foreach ($datos['language_course'] as $indice) {
        	    $language_course=$language_course."$indice:";
        	}        	
            $datestart_course=$datos['datestart_course'];
            $dateeend_course=$datos['dateeend_course'];


        	$sql = "INSERT INTO courses (id_course, name_course, description_course, category_course, level_course, price_course, language_course, datestart_course, dateeend_course)"
        		. "VALUES ('$id_course', '$name_course', '$description_course', '$category_course', '$level_course', '$price_course', '$language_course', '$datestart_course', '$dateeend_course')";
            
			// die('<script>console.log('.json_encode( $sql ) .');</script>');
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_courses(){
			// $data = 'hola DAO select_all_courses';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM courses ORDER BY id ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
			connect::close($conexion);
            return $res;
		}
		
		function select_course($id_course){
			// $data = 'hola DAO select_user';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM courses WHERE id_course='$id_course'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_course($datos){
			//die('<script>console.log('.json_encode( $datos ) .');</script>');
			$id_course=$datos['id_course'];
        	$name_course=$datos['name_course'];
        	$description_course=$datos['description_course'];
            foreach ($datos['category_course'] as $indice) {
        	    $category_course=$category_course."$indice:";
        	}
        	$level_course=$datos['level_course'];
        	$price_course=$datos['price_course'];
        	foreach ($datos['language_course'] as $indice) {
        	    $language_course=$language_course."$indice:";
        	}        	
            $datestart_course=$datos['datestart_course'];
            $dateeend_course=$datos['dateeend_course'];
        	
        	$sql = " UPDATE courses SET name_course='$name_course', description_course='$description_course', category_course='$category_course', level_course='$level_course', price_course='$price_course', price_course='$price_course',"
        		. " language_course='$language_course', datestart_course='$datestart_course', dateeend_course='$dateeend_course' WHERE id_course='$id_course'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_course($id_course){
			$sql = "DELETE FROM courses WHERE id_course='$id_course'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}