# Merhaba 👋

Wajex Finans projesine hoş geldiniz. Bu projede ortalama 5 dakikada bir yenilenen döviz web-sitesi yaptım.
Bu projenin 2 kısmı var, biri open-source kısmı bunu isteyen herkes kullanabilecek [ikinci kısmı](https://finans.wajex.net) ise API'den çektiğim kısım.



# Open Source 
![](https://img.shields.io/badge/Code-PHP-informational?style=flat&logo=php&logoColor=white&color=blueviolet)
PHP ile Türkiye Cumhuriyeti Merkez Bankası'ndan verileri alıp, Bootstrap kullanarak yaptığım ufak bir web sitesine aktarıyor.
USD, AUD, DKK, EUR, GBP, CHF, SEK, CAD, KWD, NOK, SAR, JPY kurlarının alış ve satış fiyatlarına direk erişebiliyorsunuz.
Open source hala geliştiriliyor ve devamlı güncellenecektir.

## Kurulum

###TCMB XML Dosyasını Çekmek

TCMB'nın bize sunduğu xml kur sayfasını çekiyoruz.

'''
$doviz = simplexml_load_file('https://www.tcmb.gov.tr/kurlar/today.xml');
'''

### Kurları Tanımlamak

Her bir kur için Alış ve Satış değişkeni tanımlıyoruz, TCMB xml dosyasında istediğiniz kuru seçip yukarıdan aşağıya doğru sırasını index numarası olarak bulmanız lazım ve Currency[] kısmına sayısını giriyoruz. 
Mesela Danimarka Kronu'nu çekmek istiyorsunuz ve 3. sırada, Currency[2] oluyor çünkü index numaraları 0'dan başlar. 

```
$usd_alis = $doviz ->Currency[0]->BanknoteBuying;
$usd_satis = $doviz ->Currency[0]->BanknoteSelling;
$euro_alis = $doviz ->Currency[3]->BanknoteBuying;
$euro_satis = $doviz ->Currency[3]->BanknoteSelling;
$sterlin_alis = $doviz ->Currency[4]->BanknoteBuying;
$sterlin_satis = $doviz ->Currency[4]->BanknoteSelling;
```

### Fiyatları Yazdıralım

Bootstrap ile kullandığımız kartlara Alış ve Satış fiyatlarını yazdırıyoruz.

```
<div class="card text-white bg-success mb-3" style="">
  <div class="card-header">Euro €</div>
     <div class="card-body">
    <h5 class="card-title"><?php echo 'Euro Alış: '.$euro_alis.'<br>'?></h5>
    <h5 class="card-title"><?php echo 'Euro Satış: '.$euro_satis.'<br>'?></h5>
     </div>

</div>
</div>
```


# Wajex Finans

[Buraya tıklayarak](https://finans.wajex.net) Wajex Finans'a ulaşabilirsiniz, buranın Open Source projemden başlıca farkı 5 dakikada bir API üstünden çekiyor
ve Open Source projesine göre daha fazla kur içeriyor. Ayriyetten grafiklere erişebiliyorsunuz ve daha şık ve kullanılabilir bir web-siteye erişiyorsunuz.


Herhangi bir sorun olursa issue olarak atarsanız sevinirim.
Proje geliştirilmeye devam ediyor, belki ilerleyen zamanda Wajex Finans kısmı da herkese açık Open-Source olarak gelebilir.
