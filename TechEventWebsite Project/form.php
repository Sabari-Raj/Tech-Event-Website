<!DOCTYPE html>
<html>
<head>
<title>Regiteration</title>
<link href="form.css" rel="stylesheet">
</head>
<body>
	<div class="maindiv">
		<div class="form_div">
			<div class="title">
				<h2>REGISTER FOR YOUR FAVOURITE EVENT.</h2>
			</div>
			<form action="database.php" method="post">
				
				<label class="text">NAME:</label>
				<input class="input" name="name" type="text" value="">
				
				<label class="text">EVENT:</label>
				<select class="input" name="event[]" multiple="multiple">
				  <option value="event1">EVENT1</option>
				  <option value="event2">EVENT2</option>
				  <option value="event3">EVENT3</option>
				  <option value="event4">EVENT4</option>
				  <option value="event5">EVENT5</option>
				  <option value="event6">EVENT6</option>
				</select><br><br>

				<label class="text">WORKSHOP:</label>
				<select class="input" name="workshop[]" multiple="multiple">
				  <option value="workshop1">WORKSHOP1</option>
				  <option value="workshop2">WORKSHOP2</option>
				  <option value="workshop3">WORKSHOP3</option>
				  <option value="workshop4">WORKSHOP4</option>
				  <option value="workshop5">WORKSHOP5</option>
				  <option value="workshop6">WORKSHOP6</option>
				</select><br><br>
				
				<label class="text">EMAIL:</label>
				<input class="input" name="email" type="text" value="">
				
				<label class="text">MOBILE NO:</label>
				<input class="input" name="contact" type="text" value="">
				
				<input class="submit" name="submit" type="submit" value="SUBMIT"><br>
			</form>
		</div>
	</div>
</body>
</html>