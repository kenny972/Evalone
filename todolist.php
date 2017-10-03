<?php
//connect to the database

 $db = mysqli_connect('localhost', 'root', 'root', 'moreau');

if (isset($_POST['submit'])){
	$task = $_POST['task'];

	mysqli_query($db, "INSERT INTO projet (task) VALUES ('$task')");
	header('location:todolist.php');
}
$projet = mysqli_query($db, "SELECT * FROM projet");

// <!-- delete task -->
if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];
	mysqli_query($db, "DELETE FROM projet WHERE id =$id");
	header('location:todolist.php');
}


$projet = mysqli_query($db, "SELECT * FROM projet");

?>



<!doctype html>
<html class="no-js" lang="fr">
	<head>
		<meta charset="utf-8">
		<!-- <meta http-equiv="x-ua-compatible" content="ie=edge"> -->
		<title>To Do List</title>
		<!-- <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
		<!-- Place favicon.ico in the root directory -->
		<!-- <link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/bootstrap.css"> -->
		<link rel="stylesheet" href="css/style.css">
		
		
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body>
	<header>
		
	</header>

		<div class="heading">
			<h2>Our list of completed projects</h2>	
		</div>

		<form method="POST" action="todolist.php" >
			<input type="text" name="task" class="task_input">
			<button type="submit" class="add_btn" name="submit">Add a task</button>
		</form>

		<table>
			<thead>
				<tr>
					<th style="text-align: left;">Number </th>
					<th style="text-align: center;">Tasks </th>
					<th>Delete </th>
				</tr>
			</thead>
		

		<tbody>

		<?php $i=1; while ($row = mysqli_fetch_array($projet)) { ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td class="task"><?php echo $row ['task'];  ?></td>
				<td class="delete">
					<a href="todolist.php?del_task=<?php echo $row['id'];?>">x</a>
				</td>
			</tr>
		<?php $i++; }  ?>
			
		</tbody>

		</table>


	<footer></footer>	
		<!--  -->
	</body>
</html>
<!-- 16.23 AND 4:01 -->
<!-- 1.a corriger : Apparences des écritures dans la todolist
