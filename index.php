<!DOCTYPE html>
<html>
<head>
	<title>AJAX playing around</title>
</head>
<body>
	<h2>I can guess your hobby if you give me a letter.</h2>
	<p>Go ahead, start typing a hobby</p>
	<form>
		Hobby: <input type="text" onkeyup="showHobbyList(this.value)" name="hobby">
	</form>
	<p>my guesses: <span id="hobbyList"></span></p>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="includes/ajax-stuff.js"></script>
</body>
</html>