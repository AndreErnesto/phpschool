<?PHP
session_start();

/* Verificar se o user está looged in senão volta a trás */

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
	header ("Location: login.php");
}

?>
	<html>
	<head>
	<title>Basic Login Script</title>


	</head>
	<body>




	User Logged in
<P>

<!-- Ligação com o logout.php -->

<A HREF = logout.php>Log out</A>

	</body>
	</html>
