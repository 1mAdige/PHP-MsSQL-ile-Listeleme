# PHP MsSQL ile Listeleme

## H4 Projenin Amacı

PHP&MsSQL (Microsft SQL) den database sunucu verilerini php ile yayınlamayı hedefliyor.

## H5 Gerekli Olan Şeyler

Local de test edecekseniz XAMPP veya benzeri bir program. Ve tabiki php-sql eklentileri.


Eklentileri [burada](https://download.microsoft.com/download/f/4/d/f4d95d48-74ae-4d72-a602-02145a5f29c8/SQLSRV510.ZIP) verdiğim linkten erişebilirsiniz.
Kullanmak için; 

...Dosyaları Çıkartın
...Dll dosyalarını php sürümüne göre "C:\xampp\php\ext\" dizinine kopyalayın
...Favori düzenleyiciniz ile "C:\xampp\php\" konumunda bulunan php.ini dosyasını açın.
...Uzantıları ekleyin:
```
extension=pdo_sqlsrv_74_ts_x64 
extension=sqlsrv_74_ts_x64
```
...Apache ve PHP'yi yeniden başlatın.


## H5 Önizleme

![Proje ile ilgili önizleme görüntüsü][./ss.jpg "GitHub"]
<img src="./assets/image_unsplash.jpg" alt="alt yazı" width="320">
