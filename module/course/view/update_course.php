<div id="contenido">
    <form autocomplete="on" method="post" name="update_course" id="update_course" onsubmit="return validate();" action="index.php?page=controller_course&op=update">
        <h1>Modify Course</h1>
        <table border='0'>
            <tr>
                <td>Course ID: </td>
                <td><input type="text" id="id_course" name="id_course" placeholder="course ID" value="<?php echo $id_course['id_course'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_id_course" class="error">
                        <?php
                            echo "$error_id_course";
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Name: </td>
                <td><input type="text" id="name_course" name="name_course" placeholder="name of the course" value="<?php echo $id_course['name_course'];?>"/></td>
                <td><font color="red">
                    <span id="error_name_course" class="error">
                        <?php
                            echo "$error_name_course";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Description: </td>
                <td><textarea cols="30" rows="5" id="description_course" name="description_course" placeholder="what's the course about"><?php echo $id_course['description_course'];?></textarea></td>
                <td><font color="red">
                    <span id="error_description_course" class="error">
                        <?php
                            echo "$error_description_course";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Category: </td>
                <?php
                    $cat_course=explode(":", $id_course['category_course']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("Java", $cat_course);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "category_course[]" name="category_course[]" value="Java" checked/>Java
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "category_course[]" name="category_course[]" value="Java"/>Java
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("HTML", $cat_course);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "category_course[]" name="category_course[]" value="HTML" checked/>HTML
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "category_course[]" name="category_course[]" value="HTML"/>HTML
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("CSS", $cat_course);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "category_course[]" name="category_course[]" value="CSS" checked/>CSS</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "category_course[]" name="category_course[]" value="CSS"/>CSS</td>
                    <?php
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_category_course" class="error">
                        <?php
                            echo "$error_category_course";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Level: </td>
                <?php
                    $lvl_course=explode(":", $id_course['level_course']);
                ?>
                <td><select multiple size="3" id="level_course[]" name="level_course[]" placeholder="level_course">
                    <?php
                        $busca_array=in_array("Rookie", $lvl_course);
                        if($busca_array){
                    ?>
                        <option value="Rookie" selected>Rookie</option>
                    <?php
                        }else{
                    ?>
                        <option value="Rookie">Rookie</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Beginner", $lvl_course);
                        if($busca_array){
                    ?>
                        <option value="Beginner" selected>Beginner</option>
                    <?php
                        }else{
                    ?>
                        <option value="Beginner">Beginner</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Intermediate", $lvl_course);
                        if($busca_array){
                    ?>
                        <option value="Intermediate" Intermediate>Portugues</option>
                    <?php
                        }else{
                    ?>
                        <option value="Intermediate">Intermediate</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Advanced", $lvl_course);
                        if($busca_array){
                    ?>
                        <option value="Advanced" selected>Advanced</option>
                    <?php
                        }else{
                    ?>
                        <option value="Advanced">Advanced</option>
                    <?php
                        }
                    ?>
                    </select></td>
                <td><font color="red">
                    <span id="error_level_course" class="error">
                        <?php
                            echo "$error_level_course";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Price: </td>
                <td><input type="text" id="price_course" name="price_course" placeholder="price of the course" value="<?php echo $id_course['price_course'];?>"/></td>
                <td><font color="red">
                    <span id="error_price_course" class="error">
                        <?php
                            echo "$error_price_course";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Language: </td>
                <td>
                    <?php
                        if ($id_course['language_course']==="Hombre"){
                    ?>
                        <input type="radio" id="language_course" name="language_course" placeholder="language_course" value="English" checked/>English
                        <input type="radio" id="language_course" name="language_course" placeholder="language_course" value="Spanish"/>Spanish
                    <?php    
                        }else{
                    ?>
                        <input type="radio" id="language_course" name="language_course" placeholder="language_course" value="English"/>English
                        <input type="radio" id="language_course" name="language_course" placeholder="language_course" value="Spanish" checked/>Spanish
                    <?php   
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_language_course" class="error">
                        <?php
                            echo "$error_language_course";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            
            <tr>
                <td>Sart date: </td>
                <td><input id="datestart_course" type="text" name="datestart_course" placeholder="start date of the course" value="<?php echo $id_course['datestart_course'];?>"/></td>
                <td><font color="red">
                    <span id="error_datestart_course" class="error">
                        <?php
                            echo "$error_datestart_course";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>End date: </td>
                <td><input id="dateend_course" type="text" name="dateend_course" placeholder="end date of the course" value="<?php echo $id_course['dateend_course'];?>"/></td>
                <td><font color="red">
                    <span id="error_dateend_course" class="error">
                        <?php
                            echo "$error_dateend_course";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a href="index.php?page=controller_course&op=list">Go back</a></td>
            </tr>
        </table>
    </form>
</div>