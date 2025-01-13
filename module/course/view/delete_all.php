<div id="contenido">
    <form autocomplete="on" method="post" name="delete_all" id="delete_all">
        <table border='0'>
            <tr>
                <th width=1500>
                    <h3>Do you want to delete ALL the courses at time?</h3>
                </th>
            </tr>
        </table>
        <table border='0'>
            <tr>
                <td><input type="hidden" id="id_course" name="id_course" placeholder="course_id" value="<?php echo $id_course['id_course']; ?>" /></td>
            </tr>

            <tr>
                <td><br><input name="Submit" type="button" class="Button_green" onclick="validate_others('delete_all')" value="Approve" /></td>
                <td align="right"><br><a class="Button_red" href="index.php?page=controller_course&op=list">Back</a></td>
            </tr>
        </table>
        <br>
        <br>
    </form>
</div>