<?php

$dogruEmail = "ziyaretci@example.com";
$dogruSifre = "ziyaretci123";

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';


if (empty($email) || empty($password)) {
    header("refresh:2; url=giris-yap.html");
    echo "Lütfen tüm alanları doldurun.";
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("refresh:2; url=giris-yap.html");
    echo "Geçerli bir e-posta adresi giriniz.";
    exit();
}

if ($email === $dogruEmail && $password === $dogruSifre) {
    $kullaniciAdi = strstr($email, '@', true);
    header("refresh:2; url=index.html");
    echo "Hoşgeldiniz $kullaniciAdi";
    exit();
} else {
    header("refresh:2; url=giris-yap.html");
    echo "Kullanıcı adı veya şifre hatalı.";
    exit();
}
?>
