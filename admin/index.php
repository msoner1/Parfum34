
<!DOCTYPE html>
<html>
<head>
<meta NAME="ROBOTS" CONTENT="noindex, nofollow" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>parfum34 Yönetim Paneli</title>
<link href="content/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="kontrol.php" method="POST">
<div id="site">
<div id="sitebosluk"></div>
<div id="ortainput">
<div id="kullaniciadi"><label>Kullanıcı Adı</label>
<div id="kullaniciadiinput"><input name="kullaniciadi" value="kullanici adi" autocomplete="no" size="20px" type="text" /></div>
</div>

<div id="sifre">
<label>Şifre</label>
<div id="sifreinput"><input type="password" placeholder="şifre" name="sifre" size="20px" /></div>
</div>
<div id="alt">
    <?php
     if(isset($_GET['hata'])) { ?>
         <div id="hata"><a>Hata :</a> lütfen kullanıcı adı ve şifrenizi kontol edin</div>    <?php
     } ?>
<div id="girisyap"><input type="submit" /></div>
</div>
</div>
</div>
</form>
</body>
</html>
