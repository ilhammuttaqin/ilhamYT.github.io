<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="utama">
	  <div id="header">Content for  id "header" Goes Here</div>
      <div id="menu_kiri">
      
        <a href="index.php?id=beranda"><div class="menu">Beranda</div></a>
        <a href="index.php?id=myprofil"><div class="menu">My Profile</div></a>
        <a href="index.php?id=guestbook"><div class="menu">Guest Book</div></a>
      	
      </div>
      <div id="konten"> <?php include "isi.php"; ?></div>
      <div id="footer">Content for  id "footer" Goes Here</div>
		
	</div>
</body>
</html>