function validate_id_course(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_name_course(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_description_course(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_category_course(array){
    var i;
    var ok=0;
    for(i=0; i<array.length;i++){
        if(array[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_level_course(array){
    var check=false;
    for ( var i = 0, l = array.options.length, o; i < l; i++ ){
        o = array.options[i];
        if ( o.selected ){
            check= true;
        }
    }
    return check;
}

function validate_price_course(texto){
    if (texto.length > 0){
        var reg=/^[0-9]{1,4}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_language_course(texto){
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_datestart_course(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_dateend_course(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

// function validate_password(texto){
//     if (texto.length > 0){
//         var reg = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
//         return reg.test(texto);
//     }
//     return false;
// }


function validate(){
    // console.log('hi validate js');
    // return false;

    var check=true;
    
    var v_id_course=document.getElementById('id_course').value;
    // console.log(v_id_course);
    // return false;
    var v_name_course=document.getElementById('name_course').value;
    var v_description_course=document.getElementById('description_course').value;
    var v_category_course=document.getElementsById('category_course[]').value;
    var v_level_course=document.getElementsByName('level_course[]');
    var v_price_course=document.getElementById('price_course').value;
    var v_language_course=document.getElementById('language_course').value;
    var v_datestart_course=document.getElementById('datestart_course');
    var v_dateend_course=document.getElementById('dateend_course').value;
    
    var r_id_course=validate_id_course(v_id_course);
    // console.log(r_id_course);
    // return false;
    var r_name_course=validate_name_course(v_name_course);
    var r_description_course=validate_description_course(v_description_course);
    //var r_DNI=validate_DNI(v_DNI);
    // var r_DNI=true;
    var r_category_course=validate_category_course(v_category_course);
    var r_level_course=validate_level_course(v_level_course);
    var r_price_course=validate_price_course(v_price_course);
    var r_language_course=validate_language_course(v_language_course);
    var r_datestart_course=validate_datestart_course(v_datestart_course);
    var r_dateend_course=validate_dateend_course(v_dateend_course);
    
    if(!r_id_course){
        document.getElementById('error_id_course').innerHTML = " * El id_course introducido no es valido";
        // console.log(r_id_course);
        // return false;
        check=false;
    }else{
        document.getElementById('error_id_course').innerHTML = "";
    }
    if(!r_name_course){
        document.getElementById('error_name_course').innerHTML = " * La name_course introducida no es valida";
        check=false;
    }else{
        document.getElementById('error_name_course').innerHTML = "";
    }
    if(!r_description_course){
        document.getElementById('error_description_course').innerHTML = " * El description_course introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_description_course').innerHTML = "";
    }
    if(!r_category_course){
        document.getElementById('error_category_course').innerHTML = " * El category_course introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_category_course').innerHTML = "";
    }
    if(!r_level_course){
        document.getElementById('error_level_course').innerHTML = " * No has seleccionado ningun genero";
        check=false;
    }else{
        document.getElementById('error_level_course').innerHTML = "";
    }
    if(!r_price_course){
        document.getElementById('error_price_course').innerHTML = " * No has introducido ninguna fecha";
        check=false;
    }else{
        document.getElementById('error_price_course').innerHTML = "";
    }
    if(!r_language_course){
        document.getElementById('error_language_course').innerHTML = " * La edad introducida no es valida";
        check=false;
    }else{
        document.getElementById('error_language_course').innerHTML = "";
    }
    if(!r_datestart_course){
        document.getElementById('error_datestart_course').innerHTML = " * No has seleccionado ningun idioma";
        check=false;
    }else{
        document.getElementById('error_datestart_course').innerHTML = "";
    }
    if(!r_dateend_course){
        document.getElementById('error_dateend_course').innerHTML = " * El texto introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_dateend_course').innerHTML = "";
    }
    return check;
}