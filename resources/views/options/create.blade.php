<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h3>Create Option</h3>

<form method="post" action="/option">
	{{ csrf_field() }}
	<input type="text" name="name" />
	<br>
	<input type="submit" />
</form>

</body>
</html>