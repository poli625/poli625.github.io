<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Wiki about Dokkan Battle</title>
	<link rel="stylesheet" href= "style/style.css">

</head>

<body style="background-image:url(resource/images/background.jpg);background-repeat:round;background-attachment: fixed;">
	<form action="Login.php" method="post" style = "margin-left:45%;margin-top:20%;">
        <span style="color:white">
            Login: <br /> <input type="text" name="login" /> <br />
            Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
        </span>
		<input type="submit" value="Zaloguj się" />
		<input  type="button" value="Powrót na stronę główną" onclick = "location.href = 'index.php'" />
		
	</form>
</html>