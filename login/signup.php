<?PHP

/* Variáveis */

$uname = "";
$pword = "";
$errorMessage = "";

/* Verificar se o botão foi clicado "submitted" */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	/* Buscar o nome e pass das textboxes */

	$uname = $_POST['username'];
	$pword = $_POST['password'];

	/* Tentar conectar com a BD. O CONFIGURE tem <?PHP
		define('DB_SERVER', 'localhost'); LOCALHOST DA BD
		define('DB_USER', 'root'); USER DA DB
		define('DB_PASS', 'abcABC123#'); PASS DA DB
		?>
*/

	require '../../configure.php';
	$database = "login";

	$db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

	/* Tentar procurar a db  */

	if ($db_found) {		
		/* Se for encontrada  --> verificar se já existe um nome igual */
		$SQL = $db_found->prepare('SELECT * FROM login WHERE L1 = ?');
		$SQL->bind_param('s', $uname);
		$SQL->execute();
		$result = $SQL->get_result();

		if ($result->num_rows > 0) {
			$errorMessage = "Username already taken";
		}
		/* Se não existir nome igual, este é adicionado na BD */
		else {
			$phash = password_hash($pword, PASSWORD_DEFAULT);
			$SQL = $db_found->prepare("INSERT INTO login (L1, L2) VALUES (?, ?)");
			$SQL->bind_param('ss', $uname, $phash);
			$SQL->execute();

			header ("Location: login.php");
		}
	}
	else {
		$errorMessage = "Database Not Found";
	}
}
?>

	<html>
	<head>
	<title>Basic Signup Script</title>


	</head>
	<body>


<FORM NAME ="form1" METHOD ="POST" ACTION ="signup.php">

<!-- Valores das texboxes -->

Username: <INPUT TYPE = 'TEXT' Name ='username'  value="<?PHP print $uname;?>" >
Password: <INPUT TYPE = 'TEXT' Name ='password'  value="<?PHP print $pword;?>" >

<P>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Register">


</FORM>
<P>
<!-- Caso exista algum erro -->

<?PHP print $errorMessage;?>

	</body>
	</html>
