
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" name="Rajkumar Thadem 15971tr"/>
<title>HTML5 Registration and NewsLetter Form with WebSQL -15971tr - rajkumar thadem</title>
<!--CSS StyleSheet!-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="17707ma-hw3-cs557b.css" rel="stylesheet">
<!--CSS StyleSheet!-->
</head>
<body>
<div id="container">
<h1>HTML5 WEBSQL</h1>
<br>
<div id="form-area">

<div class="breakline">
</div>
<br>
<form>
<table>
<tr>
<td>Color*: </td>
<td><input class="form-control" name="fname" id="fname" type="color" required></td>
</tr>
<tr>
<td>Number*:</td>
<td><input class="form-control" name="lname" id="lname" type="number" required></td>
</tr>
</table>
<br><br>
</div>
<div align=center>
<br><br>
<input class="btn btn-primary" type="submit" value="Save" onclick="adduser();">
</div>
</form>
<br>
<br>
<div class="breakline"></div>
<br>
<br>
<div align="center" id="userlistholder">
     <h1>Your Registered User List: </h1><br>
    <table class="user" style="border: 1px solid white; " id="userlist"></table>
</div>
</body>
  <!--JavaScript!-->
<script src="15971tr.js"></script>
<!--JavaScript!-->
</html>
