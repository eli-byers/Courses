<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Delete a course</title>
		<title>Courses</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<style>
			.btn-secondary {
				border: 1px solid grey;
				color: white;
				margin-right: 30px;
				/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a5a5a5+0,707070+100 */
				background: #a5a5a5; /* Old browsers */
				background: -moz-linear-gradient(top,  #a5a5a5 0%, #707070 100%); /* FF3.6-15 */
				background: -webkit-linear-gradient(top,  #a5a5a5 0%,#707070 100%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to bottom,  #a5a5a5 0%,#707070 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a5a5a5', endColorstr='#707070',GradientType=0 ); /* IE6-9 */
			}

			.no:active {
			    background-color: #777;
				color: white;
			}
			.no:hover {
				background-color: #777;
				color: white;
			}

			h3, .click {
				text-align: center;
			}

		</style>
	</head>
	<body>
		<div class="container">
			<h3>Are you sure you want to delete the folowing course?</h3>
			<div class='description'>
				<div class='row'>
					<div class='col-xs-1 col-xs-offset-3' style="min-width: 100px">
						Name:
					</div>
					<div class='col-xs-4'>
						<?= $course['title'] ?>
					</div>
				</div>
				<div class='row spacer'>
					<div class='col-xs-1 col-xs-offset-3' style="min-width: 100px">
						Description:
					</div>
					<div class='col-xs-4'>
						<?= $course['description'] ?>
					</div>
				</div>
			</div>

			<div class='click'>
				<a href='/' class="btn btn-secondary no" role="button">
					No
				</a>
				<a href='/remove/<?= $course['id'] ?>' class='btn btn-danger' role='button'>
					Yes! I want to delete this
				</a>
			</div>
		</div>
	</body>
</html>
