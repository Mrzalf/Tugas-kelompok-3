<?php
  include ('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Berita</title>
  <link rel="stylesheet" type="text/css" href="berita.css">
</head>
<body>
  <div class="berita">
    <table>
      <tr>
        <td colspan="2" id="head"><h2>Berita</h2></td>
      </tr>
      <tr>
        <td width="50%">
          <center><img src="https://www.pekanbaru.go.id/berkas_file/news/26042022/39324-news-dinkes-imbau-masyara.jpg" width="200px" height="150px" alt=""></center></td>
        <td>
          <center><img src="https://cms.sehatq.com/public/img/article_img/mengenal-ayurveda-pengobatan-tradsional-tertua-di-dunia-dari-india-1584687866.jpg" width="200px" height="150px" alt=""></center></td>
      </tr>
      <tr>
        <td width="50%">
          <b><a href="https://megapolitan.kompas.com/read/2022/04/21/17150501/vaksinasi-booster-jadi-syarat-mudik-antusiasme-warga-jaksel-meningkat-dua">Vaksinasi Booster Diserbu Warga Yang Hendak Mudik</a></b>
            <p>Aturan pemerintah yang menetapkan vaksinasi Covid-19 dosis ketiga (booster) sebagai persyaratan mudik Lebaran 2022 membuat antusiasme warga untuk mendapatkan vaksin tersebut meningkat.Hingga 18 April 2022, sekitar 47,98 persen atau 786.872 ribu dari total 1,64 juta warga di Jakarta Selatan telah divaksin dosis ketiga. Sebelumnya, pemerintah mengizinkan masyarakat untuk melaksanakan mudik pada Lebaran 2022 ini, tetapi dengan syarat melaksanakan vaksinasi lengkap hingga dosis ketiga.
          Ini akan menjadi tahun pertama diizinkannya mudik setelah Covid-19 mewabah di Indonesia. Sebelumnya, pada Lebaran 2020 dan 2021, pemerintah melarang mudik.</p></td>
        <td> 
          <b><a href="https://health.detik.com/berita-detikhealth/d-6041193/who-mulai-lirik-manfaat-obat-tradisional-resmikan-pusat-riset-global-pertama">WHO Mulai Lirik Manfaat Obat Tradisional, Resmikan Pusat Riset Global Pertama</a></b>
          <p>Organisasi Kesehatan Dunia (WHO) telah meresmikan pusat riset pengobatan tradisional pertama di India. Tujuannya untuk menganalisa manfaat berbagai pengobatan yang ada di dunia. WHO Global Centre for Traditional Medicine (GCTM) didirikan atas latar belakang hampir 80 persen populasi dunia masih menggunakan pengobatan tradisional. Namun, belum ada lembaga atau badan terpercaya yang benar-benar memperhatikan manfaat terapi tersebut. "Pengobatan tradisional biasanya menghadapi tantangan regulasi karena kurang data dan bukti yang sistematis, minim dana riset, serta tidak ada sistem yang mengawasi,"</p></td>
      </tr>
      <tr>
        <td colspan="2"><br><hr></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="2">
          <form action="komentar.php" method="POST">
            <h4 class="komentar">Kolom Komentar : </h4><br>
         <textarea name="komentar" rows="5" cols="35" placeholder="Silahkan isi komentar anda">
         </textarea><br><br>
            <input type="submit" value="Simpan" class="button">
            <input type="reset" value="Batal" class="button">
          </form></td>
      </tr>
    </table>
  </div>
</body>
</html>
<?php
  include ('footer.php');
?>