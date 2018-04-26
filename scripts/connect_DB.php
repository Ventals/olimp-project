<?

	$host = "https://frozen-reef-64159.herokuapp.com";
	$login = "root";
	$password = "";
	$DB = "olimp-project-backend";
	$link = mysqli_connect($host, $login, $password, $DB);

	if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}
	
	
