# İnternet Programlama ve Ağ Protokolleri Özeti

## Bölüm 1: Genel İnternet Programlama
1. **İnternetin Temel Prensibi:**  
   İnternet, dünya genelindeki cihazların IP protokolü üzerinden veri alışverişi yaptığı bir ağdır. Tarayıcı DNS ile alan adını IP’ye çevirir, sunucuya istek gönderir ve TCP/IP ile veri alışverişi yapılır.

2. **IP Adresi ve DNS:**  
   IP, cihazın ağdaki kimliğidir. DNS, alan adlarını IP adreslerine çevirerek erişimi kolaylaştırır.

3. **TCP vs UDP:**  
   TCP güvenilir, sıralı ve hata kontrolü sağlar. UDP bağlantısız, daha hızlı ancak güvensizdir.

4. **HTTP:**  
   Uygulama katmanında çalışır, istemci-sunucu tabanlıdır, stateless (durumsuz) yapıdadır.

5. **Web Tarayıcı Çalışma Süreci:**  
   DNS çözümü → HTTP isteği → Sunucudan HTML, CSS, JS → Tarayıcı DOM oluşturur → Sayfa render edilir.

6. **Frontend vs Backend:**  
   Frontend kullanıcı arayüzüdür (HTML, CSS, JS). Backend veri tabanı ve sunucu işlemlerini yürütür (ör. Python, Node.js).

7. **JSON vs XML:**  
   JSON sade, hızlı ve okunabilir; XML etiket tabanlı, daha karmaşık yapıdadır.

8. **RESTful API:**  
   HTTP üzerinden GET, POST, PUT, DELETE yöntemleriyle kaynaklara erişim sağlar.

9. **HTTPS Avantajları:**  
   SSL/TLS ile veriyi şifreler, güvenliği artırır, kullanıcı güvenini sağlar.

10. **Cookies (Çerezler):**  
   Web sitelerinin kullanıcı verilerini (oturum, tercih, sepet) sakladığı küçük dosyalardır.

---

## Bölüm 2: HTML ve CSS
 
   ```html 
   &lt;!DOCTYPE html&gt;
   &lt;html&gt;
   &lt;head&gt;
   &lt;title&gt;Örnek Sayfa&lt;/title&gt;
   &lt;/head&gt;
   &lt;body&gt;
   &lt;h1&gt;Merhaba Dünya!&lt;/h1&gt;
   &lt;p&gt;Bu bir paragraf.&lt;/p&gt;
   &lt;a href=&quot;https://www.google.com&quot;&gt;Google&#39;a git&lt;/a&gt;
   &lt;/body&gt;
   &lt;/html&gt;
   ```

   “Merhaba Dünya!”, ardından bir paragraf ve Google bağlantısı gösterilir.

2. `<div>` vs `<span>`:  
   `<div>` blok düzeyinde, `<span>` satır içi elemandır.

3. **Form Elemanları:**  
   `<input>`, `<textarea>`, `<select>`, `<button>`, `<label>`.

4. **CSS ID vs Class:**  
   `#id` tek elemana uygulanır, `.class` birden fazla elemana uygulanabilir.

5. **CSS Kod Uygulaması:**  
   Tüm `<p>` etiketleri kırmızı renk ve 16px yazı boyutu alır.

6. **HTML5 Yeni Etiketler:**  
   `<header>`, `<article>`, `<footer>` – yapıyı semantik hale getirir.

7. **Flexbox ile Ortalama:**  
   ```css
   .container {
     display: flex;
     justify-content: center;
     align-items: center;
     height: 100vh;
   }
   ```

8. **Responsive Tasarım:**  
   ```css
   @media (max-width: 600px) {
     body { font-size: 14px; }
   }
   ```

9. **Tablo Hücre Birleştirme:**  
   `rowspan` satır, `colspan` sütun birleştirir.

10. **Hover Efekti:**  
      ```css
      button:hover {
      background-color: blue;
      color: white;
      }
      ```

---

## Bölüm 3: Ağ Protokolleri
1. **HTTP vs HTTPS:** HTTPS veriyi SSL/TLS ile şifreler, güvenlidir.  
2. **FTP:** Dosya aktarım protokolüdür.  
3. **SMTP vs POP3:** SMTP e-posta gönderir, POP3 alır.  
4. **DNS:** Alan adlarını IP’ye çevirir.  
5. **DHCP:** Cihazlara otomatik IP adresi atar.  
6. **HTTP 404 / 500:** 404 kaynak yok, 500 sunucu hatası.  
7. **Telnet vs SSH:** SSH şifreli, Telnet şifresiz bağlantıdır.  
8. **VPN:** Şifreli ağ tüneli oluşturarak gizlilik sağlar.  
9. **WebSockets:** Gerçek zamanlı, çift yönlü iletişim sağlar.  
10. **CDN:** İçeriği kullanıcıya en yakın sunucudan sunarak hızı artırır.
