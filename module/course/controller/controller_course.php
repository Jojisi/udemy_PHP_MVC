<?php
    // $data = 'hola crtl course';
    // die('<script>console.log('.json_encode( $data ) .');</script>');

    include ("module/course/model/DAOCourse.php");
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    switch($_GET['op']){
        case 'list';
            // $data = 'hola crtl course list';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
              
            try{
                $daocourse = new DAOCourse();
            	$rdo = $daocourse->select_all_courses();
                //die('<script>console.log('.json_encode( $rdo->num_rows ) .');</script>');
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/course/view/list_course.php");
    		}
            break;
            
        case 'create';
            // $data = 'hola crtl course create';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_POST ) .');</script>');

            include("module/course/model/validate.php");
            
            $check = true;
            
            // modificar i que se quede solo el if($_POST)
            if (isset($_POST['create'])){
                // if($_POST){
                // $data = 'hola create post course';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');

                $check=validate();
                //die('<script>console.log('.json_encode( $check ) .');</script>');

                if ($check){
                    $_SESSION['course'] = $_POST;
                    // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                    try{
                        $daocourse = new DAOCourse();
    		            $rdo = $daocourse->insert_course($_POST);
                        // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
                        echo '<script language="javascript">setTimeout(() => {
                            toastr.success("Creado en la base de datos correctamente");
                        }, 1000);</script>';
                        echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_course&op=list";
                        }, 2000);</script>';
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            include("module/course/view/create_course.php");
            break;
            
            case 'update';
            include("module/course/model/validate.php");
            $check = true;
    
            // modificar i que se quede solo el if($_POST)
            if ($_POST) {
                // $data = 'hola update post households';
                // die('<script>console.log('.json_encode( $data ) .');</script>');
                //$check=validate();
                $check = true;
    
                //die('<script>console.log('.json_encode( $check ) .');</script>');
    
                if ($check) {
                    $_SESSION['course'] = $_POST;
                    //die('<script>console.log('.json_encode( $_POST ) .');</script>');
                    try {
                        $daocourse = new DAOCourse();
                        $rdo = $daocourse->update_course($_POST);
                        //die('<script>console.log('.json_encode( $rdo ) .');</script>');
                    } catch (Exception $e) {
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="' . $callback . '";</script>');
                    }
    
                    if ($rdo) {
                        echo '<script language="javascript">alert("Updated successfully")</script>';
                        $callback = 'index.php?page=controller_course&op=list';
                        die('<script>window.location.href="' . $callback . '";</script>');
                    } else {
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="' . $callback . '";</script>');
                    }
                } else {
                    echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_course&op=list";
                        }, 2000);</script>';
                }
            }
    
            try {
                $daocourse = new DAOCourse();
                $rdo = $daocourse->select_course($_GET['id']);
                $course = get_object_vars($rdo);
            } catch (Exception $e) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
    
            if (!$rdo) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                include("module/course/view/update_course.php");
            }
            break;
            
        case 'read';
            // $data = 'hola crtl course read';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');

            try{
                $daocourse = new DAOCourse();
            	$rdo = $daocourse->select_course($_GET['id']);
            	$course=get_object_vars($rdo);
                //die('<script>console.log('.json_encode( $user ) .');</script>');
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/course/view/read_course.php");
    		}
            break;
            
        case 'delete';
            // $data = 'hola crtl course delete';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');

            if (isset($_POST['delete'])){
                //die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
                try{
                    $daocourse = new DAOCourse();
                	$rdo = $daocourse->delete_course($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	if($rdo){
                    echo '<script language="javascript">setTimeout(() => {
                        toastr.success("Borrado en la base de datos correctamente");
                    }, 1000);</script>';
                    echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=controller_course&op=list";
                    }, 2000);</script>';
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/course/view/delete_course.php");
            break;
        default;
            include("view/inc/error404.php");
            break;
    }