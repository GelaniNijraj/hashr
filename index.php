<!DOCTYPE html>
<html>
<head>
	<title>Hashr</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<style type="text/css">
		html{
			font-family: Orbitron;
		}
		.hashes {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			grid-gap: 10px;
			grid-auto-columns: minmax(20%, 30%);
		}
	</style>
	<script>
		$(document).ready(function(){
			$("#hashForm").submit(function(e){
				e.preventDefault();
				$.post("calculate_hashes.php", {
					input: $("#text").val()
				}, function(response){
					$("#hashes").html(response);
				});
			});
		});
	</script>
	<link href="https://fonts.googleapis.com/css?family=Nunito|Orbitron" rel="stylesheet">
</head>
<body>
	<form method="get" id="hashForm">
		<label>Input string: </label>
		<input type="text" name="input" id="text">
		<input type="submit" name="submit" value="Hash!">
	</form>
	<br>
	<div class="hashes" id="hashes">

	</div>
</body>
</html>


