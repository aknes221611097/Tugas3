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
        
            $url = 'http://www.omdbapi.com/?apikey=e07d6b17&s="' .$judul.'"';

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

  <h3>BOX DRAMA</h3>
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
<div class="container-new" style="background-image:url('Dilan1990.jpg');">
<div class="container">
<div class="row mt-3 text-center">
  <div class="col" style="color :white;">
<h1>TOP DRAMA</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="Matt & Mou.webp" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Matt&Mou</h5>
        <p class="card-text">Mengisahkan tentang sebuah sahabat yang sudah berteman sejak kecil.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Dilan1990.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Dilan1990</h5>
        <p class="card-text">Bercerita tentang asmara di antara dua anak muda.Dilan 1990 merupakan film pertama yang hadir untuk memperkenalkan asmara di antara dua sejoli ini kepada masyarakat indonesia</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Mariposa.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Mariposa</h5>
        <p class="card-text">Mengisahkan seorang gadis cantik bernama Natasha Kay Loovi atau kerap di sapa Acha yang memperjuangkan cinta terhadapseorang laki-laki berhati beku dan super dingin bagaikan es dengan  kehidupannya yang serba monoton, bernama Iqbal. Mereka berdua adalah siswa yang sangat pintar di sekolah.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Kartu Pos Wini.webp" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Kartu Pos Wini</h5>
        <p class="card-text">Berkisah tentang perjuangan penyintas kanker.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="keluarga cemara.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Keluarga Cemara</h5>
        <p class="card-text">Mengisahkan kehidupan sehari-hari Cemara/Ara bersama Abah, Ema, dan kakaknya, Eusi, dan adiknya Agil.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Kukira Kau Rumah.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Kukira Kau Rumah</h5>
        <p class="card-text">Mengisahkan seorang pemuda yang kesepian, yang dapat bentuk rasa "kasih" dari kedua orang tuanya. Kekosongannya ia isi dengan menciptakan lagu-lagu bagus yang tak pernah di dengar siapapun. </p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
