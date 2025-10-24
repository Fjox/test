<?php
	echo '<pre>';
	// $webalizer = "/based/webalizer.sh";
	system("webalizer -c /based/webalizer.conf");
	// $contents = file_get_contents('/based/webalizer.sh');
	// echo shell_exec($contents); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
		<link href="/xampp/xampp.css" rel="stylesheet" type="text/css">
		<title></title>
	</head>

	<body>
		&nbsp;<p>
		<pre>
			<script language="JavaScript" type="text/javascript">
				document.location = "/webalizer/";
			</script>
		</pre>
	</body>
</html>
