<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=202bed7d&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>HMM</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="foto.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Tomb Raider (2018)</h5>
        <p class="card-text">Tujuh tahun setelah peristiwa menghilangnya sang ayah, Lara Croft yang kini telah berusia 21 tahun menolak untuk menjalankan kerajaan bisnis keluarganya.

Lara lebih memilih untuk bekerja sebagai kurir di London dan mengambil kuliah di sana. Namun kemudian sebuah peristiwa membuatnya kembali tertarik untuk menyelidiki kasus menghilang ayahnya tersebut.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="The-Wonder-Woman.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Wonder Woman (2018)</h5>
        <p class="card-text">Wonder Woman menceritakan sosok Diana, putri dari Amazons yang dilatih untuk menjadi pejuang tak terkalahkan. Diana meninggalkan tanah kelahirannya ketika seorang pilot Amerika yang terdampar di sana yang memberitahu bahwa sedang ada konflik besar di luar sana.

Diana mencoba untuk menghentikan ancaman itu sebelum mereka menghampiri tanah kelahirannya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="rampage.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Rampage (2018)</h5>
        <p class="card-text"> Seorang ahli Primatologist Davis Okoye yang mempunyai hubungan dan ikatan yang kuat dengan seekor gorilla bernama George. Gorilla tersebut kemudian terlibat dalam sebuah eksperimen genetic yang cukup berbahaya.

George kemudian bertransformasi dari makhluk ramah dan menyenangkan menjadi seekor gorilla raksasa yang ganas. Permasalahan semakin panas ketika terungkap bahwa seekor binatang buas dengan hasil eksperimen yang sama juga ikut terlepas.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="alita1.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Alita: Battle Angel (2019)</h5>
        <p class="card-text">Film berlatar cyberpunk ini mengisahkan tentang Alita, cyborg yang lupa siapa dia sebenarnya, ditemukan oleh Dr. Ido dalam timbunan sampah logam.Dr Ido sendiri adalah seorang ilmuan dan juga ahli dalam perakitan mekanisme tubuh manusia.

Cerita dalam film ini berlatar pada abad ke 26 atau 300 tahun setelah keruntuhan dunia akibat perang besar.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="2020_01_film.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">1917 (2019)</h5>
        <p class="card-text">Film ini menceritakan dua prajurit tempur Britania Raya yang diberikan misi berbahaya untuk menyelamatkan 1600 orang selama Perang Dunia I berlangsung.

Medan perang yang menegangkan akan menjadi latar belakang yang berkesan, serta dialog dan aksi per aksinya. Kolaborasi kerja antara Sam Mendes dan Roger dinilai istimewa dalam menggarap film drama epik ini</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar7.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title"> Rambo (2019)</h5>
        <p class="card-text">Rambo melanjutkan apa yang terjadi pada akhir kisah Rambo 4, John Rambo saat ini sudah memasuki masa tuanya dengan tenang, sambil merawat ladang dan peternakan bersama dengan Maria dan anak angkat mereka, Gabrielle.

Semua hal indah tersebut berubah drastis ketika Gabrielle pergi sendirian ke Meksiko demi bertemu dengan ayah kandungnya. Rambo yang khawatir dengan keselamatannya di Meksiko, mencoba untuk menyusulnya.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
