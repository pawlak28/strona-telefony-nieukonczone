<?php	


			echo <<<END
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>login</th>
						<th>haslo</th>
						<th>mail</th>
						<th>admin</th>
						<th>edycja</th>
						<th>Wiadomosc</th>
					</tr>
				</thead>
				<tbody>
				
END;
					require_once "dbconnect.php";
					$db=new mysqli($host,$db_user,$db_password,$db_name);
					$sql="SELECT * FROM uzytkownicy;";
					$result=mysqli_query($db,$sql);
					while($row=mysqli_fetch_row($result))
					{
					 echo '<tr>';
					 echo '<td name=user_id id="user_'.$row[0].'" class="success">'.$row[0].'</td>';
					 echo '<td name=user_login class="warning">'.$row[1].'</td>';
					 echo '<td name=user_password class="info">'.$row[2].'</td>';
					 echo '<td name=user_mail class="danger">'.$row[3].'</td>';
					 echo '<td name=user_admin class="active">'.$row[5].'</td>';
					 echo '<td class="warning"><a>Edytuj</a></td>';
					 echo '<td class="success"><a>Wyslij maila</a></td>';
					 echo '</tr>';
					}
				
				echo "</tbody>";
			echo "</table>";
			

?>