<!DOCTYPE html>
<html lang="tr-TR">
<head>
	<title>PHP&MsSQL ile Basit Listeleme Örneği</title>
	<!-- Bootstrap ve Font Awesome bağlantılarını yapıyoruz. -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
	<link rel="stylesheet" href="assest/custom.css">
</head>
<body>


<?php 
	//!-- Bu kısımda database bağlantısını include ediyoruz. 
	include('assest/db.php');
	//!-- Sonrasında sql de ki veri çekeceğimiz tabloyu çağırıyoruz. 
	//!-- Buradaki $main_data yı sonrasında kullan
	$main_data = "select * from [TabloAdınızıGirin]";
	//!-- Çekeceğimiz verileri burada ben örnek olsun diye bir koşula bağladım. 
	//!-- Örn: Matematik dersindeki öğrencileri çekeceğiz.
	$data_1 = $db -> query("$main_data where BOLUM='Matematik'")->fetchAll();
	$data_2 = $db -> query("$main_data where BOLUM='Türkçe'")->fetchAll();
	$data_3 = $db -> query("$main_data where BOLUM='Sosyal Bilgiler'")->fetchAll();
	$data_4 = $db -> query("$main_data where BOLUM='Coğrafya'")->fetchAll();
	$data_5 = $db -> query("$main_data where BOLUM='Tarih'")->fetchAll();
	$data_6 = $db -> query("$main_data where BOLUM='Atatürk İlkeleri ve İnkılap Tarihi'")->fetchAll();
?>



<div class="container p-3 text-white">
	<img class="text-center" style="width: 300px;" src="elb/logo_WH.png" class="d-inline-block align-top" alt="">
  <span class="p-6" style="font-size: 35px;">PHP&MsSQL ile Basit Listeleme Örneği</span>
</div>


	
<!-- Container belirleyip verilerimizi çekmeye başlayalım. -->
<div class="container mt-4">
  <div class="row">
    <div class="col-sm-4 col-sm-push-4">
      <div class="content">
		<table id="fth_elb" class="table table-condensed table-hover table-striped table-responsive table-light">
		<thead style=" background-color: #e9ecef;"> 
		<tr><td class="test">Matematik</td></tr>
		<tbody id="costumer_table">
			<!-- Bu kısımda bir forach kullanacağız. Kullanalım ki listeleme yapabilelim. -->
				<?php
				//!-- $data_1 deki yani Matematik dersinden ödev alan öğrenci isimlerini listeleyecek. 
				foreach ($data_1 as $item) {
				?>
				<tr>
						<!-- Tablo içinde isim ve soyisim aynı anda beraber kullanabilmek için (." ".) bunu kullanmamız gerekiyor. -->
						<td width="10%"><b><?php echo $item["AD"]." ".$item["SOYAD"]; ?></b></td>
				</tr>
				<?php
				}
				?>
		</tbody>
		</thead>
		</table>			
      </div>
    </div>

    <div class="col-sm-4 col-sm-pull-4">
      <div class="content">
		<!-- Sonrada diğer dersleri sırayla tanımlıyoruz. -->	
		<table id="fth_elb" class="table table-condensed table-hover table-striped table-responsive table-light">
		<thead style=" background-color: #e9ecef;  "> 
		<tr><td class="test">Türkçe</td></tr>
		<tbody id="costumer_table">
				<?php
				foreach ($data_2 as $item) {
				?>
				<tr>
						<td width="10%"><b><?php echo $item["AD"]." ".$item["SOYAD"]; ?></b></td>
				</tr>
				<?php
				}
				?>
		</tbody>
		</thead>
		</table>		
      </div>
    </div>

	<div class="col-sm-4 col-sm-push-4">
      <div class="content">
		<table id="fth_elb" class="table table-condensed table-hover table-striped table-responsive table-light">
		<thead style=" background-color: #e9ecef;  ">
		<tr><td class="test">Sosyal Bilgiler</td></tr>	 
		<tbody id="costumer_table">
				<?php
				foreach ($data_3 as $item) {
				?>
				<tr>
						<td width="10%"><b><?php echo $item["AD"]." ".$item["SOYAD"]; ?></b></td>
				</tr>
				<?php
				}
				?>
		</tbody>
		</thead>
		</table>		
      </div>
    </div>
	
	<div class="col-sm-4 col-sm-push-4">
      <div class="content">
		<table id="fth_elb" class="table table-condensed table-hover table-striped table-responsive table-light">
		<thead style=" background-color: #e9ecef;  "> 
		<tr><td class="test">Coğrafya</td></tr>	 
		<tbody id="costumer_table">
				<?php
				foreach ($data_4 as $item) {
				?>
				<tr>
						<td width="10%"><b><?php echo $item["AD"]." ".$item["SOYAD"]; ?></b></td>
				</tr>
				<?php
				}
				?>
		</tbody>
		</thead>
		</table>			
      </div>
    </div>	
	

	<div class="col-sm-4 col-sm-push-4">
      <div class="content">	
		<table id="fth_elb" class="table table-condensed table-hover table-striped table-responsive table-light">
		<thead style=" background-color: #e9ecef;  "> 
		<tr><td class="test">Tarih</td></tr>	 
		<tbody id="costumer_table">
				<?php
				foreach ($data_5 as $item) {
				?>
				<tr>
						<td width="10%"><b><?php echo $item["AD"]." ".$item["SOYAD"]; ?></b></td>
				</tr>
				<?php
				}
				?>
		</tbody>
		</thead>
		</table>		
      </div>
    </div>	
	

	<div class="col-sm-4 col-sm-push-4">
      <div class="content">
		<table id="fth_elb" class="table table-condensed table-hover table-striped table-responsive table-light">
		<thead style=" background-color: #e9ecef;  "> 
		<tr><td class="test">Atatürk İlkeleri ve İnkılap Tarihi</td></tr>	 
		<tbody id="costumer_table">
				<?php
				foreach ($data_6 as $item) {
				?>
				<tr>
						<td width="10%"><b><?php echo $item["AD"]." ".$item["SOYAD"]; ?></b></td>
				</tr>
				<?php
				}
				?>
		</tbody>
		</thead>
		</table>	
      </div>
    </div>		
	
  </div>
</div>


</body>

<!-- © 2023, ImAdige | Tüm hakları saklıdır. -->

