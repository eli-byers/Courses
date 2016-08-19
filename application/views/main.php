<?php
function print_user_table ($mult_arr){
	echo '<table class="table table-striped">';
	foreach (array_reverse($mult_arr) as $key => $arr) {
		if($key == 0){
			echo '<thead>';
			echo '<tr>';
			foreach ($arr as $key => $value){
				if($key == 'title' || $key == 'description'){
					echo '<th>'.ucfirst($key).'</th>';
				} else if($key == 'created_at'){
					echo '<th>Date Added</th>';
				}
			}
			echo "<th>Actions</th>";
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
		}
		echo '<tr>';
		foreach ($arr as $key => $value) {
			if($key == 'title' || $key == 'description'){
				echo '<td>'.$value.'</td>';
			} else if($key == 'created_at'){
				// $date = DateTime::createFromFormat('M jS Y g:iA',$value);
				// $date = $date->format('M jS Y g:iA');
				echo '<td>'.$value.'</td>';
			}
		}
		echo "<td><a href='destroy/{$arr['id']}'>remove</a></td>";
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Courses</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<style>
			input[type=text],textarea{
				width: 100%;
				resize: none;
			}

			/*------------------*/

			.row.spacer {
				margin-top: 10px;
			}

			table, ht {
				border-top: 2px solid #777;
				border-bottom: 2px solid #777;
			}
			td, th {
				border-left: 2px solid #777;
				border-right: 2px solid #777;
			}
			th {
				background-color: #ddd;
			}
		</style>
	</head>
	<body>
		<div class='container'>

			<h3>Add a new course</h3>
			<form action='/courses/add' method='post'>
				<div class='row'>
					<div class='col-xs-1'>
						Name:
					</div>
					<div class='col-xs-4'>
						<input type='text' name='title'>
					</div>
				</div>
				<div class='row spacer'>
					<div class='col-xs-1'>
						Description:
					</div>
					<div class='col-xs-4'>
						<textarea rows='3' type='text' name='description'></textarea>
					</div>
				</div>
				<div class='row'>
					<div class='col-xs-5 text-right'>
						<button type='submit' class='btn btn-success'>
							Add
						</button>
					</div>
				</div>
			</form>

			<h3>Courses</h3>
			<?php print_user_table($courses); ?>

		</div>
	</body>
</html>
