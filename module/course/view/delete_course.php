<div id="contenido">
    <form autocomplete="on" method="post" name="delete_user" id="delete_user" action="index.php?page=controller_course&op=delete&id=<?php echo $_GET['id']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>¿Are you sure you want to delete this course -> <?php echo $_GET['id']; ?>?</h3></td>
                
            </tr>
            <tr>
                <td align="center"><button type="submit" class="Button_green"name="delete" id="delete">Accept</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_course&op=list">Decline</a></td>
            </tr>
        </table>
    </form>
</div>