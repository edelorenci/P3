<!doctype html>
<html>
<head>
	<meta charset='utf-8'>

	<title>@yield('title',"Developer Best Friend")</title>

	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/devbestfriend.css" type="text/css">

	@yield('head')

</head>

<body>

	@yield('content')

	@yield('body')

</body>

</html>