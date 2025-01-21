<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Udemy Courses</title>
	<link rel="icon" href="view/img/logotry.png" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#fecha').datepicker({
				dateFormat: 'dd/mm/yy',
				changeMonth: true,
				changeYear: true,
				yearRange: '1900:2016',
				onSelect: function(selectedDate) {}
			});
		});
	</script>
	<link href="view/css/style.css" rel="stylesheet" type="text/css" />
	<script src="module/course/model/promises.js"></script>
	<script src="module/course/model/validate_course.js"></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>