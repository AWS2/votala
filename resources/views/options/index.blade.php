<!DOCTYPE html>
<html>
<head>
	<title>Option list</title>
</head>
<body>

	<h1>Option List</h1>

	<ul>
	@foreach( $options as $option )
		<li>{{$option->name}}</li>
	@endforeach
	</ul>

</body>
</html>