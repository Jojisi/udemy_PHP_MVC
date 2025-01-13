<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>COURSES LIST</h3>
    	</div>
    	<div class="row">
    		<a href="index.php?page=controller_course&op=create"><img src="view/img/add_button.png"></a>⠀⠀<a href="index.php?page=controller_course&op=delete_all"><img src="view/img/delete_all_icon.png"></a>⠀⠀
            <a href="index.php?page=controller_course&op=dummies"><img src="view/img/dummies_container.png"></a></p>
    		
    		<table>
                <tr>
                    <td width=125><b>Course ID</b></th>
                    <td width=125><b>Name</b></th>
                    <td width=125><b>Category</b></th>
                    <td width=125><b>Level</b></th>
                    <td width=125><b>Price</b></th>
                    <td width=125><b>Language</b></th>
                    <th width=350><b>ACTION</b></th>

                    <!-- price y language -->
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">THERE`S NO COURSES AVAILABLE !!!</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['id_course'] . '</td>';
                    	   	echo '<td width=125>'. $row['name_course'] . '</td>';
                    	   	echo '<td width=125>'. $row['category_course'] . '</td>';
                            echo '<td width=125>'. $row['level_course'] . '</td>';
                            echo '<td width=125>'. $row['price_course'] . ' €</td>';
                            echo '<td width=125>'. $row['language_course'] . '</td>';
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

<style>
    #contenido {
        font-family: Arial, sans-serif;
        background-color: #f4f7fb;
        padding: 20px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .add-course {
        text-align: right;
        margin-bottom: 20px;
    }

    .add-icon {
        width: 30px;
        height: auto;
        transition: transform 0.3s ease;
    }

    .add-icon:hover {
        transform: scale(1.1);
    }

    .course-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .course-table th, .course-table td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    .course-table th {
        background-color: #f4f7fb;
        font-weight: bold;
    }

    .course-table tr:hover {
        background-color: #f1f1f1;
    }

    .Button_blue, .Button_green, .Button_red {
        padding: 12px 26px;
        font-size: 14px;
        text-decoration: none;
        border-radius: 5px;
        color: white;
        display: inline-block;
    }

    .Button_blue {
        background-color: #3498db;
    }

    .Button_green {
        background-color: #4CAF50;
    }

    .Button_red {
        background-color: #f44336;
    }

    .Button_blue:hover {
        background-color: #2980b9;
    }

    .Button_green:hover {
        background-color: #45a049;
    }

    .Button_red:hover {
        background-color: #e53935;
    }

    .no-courses {
        text-align: center;
        font-size: 18px;
        color: #888;
        padding: 20px;
    }
</style>