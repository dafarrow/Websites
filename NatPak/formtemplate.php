<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>jQuery Ajax Forms | Trevor Davis</title>
<link href="screen.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

<div id="container">
	<form action="/scripts/jqueryajaxform/" method="post" id="sendEmail">
		<h1>Send An Email</h1>
		<p class="alert">Please fill out a seperate quote form for each machine</p>
		<ol class="forms">
			<li><label for="emailTo">To</label><input type="text" name="emailTo" id="emailTo" value="" /></li>
			<li><label for="emailFrom">From</label><input type="text" name="emailFrom" id="emailFrom" value="" /></li>
			<li><label for="subject">Subject</label><input type="text" name="subject" id="subject" value="" /></li>
			<li><label for="message">Message</label><textarea name="message" id="message"></textarea></li>
			<li class="buttons"><button type="submit" id="submit">Send Email &raquo;</button><input type="hidden" name="submitted" id="submitted" value="true" /></li>
		</ol>
	</form>
	<div class="clearing"></div>
</div>

</body>
</html>