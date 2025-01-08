<div id="contenido">
    <form autocomplete="on" method="post" name="alta_course" id="alta_course"
        onsubmit="return validate();" action="index.php?page=controller_course&op=create">
        <h1>New Course</h1>
        <table border='0'>
            <tr>
                <td>Course ID: </td>
                <td><input type="text" id="id_course" name="id_course" placeholder="course ID" value="" /></td>
                <td>
                    <font color="red">
                        <span id="error_id_course" class="error">
                            <?php
                            echo "$error_id_course";
                            ?>
                        </span>
                    </font>
                    </font>
                </td>
            </tr>

            <tr>
                <td>Name: </td>
                <td><input type="text" id="name_course" name="name_course" placeholder="name of the course" value="" /></td>
                <td>
                    <font color="red">
                        <span id="error_name_course" class="error">
                            <?php
                            echo "$error_name_course";
                            ?>
                        </span>
                    </font>
                    </font>
                </td>
            </tr>

            <tr>
                <td>Description: </td>
                <td><textarea cols="30" rows="5" id="description_course" name="description_course" placeholder="what's the course about" value=""></textarea></td>
                <td>
                    <font color="red">
                        <span id="error_description_course" class="error">
                            <?php
                            echo "$error_description_course";
                            ?>
                        </span>
                    </font>
                    </font>
                </td>
            </tr>

            <tr>
                <td>Category: </td>
                <td><input type="checkbox" id="category_course[]" name="category_course[]" placeholder="category_course" value="Java" />Java
                    <input type="checkbox" id="category_course[]" name="category_course[]" placeholder="category_course" value="HTML" />HTML
                    <input type="checkbox" id="category_course[]" name="category_course[]" placeholder="category_course" value="CSS" />CSS
                </td>
                <td>
                    <font color="red">
                        <span id="error_category_course" class="error">
                            <?php
                            echo "$error_category_course";
                            ?>
                        </span>
                    </font>
                    </font>
                </td>
            </tr>

            <tr>
                <td>Level: </td>
                <td><select multiple size="3" id="level_course[]" name="level_course[]" placeholder="level_course">
                        <option value="Rookie">Rookie</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>
                    </select></td>
                <td>
                    <font color="red">
                        <span id="error_level_course" class="error">
                            <?php
                            echo "$error_level_course";
                            ?>
                        </span>
                    </font>
                    </font>
                </td>
            </tr>

            <tr>
                <td>Price: </td>
                <td><input type="text" id="price_course" name="price_course" placeholder="price of the course" value="" /></td>
                <td>
                    <font color="red">
                        <span id="error_price_course" class="error">
                            <?php
                            echo "$error_price_course";
                            ?>
                        </span>
                    </font>
                    </font>
                </td>
            </tr>

            <tr>
                <td>Language: </td>
                <td><label for="language_course_spanish">
                        <input type="radio" name="language_course" value="Spanish" id="language_course_spanish"> Spanish
                    </label>
                    <label for="language_course_english">
                        <input type="radio" name="language_course" value="English" id="language_course_english"> English
                    </label>

                </td>
                <td>
                    <font color="red">
                        <span id="error_language_course" class="error">
                            <?php
                            echo "$error_language_course";
                            ?>
                        </span>
                    </font>
                    </font>
                </td>
            </tr>

            <tr>
                <td>Start date: </td>
                <td><input id="datestart_course" type="date" name="datestart_course" placeholder="start date of the course" value="" /></td>
                <td>
                    <font color="red">
                        <span id="error_datestart_course" class="error">
                            <?php
                            echo "$error_datestart_course";
                            ?>
                        </span>
                    </font>
                    </font>
                </td>
            </tr>

            <tr>
                <td>End date: </td>
                <td><input id="dateend_course" type="date" name="dateend_course" placeholder="end date of the course" value="" /></td>
                <td>
                    <font color="red">
                        <span id="error_dateend_course" class="error">
                            <?php
                            echo "$error_dateend_course";
                            ?>
                        </span>
                    </font>
                    </font>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="create" id="create" /></td>
                <td align="right"><a href="index.php?page=controller_course&op=list">Go back</a></td>
            </tr>
        </table>
    </form>
</div>