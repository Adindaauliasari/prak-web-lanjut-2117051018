<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
    <style>
        body {
            background-color: 	#FFB6C1; 
            font-family: Arial, sans-serif;
        }
    
        .profile-card {
            max-width: 200px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: #FFFACD; /* Warna latar belakang kartu profil */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan kartu profil */
            border-radius: 500px; /* Sudut bulat kartu profil */
            padding: 30px;
            text-align: center;
        }

        .img {
    background-image: url(/profile/IMG/poto.jpg);
    filter: brightness(0.8);
    background-color: #454846;
    background-size: cover;
    border-radius: 100px;
    width: 150px;
    height: 150px;
    margin: 20px auto;
}

        .profile-picture {
            background-image: url(/profile/IMG/poto.jpg);
            width: 150px;
            height: 150px;
            background-color: #00FFFF; /* Warna latar belakang foto profil */
            border-radius: 50%; /* Untuk membuatnya menjadi lingkaran */
            margin: 0 auto;
            margin-bottom: 20px;
            line-height: 150px;
            font-size: 48px; /* Ukuran teks di dalam lingkaran */
            color: #555; /* Warna teks di dalam lingkaran */
        }

        .profile-info {
            font-size: 18px;
            color: #333; /* Warna teks informasi */
            margin-bottom: 30px;
            background-color:#BDB76B;
        }

        .profile-info span {
            font-weight: bold;
            color: #555; /* Warna teks informasi tambahan */
        }
    </style>
</head>
<body>
  
    <div class="profile-card">
        <div class="img">
            <i class="fas fa-user"></i> <!-- Gunakan ikon profil Font Awesome di sini -->
        </div>
        <div class="profile-info">
            <span>Nama:</span> <?= $nama ?>
        </div>
        <div class="profile-info">
            <span>Kelas:</span> <?= $kelas ?>
        </div>
        <div class="profile-info">
            <span>NPM:</span> <?= $npm ?>
        </div>
    </div>
</body>
</html>