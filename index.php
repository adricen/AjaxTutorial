<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/jquery-1.10.1.js"></script>
	<script>
	function test(fruit)
	{
	$.post('process.php',{name:fruit},function(data)
	{
	$('#a').html(data);
	});
	}
	</script>
	<style>
	body{
		font-family: Segoe UI;
	}
	</style>
</head>
<body>

<div class="container">
  <h2>Simple Ajax Demo - TricksWay.com</h2>
  <br>
  <div class="form-group">
  <label for="sel1">Select Fruit:</label>
  <select class="form-control" name="fruit" onChange="test(this.value)">
	<option value="fruit" disabled selected>Select Fruit</option>
	<option value="mango" data-target="#myModal">Mango</option>
	<option value="apple" data-target="#myModal">Apple</option>
  </select>
   </div>
   <div class="alert alert-success" id="a">
  <strong>Success!</strong> Indicates a successful or positive action.
   </div>
  </div>

</body>
</html>
	
