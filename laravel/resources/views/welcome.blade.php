<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Sayfası</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        input { padding: 10px; margin: 10px; width: 200px; }
        button { padding: 10px 20px; background: #38c172; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #2d995b; }
        .info { font-size: 14px; color: #555; margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Giriş Yap</h1>
    <p class="info">İstediğiniz kullanıcı adı ve şifreyi girebilirsiniz 😊</p> <!-- Bu satır eklendi -->
    <form action="/about">
        <input type="text" placeholder="Kullanıcı Adı" required><br>
        <input type="password" placeholder="Şifre" required><br>
        <button type="submit">Giriş</button>
    </form>
</body>
</html>

