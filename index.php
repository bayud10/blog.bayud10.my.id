<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Project UTS - BayuD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" 
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" 
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" 
  integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" 
  crossorigin="anonymous"></script>
  <style type="text/css">
   .masthead.segment {
      min-height: 700px;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.2em;
      font-weight: normal;
    }
    .footer.segment {
      padding: 5em 0em;
    }
  </style>
</head>


<body>
<?php
include 'functions.php';
?>
    <!-- MENU DISINI GAN -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">
<div class="ui inverted segment">
  <div class="ui inverted secondary pointing menu">
    <a class="active item">
      Home
    </a>
    <a class="item" href="/blogs.php">
      Blogs
    </a>
    <a class="item" href="/read.php">
      Contributors
    </a>
  <div class="right menu">
    <div class="ui buttons">
        <button class="ui blue button" onclick="window.location.href = '/login.php';">Login</button>
        <div class="or"></div>
        <button class="ui positive button" onclick="window.location.href = '/register.php';">Register</button>
        </div>
    </div>
    </div>
</div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        Virus Korona
      </h1>
      <h2>Penyakit menular yang disebabkan oleh virus jenis baru yang belum pernah teridentifikasi pada manusia.</h2>
      <div class="ui huge primary button" onclick="window.location.href ='/blogs.php';">Baca lebih<i class="right arrow icon"></i></div>
        </div>
    </div>
</div>

<h4 class="ui horizontal divider header">
  <i class="bar chart icon"></i>
  Penyebaran di Riau
</h4>
<br>
<center>
    <table class="ui definition table" style="width:600px">
        <tbody>
            <tr>
             <td class="two wide column">Positif</td>
            <td>40</td>
         </tr>
         <tr>
              <td>Sembuh</td>
           <td>15</td>
           </tr>
          <tr>
           <td>Meninggal</td>
            <td>4</td>
           </tr>
          </tbody>
        </table>
        <p>Data diambil pada : Rabu, 29 April 2020 11:18</p>
    <br>
<h4 class="ui horizontal divider header">
  <i class="question circle icon"></i>
  Frequently Asked Question
</h4>    
<br>
<div class="ui styled accordion">
  <div class="title">
    <i class="dropdown icon"></i>
    Apa saja gejala COVID-19?
  </div>
  <div class="content">
  <ul class="ui list">
  <li>Demam suhu tinggi</li>
  <li>Batuk Kering</li>
  <li>Pilek</li>
  <li>Nyeri tenggorokan/menelan</li>
  <li>Sesak nafas</li>
</ul><br>
<p>Jika ada gejala di atas DAN ada riwayat perjalanan dari negara terjangkit COVID-19 atau Anda terpapar dengan pasien Positif COVID-19, hubungi nomor darurat tanggap COVID-19 Dinas Kesehatan terdekat.</p>
  </div>
  <div class="title">
    <i class="dropdown icon"></i>
    Apakah COVID-19 hanya menyerang orang yang sudah tua? Ataukah anak-anak juga dapat terjangkit?
  </div>
  <div class="content">
    <p>Semua orang dari berbagai usia, berisiko terinfeksi coronavirus. Pada lansia dan orang-orang dengan kondisi medis yang sudah ada sebelumnya (seperti asma, diabetes, penyakit jantung) lebih cenderung mengalami kondisi yang parah atau komplikasi yang berat.<br><br>
Semua orang harus mengikuti langkah-langkah sederhana untuk menghentikan virus seperti penyebaran virus corona, misalnya dengan sering mencuci tangan dengan sabun dan air.</p>
  </div>
  <div class="title">
    <i class="dropdown icon"></i>
    Apakah saya harus menjauhi transportasi umum, acara kumpul-kumpul, festival, atau tempat keramaian lainnya?
  </div>
  <div class="content">
    <p>Jika Anda sehat, Anda tidak perlu menjauhi tempat umum atau kerumunan/keramaian. Namun jika Anda sakit, Anda disarankan untuk istirahat di rumah. Tetapi, jika anda diharuskan/terpaksa untuk keluar rumah atau berada dalam kerumunan, gunakan masker dengan baik dan benar serta mencuci tangan dengan sabun dan air mengalir setelah beraktivitas di luar.</p>
  </div>
</div><br>
<h4 class="ui horizontal divider header">
  <i class="copy outline icon"></i>
  Site Sourcecode
</h4><br>
    <div class="ui labeled button" tabindex="0">
  <div class="ui basic blue button"  onclick="window.location.href ='https://github.com/bayud10';">
    <i class="fork icon"></i> Github
  </div>
</div>
</center>
<br>
<div class="ui hidden divider"></div>
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="seven wide column">
          <h4 class="ui inverted header">Project UTS</h4>
          <p>© Bayu Dwinata Putra, 2020</p>
        </div>
      </div>
    </div>
  </div>





<script type="text/javascript">

$('.ui.accordion')
  .accordion()
;

</script>
</body>

</html>
