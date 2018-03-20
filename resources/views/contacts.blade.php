<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vue Contacts App</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app">
		<navbar></navbar>
			<div class="container">
				<router-view></router-view>
			</div>
		<vuefooter></vuefooter>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>