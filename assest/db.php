<?php
// Burada SQL Server Database bağlantısını sağlıyoruz.
// [ServerAdı], [DatabaseAdı] kısımlarını [] bu işaret olmadan yazmanız gerekiyor.
$db = new PDO("sqlsrv:Server=[ServerAdı];Database=[DatabaseAdı]", "KullanıcıAdı", "Şifre");

?>
