<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

<div id="warp">
  <form  action="" id="formu">
      <div class="admin">
            <div class="rota">
                <h1>ADMIN</h1>
                <input id="username" type="text" name="name" value="" placeholder="Username"/><br />
                <input id="password" type="password" name="pass" value="" placeholder="Password"/>
            </div>
        </div>
        <div class="cms">
            <div class="roti">
                <h1>CMS</h1>
                <button id="valid" type="button" src="/admin/index.php" name="valid">Validar</button><br />
      </div>
        </div>
    </form>
</div>

</body>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  $("#valid").click(function() {
  $(".admin").addClass("up").delay( 100 ).fadeOut( 100 );
  $(".cms").addClass("down").delay( 150 ).fadeOut( 100 );
});
</script>
</html>