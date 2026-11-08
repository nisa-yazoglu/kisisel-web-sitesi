# Kişisel Web Sitesi

Birinci sınıfta Web Teknolojileri dersi için yaptığım kişisel web sitesi. Kendimi ve memleketim Bayburt'u tanıttığım, uzay temalı bir site. Hazır tema kullanmadan HTML, CSS, JavaScript ve Bootstrap ile yazdım; iletişim formunda Vue.js, giriş ve form sonucu sayfalarında PHP kullandım.

## Sayfalar

- **Ana sayfa:** Gezegenler arasında yatay geçişle diğer sayfalara gidiliyor.
- **Hakkımda:** Hobilerim, sevdiğim filmler ve kitaplar. Özgeçmiş bir pencere içinde açılıyor.
- **İlgi alanlarım:** NASA'nın API'sinden günün uzay fotoğrafını ve açıklamasını çekiyor.
- **Memleketim:** Bayburt ve Baksı Müzesi hakkında bilgiler, fotoğraf kaydırıcısı.
- **Mirasımız:** Bayburt'un geleneksel kıyafeti ehram.
- **İletişim:** Form alanları hem düz JavaScript hem Vue ile kontrol ediliyor, gönderilen bilgiler PHP ile ayrı bir sayfada gösteriliyor.
- **Giriş:** PHP ile basit bir kullanıcı adı ve şifre kontrolü.

## Çalıştırmak için

Giriş ve iletişim sayfaları PHP gerektirdiği için siteyi bir PHP sunucusunda açmak gerekiyor. PHP kuruluysa proje klasöründe:

```
php -S localhost:8000
```

Sonra tarayıcıda `http://localhost:8000` adresini aç. XAMPP kullanıyorsan klasörü `htdocs` içine koyman da yeterli.

Giriş sayfasını denemek için: `ziyaretci@example.com` / `ziyaretci123`
