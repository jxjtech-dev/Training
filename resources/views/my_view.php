<!DOCTPE html>

<html>
	<head>
		<title>View data</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<td>Id</td>
				<td> Name</td>
			</tr>
			
			<tbody>
			@foreach ($users as $user)
			<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</body>
</html>