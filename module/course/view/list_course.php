<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>COURSES LIST</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_course&op=create"><img src="view/img/anadir.png"></a></p>
    		
    		<table>
                <tr>
                    <td width=125><b>Name</b></th>
                    <td width=125><b>Category</b></th>
                    <td width=125><b>Level</b></th>
                    <th width=350><b>ACTION</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">THERE`S NO COURSES AVAILABLE !!!</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['name_course'] . '</td>';
                    	   	echo '<td width=125>'. $row['category_course'] . '</td>';
                    	   	echo '<td width=125>'. $row['level_course'] . '</td>';
                    	   	echo '<td width=350>';
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_course&op=read&id='.$row['id_course'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_course&op=update&id='.$row['id_course'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_course&op=delete&id='.$row['id_course'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>