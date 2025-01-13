<div id="contenido">
    <form autocomplete="on" method="post" name="dummies" id="dummies">
        <table border='0'>
            <tr>
                <th width=1200>
                    <h3>Do you want to create a dummie list of courses?</h3>
                    </td>

            </tr>
        </table>
        <table border='0'>
            <tr>
                <td><input type="hidden" id="id_course" name="id_course" placeholder="course_id" value="<?php echo $id_course['id_course']; ?>" /></td>
            </tr>

            <tr>
                <td><br><input name="Submit" type="button" class="Button_green" onclick="validate_others('dummies')" value="Dummies Generator" /></td>
                <td align="right"><br><a class="Button_red" href="index.php?page=controller_course&op=list">Back</a></td>
            </tr>
        </table>
    </form>
</div>