<?php
session_start(); // Oturumu başlat
require_once 'db_connect.php'; // Veritabanı bağlantısını dahil et

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL Sorgusu: Kullanıcı adına göre kaydı çek
    $stmt = $pdo->prepare("SELECT id, username, password, role, name FROM kullanicilar WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Şifre doğrulama (Şimdilik düz metin kontrolü, daha sonra güvenli hale getirilebilir)
        // LÜTFEN BİR SONRAKİ ADIMDA BU ŞİFRE KONTROLÜNÜ GÜVENLİ HALE GETİRECEĞİZ.
        if ($password === '123456') { 

            // Başarılı giriş: Oturum değişkenlerini ayarla
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['name'] = $user['name']; 

            // Rol bazlı yönlendirme
            if ($user['role'] === 'admin') {
                header('Location: admin.php'); 
                exit;
            } else {
                header('Location: kullanici.php'); 
                exit;
            }
        } else {
            // Şifre hatalı
            $_SESSION['error'] = "Hata: Şifreniz yanlış.";
        }
    } else {
        // Kullanıcı bulunamadı
        $_SESSION['error'] = "Hata: Kullanıcı adı bulunamadı.";
    }
}

// Hata durumunda tekrar login sayfasına yönlendir
header('Location: login.html');
exit;
?>