<?php
	

	$nume=$_REQUEST["Name"];
	$prenume=$_REQUEST["Surname"];
	$username=$_REQUEST["Username"];
	$password=$_REQUEST["Password"];
	$email=$_REQUEST["Email"];

	if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

  	//Oracle DB user name
$contOracle = 'vlad';

// Oracle DB user password
$parolaOracle = 'VLAD';

// Oracle DB connection string
$connection_string = 'localhost/xe';

//Connect to an Oracle database
$connection = oci_connect(
$contOracle,
$parolaOracle,
$connection_string
);


If (!$connection)
echo 'connection failed';
else
{

$mesaj = 'VAKSNFASKLFNASFASFLASFASLKFASNLKFASNLFKASF';
$stid = oci_parse($connection, 'call login_pachet.inregistrare(:v_nume,:v_prenume,:v_username2,:v_password2,:v_email,:v_mesaj)');
oci_bind_by_name($stid, ":v_nume", $nume);
oci_bind_by_name($stid, ":v_prenume", $prenume);
oci_bind_by_name($stid, ":v_username2", $username);
oci_bind_by_name($stid, ":v_password2", $password);
oci_bind_by_name($stid, ":v_email", $email);
oci_bind_by_name($stid, ":v_mesaj", $mesaj);
oci_execute($stid);

echo $mesaj;


if ($mesaj == 'Email folosit') {

	header("Location: register.php?msg=usedemail");
}
else header("Location: register.php?msg=done");

//while ($row = oci_fetch_array ($stid,OCI_NUM)) {
 //   foreach($row as $data)
//		echo $data." ";
 //   echo " <br>";
//}
oci_free_statement($stid);

// Close connection 
oci_close($connection);

}

}
 else {
  echo("$email is not a valid email address");
}



?>