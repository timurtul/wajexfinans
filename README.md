# Merhaba 👋

Wajex Finans projesine hoş geldiniz. Bu projede ortalama 5 dakikada bir yenilenen döviz web-sitesi yaptım.
Bu projenin 2 kısmı var, biri open-source kısmı bunu isteyen herkes kullanabilecek [ikinci kısmı](https://finans.wajex.net) ise API'den çektiğim kısım.
Hatalar veya geliştirme önerileri için lütfen [issue atın.](https://github.com/timurtul/wajexfinans/issues)



# Open Source 

PHP ile Türkiye Cumhuriyeti Merkez Bankası'ndan verileri alıp, Bootstrap kullanarak yaptığım ufak bir web sitesine aktarıyor.
USD, AUD, DKK, EUR, GBP, CHF, SEK, CAD, KWD, NOK, SAR, JPY kurlarının alış ve satış fiyatlarına direk erişebiliyorsunuz.
Open source hala geliştiriliyor ve devamlı güncellenecektir.

## Kullanımı

### TCMB XML Dosyasını Çekmek

TCMB'nın bize sunduğu xml kur sayfasını çekiyoruz.

```php
$doviz = simplexml_load_file('https://www.tcmb.gov.tr/kurlar/today.xml');
```

### Kurları Tanımlamak

Her bir kur için Alış ve Satış değişkeni tanımlıyoruz, TCMB xml dosyasında istediğiniz kuru seçip yukarıdan aşağıya doğru sırasını index numarası olarak bulmanız lazım ve Currency[] kısmına sayısını giriyoruz. 
Mesela Danimarka Kronu'nu çekmek istiyorsunuz ve 3. sırada, Currency[2] oluyor çünkü index numaraları 0'dan başlar. 

```php
$usd_alis = $doviz ->Currency[0]->BanknoteBuying;
$usd_satis = $doviz ->Currency[0]->BanknoteSelling;
$euro_alis = $doviz ->Currency[3]->BanknoteBuying;
$euro_satis = $doviz ->Currency[3]->BanknoteSelling;
$sterlin_alis = $doviz ->Currency[4]->BanknoteBuying;
$sterlin_satis = $doviz ->Currency[4]->BanknoteSelling;
```
### Forex Piyasa'sının Kurlarını Tanımlamak

TCMB bize Banknote ve Forex olarak iki tane parametre sunuyor ve istediğinizi alabilirsiniz. Genelde Banknote kullanıldığı için projemde ben Banknote kullandım.
Forex piyasasından gelen verileri kullanmak istiyorsanız BanknoteBuying / BanknoteSelling kısımlarını ForexBuying / ForexSelling olarak değiştirmeniz gerekiyor.

```php
$usd_alis_forex = $doviz ->Currency[0]->ForexBuying;
$usd_satis_forex = $doviz ->Currency[0]->ForexSelling;
```


### Fiyatları Yazdıralım

Bootstrap ile kullandığımız kartlara Alış ve Satış fiyatlarını yazdırıyoruz.

```html
<div class="card text-white bg-success mb-3" style="">
  <div class="card-header">Euro €</div>
     <div class="card-body">
    <h5 class="card-title"><?php echo 'Euro Alış: '.$euro_alis.'<br>'?></h5>
    <h5 class="card-title"><?php echo 'Euro Satış: '.$euro_satis.'<br>'?></h5>
     </div>

</div>
</div>
```

##### Konfigürasyon


| Özellik    | Açıklama                                                                                                                                      |
|------------|-----------------------------------------------------------------------------------------------------------------------------------------------|
| Card       | [TCMB](https://www.tcmb.gov.tr/wps/wcm/connect/tr/tcmb+tr/main+page+site+area/bugun) üstünden çekilen verileri istediğiniz karta yansıtabilirsiniz  |
| Width      | px, em , vh, % vb. (min-width: 250px)                                                                                                         |
| Border-radius       | px, em , vh, % vb. (border-radius: 20px)                                                                                             |

### Front-End Tasarımı

Projenin tasarımını devamlı güncellediğim için projede **frontend** isimli klasörün içinde **index.html** diye bir html dosyası açtım ve html tasarımını PHP içermeden direk oraya yüklüyorum.
Bunun sebebi ise devamlı back-end yönünde bir geliştirme yapmadığımdan front-end yönünde yaptığımda sizin kolayca güncellemeyi görüp fark etmeniz. 
O yüzden kurcek.php 'nin front-end tasarımından önce **frontend/index.html* 'in tasarımı güncellenecektir. Oraya bakmanızda fayda olacaktır.


# Wajex Finans

[Buraya tıklayarak](https://finans.wajex.net) Wajex Finans'a ulaşabilirsiniz, buranın Open Source projemden başlıca farkı 5 dakikada bir API üstünden çekiyor
ve Open Source projesine göre daha fazla kur içeriyor. Ayriyetten grafiklere erişebiliyorsunuz ve daha şık ve kullanılabilir bir web-siteye erişiyorsunuz.


Proje geliştirilmeye devam ediyor, belki ilerleyen zamanda Wajex Finans kısmı da herkese açık Open-Source olarak gelebilir.
