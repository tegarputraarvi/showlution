<?php
  require_once('./includes/dbconnection.php'); // Database connection file
  require_once('./includes/function.php');  // PHP functions file
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />-->
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>B A D A P S K I</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/badapski.ico" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Data Table css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4f0dfef4a8.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./assets/css/styles.css" rel="stylesheet" />
    <!-- Captcha Google -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Data Tabel JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Jquery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    <!-- Style Javascript -->
    <script src="./assets/js/styles.js"></script>
    <!-- Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Aos-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <!-- <img src="./assets/img/logo_badapski.png" class="img-thumbnail"/>&nbsp; -->
          BADAPSKI
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#beranda">Beranda</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#terkini">Info Terkini</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#layanan">Layanan</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#tentang-kami">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#biaya">Biaya</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#hubungi-kami">Hubungi Kami</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Masthead-->
    <header class="masthead" id="beranda">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <p class="mx-auto my-0 mb-3 text-uppercase masthead-title">
            <img src="./assets/img/logo_badapski.png" class="img-thumbnail"/><br />
            Badan Arbitrase dan Alternatif Penyelesaian Sengketa Konstruksi Indonesia
          </p>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">
            Keputusan KEMENKUMHAM No. AHU 00590.60.10.2014
          </h2>
          <a class="btn btn-danger btn-default js-scroll-trigger" href="#tentang-kami">
            <i class="fas fa-paper-plane"></i>
            &nbsp;Mulai
          </a>
        </div>
      </div>
    </header>
    <!--/.Masthead -->
    <!-- Terikini -->
    <section class="section-terkini" id="terkini">
      <div class="container">
        <div class="title-terkini">
          <p class="mb-5">Info Terkini</p>
        </div>
        <div class="detail-terkini">
          <p class="mb-5">Informasi terkini mengenai BADAPSKI dapat dilihat dibawah ini</p>
        </div>
        <div class="row">
          <div class="col-sm">
            <div class="nav nav-pills justify-content-center">
              <a href="#peraturanprosedur" class="nav-link nav-terkini active" data-toggle="pill">
                Peraturan & Prosedur
              </a>
              <a href="#opini" class="nav-link nav-terkini" data-toggle="pill">
                Opini
              </a>
              <!-- <a href="#kegiatan" class="nav-link nav-terkini" data-toggle="pill">
                Kegiatan
              </a> -->
              <a href="#galeri" class="nav-link nav-terkini" data-toggle="pill">
                Galeri
            </a>
            </div>
            <!-- Tab content -->
            <div class="tab-content">
              <!-- Tab Pane Peraturan & prosedur -->
              <div class="tab-pane active" id="peraturanprosedur">
                <!-- Row -->
                <div class="row pt-5">
	              <div class="col-sm-6" data-aos="fade-up">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="./assets/img/img_LiburLebaranTahun2021.png" class="card-img img-thumbnail" alt="..." style="width: 180px; height: 250px;">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><strong>Surat Edaran Kesekretariatan Jenderal BADAPSKI</strong>
	                            - Libur Lebaran Tahun 2021
                            </h5>
                            <p class="card-text">Silahkan download <a href="./assets/document/Libur%20Lebaran%20Tahun%202021.pdf" target="_blank">disini</a>.</p>
                            <p class="card-text">
<!--
                              <small class="text-muted">Tanggal: 30-04-2021</small><br />
                              <small class="text-muted">Oleh: Admin</small>
-->
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6" data-aos="fade-up">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="./assets/img/Surat Edaran II.jpg" class="card-img img-thumbnail" alt="..." style="width: 180px; height: 250px;">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><strong>Surat Edaran Kesekretariatan Jenderal BADAPSKI II</strong></h5>
                            <p class="card-text">Silahkan download <a href="./assets/document/Surat Edaran II.pdf" target="_blank">disini</a>.</p>
                            <p class="card-text">
<!--
                              <small class="text-muted">Tanggal: 19-09-2020</small><br />
                              <small class="text-muted">Oleh: Admin</small>
-->
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6" data-aos="fade-up">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="./assets/img/Peraturan Prosedur.png" class="card-img img-thumbnail" alt="..." style="width: 180px; height: 250px;">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><strong>PERATURAN & PROSEDUR ARBITRASE</strong></h5>
                            <p class="card-text">Silahkan download <a href="./assets/document/new_upload.pdf" target="_blank">disini</a>.</p>
                            <p class="card-text">
<!--
                              <small class="text-muted">Tanggal: 19-09-2020</small><br />
                              <small class="text-muted">Oleh: Admin</small>
-->
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6" data-aos="fade-up">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="./assets/img/Peraturan_wfh.png" class="card-img img-thumbnail" alt="..." style="width: 180px; height: 250px;">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><strong>Surat Keputusan Work From Home (WFH)</strong></h5>
                            <p class="card-text">Silahkan download <a href="./assets/document/Surat Keputusan WFH.pdf" target="_blank">disini</a>.</p>
                            <p class="card-text">
<!--
                              <small class="text-muted">Tanggal: 19-09-2020</small><br />
                              <small class="text-muted">Oleh: Admin</small>
-->
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6" data-aos="fade-up">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="./assets/img/Surat Edaran Kesekretariatan Jenderal BADAPSKI.png" class="card-img img-thumbnail" alt="..." style="width: 180px; height: 250px;">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><strong>Surat Edaran Kesekretariatan Jenderal BADAPSKI</strong></h5>
                            <p class="card-text">Silahkan download <a href="./assets/document/Surat Edaran Kesekretariatan Jenderal BADAPSKI.pdf" target="_blank">disini</a>.</p>
                            <p class="card-text">
<!--
                              <small class="text-muted">Tanggal: 19-09-2020</small><br />
                              <small class="text-muted">Oleh: Admin</small>
-->
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6" data-aos="fade-up">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="./assets/img/SK%20PENYERAHAN%20SALINAN%20PUTUSAN.jpeg" class="card-img img-thumbnail" alt="..." style="width: 180px; height: 250px;">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><strong>Surat Penyerahan Salinan Putusan BADAPSKI</strong></h5>
                            <p class="card-text">Silahkan download <a href="./assets/document/SK%20PENYERAHAN%20SALINAN%20PUTUSAN.pdf" target="_blank">disini</a>.</p>
                            <p class="card-text">
							<!--
                              <small class="text-muted">Tanggal: 19-09-2020</small><br />
                              <small class="text-muted">Oleh: Admin</small>
							-->
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/.Row -->
                <!-- Row -->
                <div class="row justify-content-center pt-5">
                  <div class="col-sm text-center">
                    <div class="lihat-lebih-lanjut-terkini">
                      <a href="#" data-toggle="modal" data-target="#lihat-lebih-lanjut-peraturan">Lihat lebih lanjut <i class="fa fa-chevron-down"></i></a>
                    </div>
                  </div>
                </div>
                <!--/.Row -->
              </div>
              
              <!-- Tab Pane Opini -->
              <div class="tab-pane" id="opini">
                <!-- Row -->
                <div class="row pt-5">
                  <div class="col-sm-6" data-aos="fade-up">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="./assets/img/Penyesuaian%20Harga%20(Price%20Adjustment).jpg" class="card-img img-thumbnail" alt="..." style="width: 180px; height: 250px;">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><strong>Pekerjaan Pembangunan Transportasi</strong></h5>
                            <p class="card-text">Silahkan download <a href="./assets/document/OPINI PEKERJAAN PEMBANGUNAN TRANSPORTASI.pdf" target="_blank">disini</a>.</p>
                            <p class="card-text">
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-6" data-aos="fade-up">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="./assets/img/opini-pekerjaan-pembangunan-trasportasi.jpeg" class="card-img img-thumbnail" alt="..." style="width: 180px; height: 250px;">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><strong>Penyesuaian Harga (Price Adjustment)</strong></h5>
                            <p class="card-text">Silahkan download <a href="./assets/document/Penyesuaian%20Harga%20(Price%20Adjustment).pdf" target="_blank">disini</a>.</p>
                            <p class="card-text">
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-6" data-aos="fade-up">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="./assets/img/Jenis%20Kontrak%20Pengadaan%20Pekerjaan%20Konstruksi%20dan%20Jasa%20Konsultansi%20Konstruksi.jpg" class="card-img img-thumbnail" alt="..." style="width: 180px; height: 250px;">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><strong>Jenis Kontrak Pengadaan Pekerjaan Konstruksi dan Jasa Konsultansi Konstruksi</strong></h5>
                            <p class="card-text">Silahkan download <a href="./assets/document/Jenis%20Kontrak%20Pengadaan%20Pekerjaan%20Konstruksi%20dan%20Jasa%20Konsultansi%20Konstruksi.pdf" target="_blank">disini</a>.</p>
                            <p class="card-text">
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!--/.Row -->
                <!-- Row -->
                <div class="row justify-content-center pt-5">
                  <div class="col-sm text-center">
                    <div class="lihat-lebih-lanjut-terkini">
<!--                       <a href="#" data-toggle="modal" data-target="#lihat-lebih-lanjut-opini">Lihat lebih lanjut <i class="fa fa-chevron-down"></i></a> -->
                    </div>
                  </div>
                </div>
                <!--/.Row -->
              </div>

              <!-- Tab Pane Kegiatan -->
              <!-- <div class="tab-pane" id="kegiatan"> -->
                <!-- Row -->
                <!-- <div class="row pt-5">
                  <div class="col-sm-3">
                    <div class="card-deck">
                      <div class="card" style="width: 18rem;">
                        <img src="./assets/img/startup-594091_1920.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card-deck">
                      <div class="card" style="width: 18rem;">
                        <img src="./assets/img/startup-594091_1920.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card-deck">
                      <div class="card" style="width: 18rem;">
                        <img src="./assets/img/startup-594091_1920.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card-deck">
                      <div class="card" style="width: 18rem;">
                        <img src="./assets/img/startup-594091_1920.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!--/.Row -->
                <!-- Row -->
                <!-- <div class="row justify-content-center pt-5">
                  <div class="col-sm text-center">
                    <div class="lihat-lebih-lanjut-terkini">
                      <a href="#" data-toggle="modal" data-target="#lihat-lebih-lanjut-kegiatan">Lihat lebih lanjut <i class="fa fa-chevron-down"></i></a>
                    </div>
                  </div>
                </div> -->
                <!--/.Row -->
              <!-- </div> -->
              <!--/.Tab Pane Kegiatan -->

              <!-- Tab Pane Galeri -->
              <div class="tab-pane" id="galeri">
                <!-- Row -->
                <div class="row pt-5">
                  <!-- Card columns -->
                  <div class="card-columns">
                    <!-- Card -->
                    <div class="card">
                      <img src="./assets/img/galleries/img06.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img05.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img07.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img08.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img09.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img10.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img11.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img12.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img13.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img14.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img15.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img16.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card">
                      <img src="./assets/img/galleries/img17.jpg" class="card-img-top" alt="...">
                    </div>
                    <!--/.Card -->
                  </div>
                  <!--/.Card columns -->
                </div>
                <!--/.Row -->
                <!-- Row -->
                <div class="row justify-content-center pt-5">
                  <div class="col-sm text-center">
                    <div class="lihat-lebih-lanjut-terkini">
                      <a href="#" data-toggle="modal" data-target="#lihat-lebih-lanjut-galeri">Lihat lebih lanjut <i class="fa fa-chevron-down"></i></a>
                    </div>
                  </div>
                </div>
                <!--/.Row -->
              </div>
              <!--/.Tab Pane Galeri -->
            </div> 
            <!--/.Tab content -->
          </div>
        </div>
      </div>
    </section>
    <!--/.Terkini -->
    <!-- Layanan -->
    <section class="section-layanan" id="layanan">
      <div class="container">
        <div class="title-layanan">
          <p class="mb-5">Layanan</p>
        </div>
        <div class="row">
          <div class="col-sm-3" data-aos="fade-right">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-arbitrase-tab" data-toggle="pill" href="#v-pills-arbitrase" role="tab" aria-controls="v-pills-arbitrase" aria-selected="true">Arbitrase</a>
              <a class="nav-link" id="v-pills-konsultasi-tab" data-toggle="pill" href="#v-pills-konsultasi" role="tab" aria-controls="v-pills-konsultasi" aria-selected="false">Konsultasi</a>
              <a class="nav-link" id="v-pills-negoisasi-tab" data-toggle="pill" href="#v-pills-negoisasi" role="tab" aria-controls="v-pills-negoisasi" aria-selected="false">Negoisasi</a>
              <a class="nav-link" id="v-pills-mediasi-tab" data-toggle="pill" href="#v-pills-mediasi" role="tab" aria-controls="v-pills-mediasi" aria-selected="false">Mediasi</a>
              <a class="nav-link" id="v-pills-konsiliasi-tab" data-toggle="pill" href="#v-pills-konsiliasi" role="tab" aria-controls="v-pills-konsiliasi" aria-selected="false">Konsiliasi</a>
              <a class="nav-link" id="v-pills-penilaian-tab" data-toggle="pill" href="#v-pills-penilaian" role="tab" aria-controls="v-pills-penilaian" aria-selected="false">Penilaian Ahli</a>
            </div>
          </div>
          <div class="col-sm-9" data-aos="fade-left">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-arbitrase" role="tabpanel" aria-labelledby="v-pills-arbitrase-tab">
                <h2 class="text-uppercase"><strong>Arbitrase</strong></h2>
                <p>
                  Definisi arbitrase menurut <i>Black's Law Dictionary</i> adalah: <i>"A method of dispute resolution involving one or more neutral third parties who are usually agreed to by disputing parties and whose decision is binding".</i>
                  <br /><br />
                  Arbitrase menurut Kamus Besar Bahasa Indonesia adalah usaha perantara dalam meleraikan sengketa; peradilan wasit. Arbitrase adalah suatu metode penyelesaian sengketa yang dilaksanakan oleh arbiter ad-hoc atau majelis arbitrase, yang dikenal juga sebagai pengadilan swasta. Suatu metode penyelesaian sengketa yang melibatkan satu atau lebih pihak ketiga yang netral yang melaksanakan <i>"arbitration hearing"</i>, sesuai dengan aturan dan prosedur yang spesifik, untuk menentukan siapa yang salah dan siapa yang benar, yang putusannya bersifat final dan mengikat (final and binding). Badan arbitrase tertua di Indonesia dengan jurisdiksi yang bersifat umum didirikan oleh Kamar Dagang dan Industri Indonesia di tahun 1977. BADAPSKI sebagai badan arbitrase yang bersifat khusus untuk bidang konstruksi di Indonesia telah dideklarasikan pada tanggal 19 Agustus 2014 di Jakarta.
                </p>
              </div>
              <div class="tab-pane fade" id="v-pills-konsultasi" role="tabpanel" aria-labelledby="v-pills-konsultasi-tab">
                <h2 class="text-uppercase"><strong>Konsultasi</strong></h2>
                <p>
                  Dalam Black's Law Dictionary konsultasi atau consultation dirumuskan :
                  <ol>
                    <li><i>The act of asking the advice or opinion of someone (such as a lawyer).</i></li>
                    <li><i>a meeting in which parties consult or confer.</i></li>
                    <li><i>The interactive methods by which states seek to prevent or resolve disputes.</i></li>
                  </ol>
                  Pada rumusan kesatu terdapat persamaan dengan cara konsultasi dalam Undang Undang Nomor 30 Tahun 1999. Pada konsultasi ini para pihak menunjuk seorang atau para ahli untuk memberikan pendapatnya. Cara konsultasi ini sesuai dengan ketentuan Undang Undang Nomor 30 Tahun 1999 Pasal 6 ayat (3) yang menyatakan: Dalam hal sengketa atau beda pendapat sebagaimana dimaksud dalam ayat (2) tidak dapat diselesaikan, maka atas kesepakatan tertulis para pihak, sengketa atau beda pendapat, diselesaikan melalui bantuan seorang atau lebih penasihat ahli dan seterusnya.
                  <br /><br />
                  Konsultasi dapat dilakukan dengan meminta bantuan lembaga arbitrase, hal ini dinyatakan dalam Pasal 52 bahwa para pihak dalam suatu perjanjian berhak untuk memohon pendapat yang mengikat dari lembaga arbitrase atas hubungan hukum tertentu dari suatu perjanjian. Dari ketentuan ini, maka lembaga arbitrase dapat ditafsirkan mempunyai fungsi lain di samping fungsi utamanya yaitu fungsi utamanya sebagai lembaga ajudikasi dan fungsi kedua sebagai lembaga konsultan. Fungsi kedua ini tampaknya belum banyak dimanfaatkan oleh para pihak yang bersengketa.
                </p>
              </div>
              <div class="tab-pane fade" id="v-pills-negoisasi" role="tabpanel" aria-labelledby="v-pills-negoisasi-tab">
                <h2 class="text-uppercase"><strong>Negoisasi</strong></h2>
                <p>
                  Dalam <i>Black's Law Dictionary, negotiation</i> didefinisikan sebagai berikut: <i>A consensual bargaining process in which the parties attempt to reach agreement on a disputed or potentially disputed matter. Negotiation involves complete autonomy for the parties involved, without the intervention of third parties.</i>
                  <br /><br />
                  Undang Undang Nomor 30 Tahun 1999 menempatkan negosiasi sebagai cara penyelesaian tersendiri. Dalam Pasal 6 ayat (2) dinyatakan : "Penyelesaian sengketa atau beda pendapat melalui alternatif penyelesaian sengketa sebagaimana dimaksud dalam ayat (1) diselesaikan dalam pertemuan langsung para pihak".
                  <br /><br />
                  Negosiasi ditempatkan oleh undang-undang sebagai cara yang pertama untuk menyelesaikan sengketa. Negosiasi merupakan cara pertama yang akan ditempuh para pihak guna mengatasi suatu sengketa, karena merupakan cara termurah dan paling tertutup dari pihak lain dibandingkan cara-cara lainnya. Dalam kontrak-kontrak nasional di Indonesia pada bagian penutup selalu dicantumkan klausula yang menyatakan: segala perbedaan atau sengketa yang timbul sebagai akibat pelaksanaan perjanjian ini, para pihak akan menyelesaikannya secara musyawarah untuk mencapai mufakat. Ini menunjukkan bahwa negosiasi dipilih sebagai cara paling utama untuk menyelesaikan sengketa.
                </p>
              </div>
              <div class="tab-pane fade" id="v-pills-mediasi" role="tabpanel" aria-labelledby="v-pills-mediasi-tab">
                <h2 class="text-uppercase"><strong>Mediasasi</strong></h2>
                <p>
                  Dalam <i>Black's Law Dictionary, mediation</i> didefinisikan sebagai berikut: <i>A method of non binding dispute resolution involving a neutral third party who tries to help the disputing parties reach a mutually agreeable solution.</i>
                  <br /><br />
                  Kamus Besar Bahasa Indonesia mendefinisikan mediasi sebagai: Proses pengikutsertaan pihak ketiga dalam penyelesaian suatu perselisihan sebagai penasehat.
                  <br /><br />
                  Peraturan Mahkamah Agung Republik Indonesia Nomor 1 Tahun 2008 yang merupakan pengganti Peraturan Mahkamah Agung Nomor 2 Tahun 2003, menyatakan bahwa yang dimaksud dengan mediasi adalah: Cara penyelesaian sengketa melalui proses perundingan untuk memperoleh kesepakatan para pihak dengan dibantu oleh mediator.
                </p>
              </div>
              <div class="tab-pane fade" id="v-pills-konsiliasi" role="tabpanel" aria-labelledby="v-pills-konsiliasi-tab">
                <h2 class="text-uppercase"><strong>Konsiliasi</strong></h2>
                <p>
                  Dalam <i>Black's Law Dictionary, concilliation</i> didefinisikan sebagai berikut:
                  <ol>
                    <li><i>A settlement of a dispute in an agreeable manner.</i></li>
                    <li><i>A process in which a neutral person meets with the parties to a dispute and explores how the dispute might be resolved.</i></li>
                  </ol>
                  Konsiliasi dapat ditemukan dalam Pasal 1 butir 10 Undang Undang Nomor No. 30 Tahun 1999 dan alinea ke-9 Penjelasan Umum Undang-undang tersebut. Selain pada kedua tempat tersebut Undang Undang Nomor 30 Tahun 1999 tidak menyebutnya termasuk menguraikan definisi atau pengertiannya ataupun mengatur tentang mekanismenya. Sebenarnya antara konsiliasi dan mediasi hampir tidak dapat dibedakan. Konsiliasi tidak berbeda jauh dengan arti perdamaian yang dinyatakan pada pasal 1864 KUHPer, di mana dinyatakan bahwa hasil kesepakatan para pihak pada alternatif penyelesaian sengketa konsiliasi harus dibuat secara tertulis dan ditandatangani bersama oleh para pihak yang bersengketa.
                </p>
              </div>
              <div class="tab-pane fade" id="v-pills-penilaian" role="tabpanel" aria-labelledby="v-pills-penilaian-tab">
                <h2 class="text-uppercase"><strong>Penilaian Ahli</strong></h2>
                <p>
                  <i>Black's Law Dictionary</i>, mendefinisikan ahli atau expert sebagai berikut: <i>A person who, through education or experience, has developed skill or knowledge in a particular subject, so that he or she may form an opinion that will assist the fact-finder.</i>
                  <br /><br />
                  <i>Black's Law Dictionary</i> juga mendefinisikan <i>impartial expert</i> sebagai: <i>An expert who is appointed by the court tom present an unbiased opinion.</i>
                  <br /><br />
                  Dalam Undang Undang Nomor 30 Tahun 1999 dinyatakan "penilaian ahli" sebagai salah satu dasar dari suatu alternatif penyesaian sengketa, penilaian ahli merupakan suatu produk hasil penilaian oleh seseorang yang dapat dikategorikan sebagai seorang yang mempunyai keahlian untuk bidan tertentu. Dalam Peraturan Pemerintah Nomor 29 Tahun 2000, pasal 37 mendefinisikan penilai ahli, sebagi suatu subyek yang memenuhi persyaratan sebagai tertentu, yaitu sebagai Penilai Ahli sebagaimana dimaksud dalam yang memenuhi persyaratan dan harus memiliki sertifikat keahlian dan terdaftar pada Lembaga Pengembangan Jasa Konstruksi serta bersertifikat DRBF.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/.Layanan -->
    <!-- Tentang Kami -->
    <section class="section-tentang-kami" id="tentang-kami">
      <div class="container">
        <!-- Row -->
        <div class="row mb-5">
          <div class="col-sm-6 text-center align-items-center" data-aos="fade-right">
            <img class="img-fluid rounded align-items-center pt-5" src="./assets/img/proyek-kontruksi.jpg" alt="..." />
            <div class="panel-link-detail mb-5">
                <!-- <a href="#">
                    Lihat Detail Tentang Kami<br />
                    <i class="fa fa-caret-down"></i> 
                </a> -->
            </div>
          </div>
          <div class="col-sm-6 mx-auto" data-aos="fade-left">
            <p class="text-white-50 title-tentang-kami">Selamat Datang di <strong>BADAPSKI</strong></p>
            <h2 class="text-white mb-4">
              Badan Arbitrase dan Alternatif Penyelesaian Sengketa Konstruksi Indonesia
            </h2>
            <p class="text-white-50">
              Bidang konstruksi berkembang pesat di Indonesia. terkadang perselisihan diantara Penyedia Jasa dan Pengguna Jasa sering terjadi. Seringkali, sengketa tersebut diselesaikan melalui arbitrase umum, dan tidak jarang ditangani oleh arbiter-arbiter yang tidak memiliki keahlian khusus di bidang konstruksi sehingga menghasilkan putusan yang kurang adil bagi para pihak yang bersengketa.<br /><br />
              Badan Arbitrase dan Alternatif Penyelesaian Sengketa Konstruksi Indonesia <strong>(BADAPSKI)</strong> hadir untuk menjawab permasalahan di atas.
            </p>
            <div class="row justify-content-center">
                <div class="col-sm-7 panel-tentang-kami">
                    <p><i class="fa fa-chevron-right"></i> 5 Tahun Pengalaman</p>
                </div>
            </div>
          </div>
        </div>
        <!--/.Row -->
        <!-- Garis Putih -->
        <hr color="#ffffff" />
        <!--/.Garis putih -->
        <!-- Row -->
        <div class="row justify-content-center">
          <div class="col-sm">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist" data-aos="fade-up">
              <li class="nav-item">
                <a class="nav-link active" id="pills-sejarah-tab" data-toggle="pill" href="#pills-sejarah" role="tab" aria-controls="pills-sejarah" aria-selected="true">Sejarah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-pendiri-tab" data-toggle="pill" href="#pills-pendiri" role="tab" aria-controls="pills-pendiri" aria-selected="true">Pendiri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-arbiter-tab" data-toggle="pill" href="#pills-arbiter" role="tab" aria-controls="pills-arbiter" aria-selected="true">Arbiter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-organisasi-tab" data-toggle="pill" href="#pills-organisasi" role="tab" aria-controls="pills-organisasi" aria-selected="true">Organisasi</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" id="pills-peraturan-tab" data-toggle="pill" href="#pills-peraturan" role="tab" aria-controls="pills-peraturan" aria-selected="true">Peraturan & Prosedur</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" id="pills-galeri-tab" data-toggle="pill" href="#pills-galeri" role="tab" aria-controls="pills-galeri" aria-selected="false">Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-kegiatan-tab" data-toggle="pill" href="#pills-kegiatan" role="tab" aria-controls="pills-kegiatan" aria-selected="false">Kegiatan</a>
              </li> -->
            </ul>
            <!-- Garis Putih -->
            <hr color="#ffffff" />
            <!--/.Garis putih -->
            <div class="tab-content content-tentang-kami mb-5" id="pills-tabContent" data-aos="fade-up">
              <!-- Tab Pane Sejarah -->
              <div class="tab-pane fade show active" id="pills-sejarah" role="tabpanel" aria-labelledby="pills-sejarah-tab">
                <!-- Row -->
                <div class="row pt-3">
                  <!-- Col -->
                  <div class="col-sm">
                    <p class="title-tentang-kami">BADAPSKI</p>
                    <p class="body-tentang-kami">
                      Setiap tahun, puluhan ribu kontrak konstruksi ditandatangani dan diimplementasikan. Dalam hal ini, sudah hampir pasti akan terjadi sengketa konstruksi akibat perbedaan interpretasi maupun akibat lain yang bersifat fisik maupun non fisik. Penyelesaian sengketa secara umum di Indonesia diatur dengan suatu perundangan dan saat ini berlaku, Undang-undang No. 2 tahun 2017 tentang Jasa Konstruksi, dan Undang- Undang No. 30 Tahun 1999 tentang Arbitrase dan Alternatif Penyelesaian Sengketa. Pada Undang Undang ini, terdapat beberapa cara penyelesaian sengketa di luar pengadilan, yaitu mediasi, konsiliasi, dan arbitrase, dimana jika kedua pihak sepakat bisa dengan menunjuk dewan sengketa, kemudian jika belum didapat kesepakatan dilanjutkan ke arbitrase,sebagai upaya terakhir penyelesaian sengketa konstruksi.
                      <br /><br />
                      BADAPSKI menjawab kebutuhan di atas dengan adanya kelebihan dari lembaga arbitrase yang lain, yaitu yang pertama adalah kekhususan <i>(lex specialis)</i> di bidang konstruksi dan yang kedua adalah pembiayaan yang lebih bersaing serta cara pembiayaan yang lebih memudahkan, bagi institusi pemerintah yang sangat tergantung pada dana APBN dan/atau APBD dengan adanya kelonggaran untuk tidak dapat membayar dimuka biaya administrasi, tetapi cukup dengan menyampaikan surat jaminan, yang nantinya dibayarkan setelah tersedianya anggaran atau pada saat putusan majelis arbitrase diterbitkan, atau mana yang terlebih dahulu terjadi.
                    </p>
                    <p class="title-tentang-kami">Visi</p>
                    <p class="body-tentang-kami">
                      MENJADI PILIHAN UTAMA PENYELESAIAN SENGKETA KONSTRUKSI NASIONAL MAUPUN INTERNASIONAL
                    </p>
                    <p class="title-tentang-kami">Misi</p>
                    <p class="body-tentang-kami">
                      MENYELENGGARAKAN LAYANAN ARBITRASE DAN ALTERNATIF PENYELESAIAN SENGKETA KONSTRUKSI DENGAN CEPAT, MURAH, BERKEPASTIAN HUKUM DAN TIDAK MERUSAK HUBUNGAN ANTAR PARA PIHAK.
                    </p>
                  </div>
                  <!--/.Col -->
                </div>
                <!--/.Row -->
              </div>
              <!--/.Tab Pane Sejarah -->
              <!-- Pendiri -->
              <div class="tab-pane fade" id="pills-pendiri" role="tabpanel" aria-labelledby="pills-pendiri-tab">
                <!-- Row -->
                <div class="row pt-3 pb-5">
                  <!-- Col -->
                  <div class="col-sm">
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                      <!--Controls-->
                      <div class="controls-top justify-content-center text-center mb-3">
                        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-circle-left fa-lg"></i></a>
                        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                            class="fas fa-chevron-circle-right fa-lg"></i></a>
                      </div>
                      <!--/.Controls-->
                      <!--Indicators-->
                      <ol class="carousel-indicators">
                        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-item-example" data-slide-to="1"></li>
                        <li data-target="#multi-item-example" data-slide-to="2"></li>
                        <li data-target="#multi-item-example" data-slide-to="3"></li>
                      </ol>
                      <!--/.Indicators-->
                      <!--Slides-->
                      <div class="carousel-inner justify-content-center" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                          <!-- Row -->
                          <div class="row justify-content-center">
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_djoko_kirmanto.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>DR. Ir. Djoko Kirmanto, Dip. HE</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#djoko_kirmanto">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_abdul_rahman.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Abdul Rahman Saleh, SH., MM</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#abdul_rahman">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_hikmahanto_juwana.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Prof Hikmahanto Juwana, SH., LLM., PhD</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#hikmanto">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_wiratman_wangsadinata.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Prof. DR. Ir. Wiratman Wangsadinata</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#wiratman">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--/.Row -->
                        </div>
                        <!--/.First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                          <!-- Row -->
                          <div class="row justify-content-center">
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_roesdiman_soegiarso.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Prof. Ir. Roesdiman Soegiarso, MSc., PhD</small></h5><br />
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#roesdiman">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_hadiman.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Irjen Pol (Purn) Prof. DR. dr. Hadiman, Sp KO., SH., MBA., MSc</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#hadiman">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_satya_arinanto.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Prof. DR. Satya Arinanto, SH., LLM</small></h5><br />
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#satya">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_agus_rahardjo.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Ir. Agus Rahardjo, MSM</small></h5><br /><br />
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#agus_raharjo">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--/.Row -->
                        </div>
                        <!--/.Second slide-->
                        <!-- Third slide -->
                        <div class="carousel-item">
                          <!-- Row -->
                          <div class="row justify-content-center">
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_hedianto_w_husaeni.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Ir. Hedianto W. Husaeni, MSCE., MSi</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#hedianto">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_sudarto.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>DR. Ir. Sudarto, MT</small></h5><br />
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#sudarto">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_sarwono_hardjomuljadi.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Prof. DR.Ir. Sarwono Hardjomuljadi, MT., MH</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#sarwono">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_ahmad_sudiro.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>DR. Ahmad Sudiro, S.H., M.H., M.M</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#ahmad_sudiro">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--/.Row -->
                        </div>
                        <!--/.Third slide -->
                        <!-- Four slide -->
                        <div class="carousel-item">
                          <!-- Row -->
                          <div class="row justify-content-center">
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_firman_wijaya5.jpeg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>DR. Firman Wijaya SH., MH</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#firman">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_bintang_perbowo.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Bintang Perbowo, SE., MM</small></h5><br />
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#bintang">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_erie_heryadi.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Ir. Erie Heryadi</small></h5><br />
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#erie">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--/.Row -->
                        </div>
                        <!--/.Four slide -->
                      </div>
                      <!--/.Slides-->
                    </div>
                    <!--/.Carousel Wrapper-->
                  </div>
                  <!--/.Col -->
                </div>
                <!--/.Row -->
              </div>
              <!--/.Tab Pane Pendiri -->
              <!-- Tab Pane Arbiter -->
              <div class="tab-pane fade" id="pills-arbiter" role="tabpanel" aria-labelledby="pills-arbiter-tab">
                <!-- Row -->
                <div class="row pt-3 pb-5">
                  <!-- Col -->
                  <div class="col-sm">
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example-2" class="carousel slide carousel-multi-item" data-ride="carousel">
                      <!--Controls-->
                      <div class="controls-top justify-content-center text-center mb-3">
                        <a class="btn-floating" href="#multi-item-example-2" data-slide="prev"><i class="fas fa-chevron-circle-left fa-lg"></i></a>
                        <a class="btn-floating" href="#multi-item-example-2" data-slide="next"><i
                            class="fas fa-chevron-circle-right fa-lg"></i></a>
                      </div>
                      <!--/.Controls-->
                      <!--Indicators-->
                      <ol class="carousel-indicators">
                        <li data-target="#multi-item-example-2" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-item-example-2" data-slide-to="1"></li>
                        <li data-target="#multi-item-example-2" data-slide-to="2"></li>
                      </ol>
                      <!--/.Indicators-->
                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                          <!-- Row -->
                          <div class="row justify-content-center">
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_djoko_kirmanto.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>DR. Ir. Djoko Kirmanto, Dip. HE</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#djoko_kirmanto">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_roesdiman_soegiarso.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Prof. Ir. Roesdiman Soegiarso, MSc., PhD</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#roesdiman">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_agus_rahardjo.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Ir. Agus Rahardjo, MSM</small></h5><br />
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#agus_raharjo">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--/.Row -->
                        </div>
                        <!--/.First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                          <!-- Row -->
                          <div class="row justify-content-center">
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_hikmahanto_juwana.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Prof. Hikmahanto Juwana, SH., LLM., PhD</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#hikmanto">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_sarwono_hardjomuljadi.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Prof. Dr. Ir. Sarwono Hardjomuljadi, MT., MH</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#sarwono">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_satya_arinanto.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Prof. DR. Satya Arinanto, SH., LLM</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#satya">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_ahmad_sudiro.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Dr. Ahmad Sudiro, S.H., M.H., M.M</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#ahmad_sudiro">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--./Row  -->
                        </div>
                        <!--/.Second slide-->
                        <!-- Third slide -->
                        <div class="carousel-item">
                          <!-- Row -->
                          <div class="row justify-content-center">
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_firman_wijaya5.jpeg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Dr. Firman Wijaya SH., MH</small></h5><br /><br />
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#firman">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_hadiman.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Irjen Pol (Purn) Prof. Dr. dr. Hadiman, Sp KO., SH., MBA., MSc</small></h5>
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#hadiman">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3 mb-3 mb-md-0">
                              <div class="card-deck py-4 h-100">
                                <div class="card align-items-center">
                                  <img class="card-img-top" src="./assets/img/img_erie_heryadi.jpg" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title"><small>Ir. Erie Heryadi</small></h5><br /><br />
                                    <!-- <p class="card-text">
                                      Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                                    </p> -->
                                    <button class="btn btn-sm btn-danger" style="width: 100%;" data-toggle="modal" data-target="#erie">Detail</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--/.Row -->
                        </div>
                        <!--/.Third slide -->
                      </div>
                      <!--/.Caraousel Inner -->
                    </div>
                    <!--/.Carousel Wrapper-->
                  </div>
                  <!-- Col -->
                </div>
                <!--/.Row -->
              </div>
              <!--/. Tab Pane Arbiter -->
              <!-- Tab Pane Organisasi -->
              <div class="tab-pane fade" id="pills-organisasi" role="tabpanel" aria-labelledby="pills-organisasi-tab">
                <!-- Row -->
                <div class="row pt-3 pb-5">
                  <!-- Col -->
                  <div class="col-sm">
                    <p class="title-tentang-kami">DEWAN KEHORMATAN, PENGAWAS, PENGURUS</p>
                    <p class="body-tentang-kami">
                      <strong>Dewan Kehormatan</strong><br />
                      Dr.(HC)lr. Djoko Kirmanto, Dipl. HE<br />
                      Bintang Perbowo, S.E., M.M
                    </p>
                    <p class="body-tentang-kami">
                      <strong>Dewan Pengawas</strong><br />
                      Ketua: Prof. Ir. Roesdiman Soegiarso, M.Sc., Ph.D<br />
                      Anggota: Irjend Pol. (Purn). Prof. Dr. dr. Hadiman, Sp.KO., S.H., M.B.A., M.Sc
                    </p>
                    <p class="body-tentang-kami">
                      <strong>Dewan Pengurus</strong><br />
                      Ketua Umum: Prof. Dr. Satya Arinanto, S.H., M.H<br />
                      Wakil Ketua: Prof. Dr. lr. Sarwono Hardjomuljadi, M.T., M.H<br />
                      Sekretaris Jenderal: Dr. Firman Wijaya, S.H., M.H<br />
                      Bendahara Umum: lr. Erie Heryadi
                    </p>
                  </div>
                  <!--/.Col -->
                </div>
                <!--/.Row -->
              </div>
              <!--/.Tab Pane Organisasi -->
            </div>
          </div>
        </div>
        <!--/.Row -->
      </div>
      <!--/.Container -->
    </section>
    <!--/.Tentang Kami -->
    <!-- Biaya -->
    <section class="section-biaya" id="biaya">
      <div class="container">
        <div class="title-biaya">
          <p class="mb-5">Biaya</p>
        </div>
        <!-- Row -->
        <div class="row">
          <div class="col-sm">
            <nav>
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" data-aos="fade-up">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-tabel-biaya" role="tab" aria-controls="nav-home" aria-selected="true">Tabel Biaya</a>
                <a class="nav-item nav-link" id="nav-kalkulator-tab" data-toggle="tab" href="#nav-kalkulator" role="tab" aria-controls="nav-profile" aria-selected="false">Kalkulator</a>
              </div>
            </nav>
            <!-- Tab Content -->
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent" data-aos="fade-up">
              <!-- Tab Pane Tabel Biaya -->
              <div class="tab-pane fade show active" id="nav-tabel-biaya" role="tabpanel" aria-labelledby="nav-tabel-biaya-tab">
                <!-- Row -->
                <div class="row justify-content-center pt-5">
                  <div class="col-sm">
                    <div class="table-responsive">
                      <table id="tabel-biaya" class="table table-striped">
                        <thead>
                          <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                            <th class="text-center">Nilai Tuntutan (Rp.)</th>
                            <th class="text-center">Costs</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih kecil dari</td>
                            <td class="text-center">500.000.000</td>
                            <td class="text-center">10.0 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">500.000.000</td>
                            <td class="text-center">9.0 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">3</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">1.000.000.000</td>
                            <td class="text-center">8.0 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">4</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">2.500.000.000</td>
                            <td class="text-center">7.0 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">5</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">5.000.000.000</td>
                            <td class="text-center">6.0 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">6</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">7.500.000.000</td>
                            <td class="text-center">5.0 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">7</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">10.000.000.000</td>
                            <td class="text-center">4.0 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">8</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">12.500.000.000</td>
                            <td class="text-center">3.5 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">9</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">15.000.000.000</td>
                            <td class="text-center">3.2 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">10</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">17.500.000.000</td>
                            <td class="text-center">3.0 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">11</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">20.000.000.000</td>
                            <td class="text-center">2.8 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">12</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">22.500.000.000</td>
                            <td class="text-center">2.6 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">13</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">25.000.000.000</td>
                            <td class="text-center">2.4 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">14</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">27.500.000.000</td>
                            <td class="text-center">2.2 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">15</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">30.000.000.000</td>
                            <td class="text-center">2.0 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">16</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">35.000.000.000</td>
                            <td class="text-center">1.9 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">17</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">40.000.000.000</td>
                            <td class="text-center">1.8 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">18</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">45.000.000.000</td>
                            <td class="text-center">1.7 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">19</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">50.000.000.000</td>
                            <td class="text-center">1.6 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">20</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">60.000.000.000</td>
                            <td class="text-center">1.5 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">21</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">70.000.000.000</td>
                            <td class="text-center">1.4 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">22</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">80.000.000.000</td>
                            <td class="text-center">1.3 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">23</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">90.000.000.000</td>
                            <td class="text-center">1.2 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">24</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">100.000.000.000</td>
                            <td class="text-center">1.1 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">25</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">200.000.000.000</td>
                            <td class="text-center">1.0 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">26</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">300.000.000.000</td>
                            <td class="text-center">0.9 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">27</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari atau sama dengan</td>
                            <td class="text-center">400.000.000.000</td>
                            <td class="text-center">0.8 %</td>   
                          </tr>
                          <tr>
                            <td class="text-center">28</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Sama dengan</td>
                            <td class="text-center">500.000.000.000</td>
                            <td class="text-center">0.6 %</td>
                          </tr>
                          <tr>
                            <td class="text-center">29</td>
                            <td class="text-center">Nilai Tuntutan</td>
                            <td class="text-center">Lebih besar dari</td>
                            <td class="text-center">500.000.000.000</td>
                            <td class="text-center">0.5 %</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                            <th class="text-center">Nilai Tuntutan (Rp.)</th>
                            <th class="text-center">Costs</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
                <!--/.Row -->
              </div>
              <!--/.Tab Pane Tabel Biaya -->
              <!-- Tab Pane Kalkulator -->
              <div class="tab-pane fade" id="nav-kalkulator" role="tabpanel" aria-labelledby="nav-kalkulator-tab">
                <!-- Row -->
                <div class="row justify-content-center pt-5">
                  <div class="col-sm">
                    <form id="formPerhitunganBiaya">
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label label-form-hubungi-kami">Nama Perusahaan</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" placeholder="Nama Perusahaan" name="namaPerusahaan" id="namaPerusahaan" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label label-form-hubungi-kami">Nilai Kontrak</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control uang" placeholder="Nilai Kontrak" name="nilaiKontrak" id="nilaiKontrak" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label label-form-hubungi-kami">Nilai Klaim</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control uang" placeholder="Nilai Klaim" name="nilaiKlaim" id="nilaiKlaim" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4">Jenis Instansi</label>
                        <div class="col-sm-8">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisInstansi" id="Pemerintah" value="Pemerintah">
                            <label class="form-check-label">Pemerintah</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisInstansi" id="Swasta" value="Swasta">
                            <label class="form-check-label">Swasta</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4"></label>
                        <div class="col-sm-8">
                          <button type="button" class="btn btn-sm btn-danger mb-5" onclick="hitung()" style="width: 100%;">
                            <i class="fas fa-calculator"></i>
                            &nbsp;Hitung!
                          </button>
                        </div>
                      </div>
                      <div class="alert alert-danger alert-dismissible fade" role="alert" id="alertPerhitunganBiaya">
                        <div id="alertContent"class="text-center" ></div>
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> -->
                      </div>
                    </form>
                  </div>
                </div>
                
              </div>
              <!--/.Tab Pane Kalkulator -->
            </div>
            <!--/Tab Content -->
          </div>
        </div>
        <!-- Row -->
      </div>
    </section>
    <!--/.Biaya -->
    <!-- Hubungi Kami -->
    <section class="contact-section bg-black" id="hubungi-kami">
      <!-- Container -->
      <div class="container">
        <div class="title-contact">
          <p class="mb-5">Hubungi Kami</p>
        </div>
        <!-- Row -->
        <div class="row">
          <div class="col-md-3 mb-3 mb-md-0">
              <div class="card py-4 h-100">
                  <div class="card-body text-center">
                      <i class="fas fa-map-marked-alt text-default mb-2"></i>
                      <h4 class="text-uppercase m-0">Alamat</h4>
                      <hr class="my-4" />
                      <div class="small text-black-50">
                          Jl. Mesjid II No.1, Kel. Bendungan Hilir, 
                          Kec. Tanah Abang, Jakarta Pusat, 10210, Indonesia.
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-3 mb-3 mb-md-0">
              <div class="card py-4 h-100">
                  <div class="card-body text-center">
                      <i class="fas fa-envelope text-default mb-2"></i>
                      <h4 class="text-uppercase m-0">Email</h4>
                      <hr class="my-4" />
                      <div class="small text-black-50">
                          <a href="#!">info@badapski.org</a><br />
                          <a href="#!">badapski@gmail.com</a><br />
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-3 mb-3 mb-md-0">
              <div class="card py-4 h-100">
                  <div class="card-body text-center">
                      <i class="fas fa-mobile-alt text-default mb-2"></i>
                      <h4 class="text-uppercase m-0">Telepon</h4>
                      <hr class="my-4" />
                      <div class="small text-black-50 mb-1">+62 (21) 2522 520</div>
                      <div class="small text-black-50 mb-1">+62 812 1989 1969</div>
                      <div class="small text-black-50">+62 811 660 454</div>
                  </div>
              </div>
          </div>
          <div class="col-md-3 mb-3 mb-md-0">
              <div class="card py-4 h-100">
                  <div class="card-body text-center">
                      <i class="fab fa-whatsapp text-default mb-2"></i>
                      <h4 class="text-uppercase m-0">Whatsapp</h4>
                      <hr class="my-4" />
                      <div class="small text-black-50">
                          <a href="https://api.whatsapp.com/send?phone=6281296847472&text=Hello%2C%20%0A%0ASaya%20mendapatkan%20info%20dari%20web%20badapski%2C%20tolong%20hubungi%20saya%20segera.%0A%0ATerimakasih.">+62 812 9684 7427</a><br />
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <!--/.Row -->
        <!-- Social -->
        <div class="social d-flex justify-content-center mb-5">
            <a class="mx-2" href="https://twitter.com/badapski"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="https://www.facebook.com/sekretariat.badapski"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="https://www.instagram.com/sekretariat.badapski/"><i class="fab fa-instagram"></i></a>
            <a class="mx-2" href="https://www.youtube.com/channel/UCvzLBvlRUNrYXvO8KGeoYEQ"><i class="fab fa-youtube"></i></a>
            <!-- https://www.youtube.com/channel/UCvzLBvlRUNrYXvO8KGeoYEQ/ -->
        </div>
        <!--/.Social -->
        <!-- Row -->
        <div class="row justify-content-center">
          <div class="col-sm-6 mb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.439469594579!2d106.80359321467222!3d-6.205616662516298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7138429e353%3A0x4be7af674a2b82a9!2sBADAPSKI!5e0!3m2!1sid!2sid!4v1600655376597!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="col-sm-6">
            <p class="title-hubungi-kami">Kami akan menghubungi anda</p>
            <form id="contact-form" method="post" action="hubungi.php" role="form">
              <div class="messages"></div>
              <div class="form-group row has-feedback">
                <label class="col-sm-4 col-form-label label-form-hubungi-kami">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                  <i class="form-control-feedback"></i>
                  <span class="text-warning" style="font-size: 12px;"></span>
                </div>
              </div>
              <div class="form-group row has-feedback">
                <label class="col-sm-4 col-form-label label-form-hubungi-kami">Nama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama">
                  <i class="form-control-feedback"></i>
                  <span class="text-warning" style="font-size: 12px;"></span>
                </div>
              </div>
              <div class="form-group row has-feedback">
                <label class="col-sm-4 col-form-label label-form-hubungi-kami">Nomor Handphone</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" placeholder="Nomor Handphone" name="hp" id="hp">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label label-form-hubungi-kami">Pesan</label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="5" placeholder="Pesan" name="pesan" id="pesan"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4"></label>
                <div class="col-sm-8">
                  <div class="g-recaptcha" data-sitekey="6LcEn84ZAAAAAAJMPuStVNLlxKSkG2MxaZOTH0fu" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                  <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                  <div class="help-block with-errors" style="font-size: 12px;"></div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4"></label>
                <div class="col-sm-8">
                  <button type="submit" class="btn btn-sm btn-danger" style="width:100%;">
                    <i class="fa fa-rocket"></i>
                    &nbsp;Kirim!
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!--/.Row -->
      </div>
      <!--/.Container -->
    </section>
    <!--/.Hubungi Kami -->
    <!-- Modal -->
    <div class="modal" id="hitung">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Hasil Perhitungan</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm">
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label label-form-hubungi-kami">Nama Perusahaan</label>
                    <div class="col-sm-6">
                      <p id="hasilNamaPerusahaan"></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label label-form-hubungi-kami">Nilai Kontrak</label>
                    <div class="col-sm-6">
                      <p id="hasilNilaiKontrak"></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label label-form-hubungi-kami">Nilai Klaim</label>
                    <div class="col-sm-6">
                      <p id="hasilNilaiKlaim"></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label label-form-hubungi-kami">Jenis Instansi</label>
                    <div class="col-sm-6">
                      <p id="hasilJenisInstansi"></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label label-form-hubungi-kami">Persen</label>
                    <div class="col-sm-6">
                      <p id="hasilPersen"></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label label-form-hubungi-kami">Biaya</label>
                    <div class="col-sm-6">
                      <p id="hasilPerhitunganBiaya" class="uang"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearFormPerhitunganBiaya()">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Djoko Kirmanto -->
    <div class="modal" id="djoko_kirmanto">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">DR. Ir. Djoko Kirmanto, Dip., HE</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_djoko_kirmanto.jpg" class="img-thumbnail mb-3">
                  <p>
                    Lahir di Pengging, Jawa Tengah, 5 Juli 1943; adalah Menteri Pekerjaan Umum Republik Indonesia Kabinet Indonesia Bersatu I (2004 - 2009) dan Kabinet Indonesia Bersatu II (2009-2014)
                    <br><br>
                    <strong>Pendidikan</strong><br>
                    Ia menyelesaikan pendidikan sarjananya di Jurusan Teknik Sipil Universitas Gajah Mada, Yogyakarta, Pasca Sarjana di Land and Water Development, IHE-Delft, Belanda. Doktor Honoris Causa (HC) dalam Ilmu Teknik Bidang Pembangunan Wilayah dan Kota oleh Universitas Diponegoro (2005) Semarang, Doktor Honoris Causa (2014) di bidang Sumber Daya Air dan Lingkungan oleh Universitas Gajah Mada, Yogyakarta.<br><br>
                    <strong>Riwayat Pekerjaan</strong><br>
                    Kementerian Pekerjaan Umum (dahulu Departemen Pekerjaan Umum) mulai dari sebagai Site Engineer pembangunan pondasi Karang Semut Yogyakarta, hingga Sekretaris Jenderal Departemen Pemukiman dan Prasarana Wilayah (2002-2003). Dalam orgaisasi profesi pernah menjadi Ketua Umum Himpunan Ahli Teknik Hidraulik Indonesia (HATHI) dan sekarang Ketua Dewan Pembina HATHI.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Abdul Rahman -->
    <div class="modal" id="abdul_rahman">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Abdul Rahman Saleh, SH., MH</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_abdul_rahman.jpg" class="img-thumbnail mb-3">
                  <p>
                    Duta Besar Luar Biasa dan Berkuasa Penuh R.I. untuk Kerajaan Denmark merangkap Lithuania (2008-2-12), Jaksa Agung Republik Indonesia (2004-2007), Hakim Agung (1999-2004), Notaris PPAT (1992-2999), Direktur LBH Jakarta, Wartawan Harian Nusantara (1968-1972).<br><br>
                    <strong>Pendidikan</strong><br>
                    Ia menyelesaikan pendidikan sarjananya di Fakultas Hukum  Universitas Gajah Mada, Yogyakarta, Pendidikan Profesi Notariat di Universitas Indonesia, Magister Hukum Universitas Indonesia
                    Riwayat Pekerjaan.<br><br>
                    Wartawan Harian Nusantara, Direktur Lembaga bantuan Hukum, Notaris/PPAT, Hakim Agung kemudian Jaksa Agung (2004-2007) dan terakhir sebagai Duta Besar di Kerajaan Denmark (2008-2013). 
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Hikmanto -->
    <div class="modal" id="hikmanto">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Prof Hikmahanto Juwana, SH., LLM., PhD</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_hikmahanto_juwana.jpg" class="img-thumbnail mb-3">
                  <p>
                    Warga Negara Indonesia, lahir di Jakarta. Komisaris Independen Unilever Indonesia sejak Mei 2011. Saat ini juga menjabat Komisaris Independen PT Aneka Tambang Tbk (Mei 2009-sekarang), anggota Tim Ahli Hukum Kementerian Pertahanan (Februari 2010-sekarang), dan anggota Satuan Tugas Hukum Kementerian BUMN (September 2011-sekarang). Anggota Komisi Pengawas Pajak, Kementerian Keuangan (Maret 2010-Maret 2013) dan Komisi Ahli Kementerian Hukum dan HAM (2004-2005). Pernah bekerja sebagai konsultan di BAPPENAS (Penasehat Urusan Pemberdayaan Pengadilan Niaga) dari 2001 hingga 2002, dan Staf Ahli Menteri pada Kantor Menko Perekonomian dari 1999 hingga 2001.<br><br>
                    Sebelumnya bekerja dalam beragam kapasitas di sejumlah kantor hukum terkemuka di Jakarta. Beliau dikukuhkan sebagai Profesor Hukum Internasional di Universitas Indonesia pada tahun 2001, dan menjabat Dekan Fakultas Hukum mulai 2004 hingga 2008. Mengajar sejumlah mata kuliah hukum di beberapa universitas terkemuka lainnya di Indonesia dan menjadi visiting professor di University of Melbourne, National University of Singapore dan Nagoya University, Jepang. Sebagai peneliti independen beliau telah menerbitkan sejumlah buku, artikel dan makalah penelitian tentang berbagai aspek hukum internasional, hokum bisnis, dan hukum ruang angkasa. Sarjana hukum Universitas Indonesia pada1987 dan memperoleh gelar LLM dari Keio University, Jepang (1992) dan PhD dari University of Nottingham, Inggris (1997).
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Wiratman -->
    <div class="modal" id="wiratman">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Prof. DR. Ir. Wiratman Wangsadinata (Alm)</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_wiratman_wangsadinata.jpg" class="img-thumbnail mb-3">
                  <p>
                    Lahir di  Jakarta, 25 Februari 1935 adalah Direktur Utama PT Wiratman, Guru Besar Emeritus, Fakultas Teknik Universitas Tarumanagara (UNTAR)<br><br>
                    <strong>Pendidikan : </strong><br>
                    Lulus Sarjana Teknik Sipil (Ir) Institut Teknologi Bandung (ITB) tahun 1960. - Meraih Doktor (DR) dalam bidang Teknik Sipil di ITB tahun 1992 dengan predikat Cum Laude.<br><br>

                    <strong>RIWAYAT PEKERJAAN.</strong><br> 
                    Direktur Utama PT Wiratman, Konsultan Multidisipliner, menyelesaikan lebih dari 4500 karya konstruksi dalam berbagai disiplin.<br>
                    2008 - sekarang : Insinyur Profesional Utama (IPU).<br>
                    2010 - sekarang : ASEAN Chartered Professional Engineer.<br>
                    2011 - sekarang : Wakil Ketua Lembaga Pengembangan Jasa Konstruksi Nasional (LPJKN).<br>
                    2014 - sekarang : Anggota Badan Arbitrase dan Alternatif Penyelesaian Sengketa Konstruksi Indonesia (BADAPSKI).<br>
                    1960 - 1995 : Dosen Luar Biasa Jurusan Teknik Sipil Institut Teknologi Bandung (ITB) dalam mata kuliah Konstruksi Beton dan Rekayasa Gempa.<br>
                    1961 - 1964 : Dosen Luar Biasa Akademi Teknik Angkatan Darat (ATEKAD) dalam mata kuliah Konstruksi Baja.<br>
                    1962 - 1982 : Dosen Luar Biasa Jurusan Teknik Sipil Fakultas Teknik Universitas Parahyangan (UNPAR) dalam mata kuliah Konstruksi Beton / Kapita Selekta.<br>
                    1995 - 2005 : Guru Besar Jurusan Teknik Sipil Institut Teknologi Bandung (ITB) dalam mata kuliah Rekayasa Gempa dan Rekayasa Struktur Khusus.<br>
                    1998 - 2005 : Dosen Luar Biasa Fakultas Teknik Universitas Tarumanagara (UNTAR) dalam mata kuliah Rekayasa Struktur.<br>
                    2003 - 2006 : Anggota Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT).<br>
                    2005 - sekarang : Guru Besar Emeritus Fakultas Teknik Universitas Tarumanagara (UNTAR), membimbing mahasiswa program S3 Teknik Sipil, sudah 9 (sembilan) yang dibimbing meraih Doktor bidang Teknik Sipil.<br><br>
                    <strong>Karir sebagai Pengurus Organisasi Profesi:</strong><br>
                    1965 - 1969 : Ketua Persatuan Insinyur Indonesia (PII) Cabang Jawa Barat.<br>
                    1976 - 1980 : Ketua Himpunan Ahli Konstruksi Indonesia (HAKI).<br>
                    1979 - 1991 : Ketua Ikatan Alumni ITB Cabang Jawa Barat.<br>
                    1980 - 1988 : Ketua Umum, Dewan Pimpinan Nasional Ikatan Nasional Konsultan Indonesia (INKINDO).<br>
                    1996 - 2001 : Ketua Umum Alumni Sipil ITB (ALSI)<br>
                    1988 - 2011 : Ketua Dewan Kehormatan Nasional Ikatan Nasional Konsultan Indonesia (INKINDO).<br>
                    2012 - 2015 : Anggota Majelis Kehormatan Isinyur, Persatuan Insinyur Indonesia (PII).<br><br>

                    <strong>Karir sebagai Pimpinan Panitia Penyusunan Peraturan:</strong><br>
                    1971 : Ketua Panitia Penyusunan Peraturan Beton Bertulang Indonesia 1971 (PBI 1971).<br>
                    1983 : Anggota Tim Penyusunan Peraturan Perencanaan Tahan Gempa Indonesia Untuk Gedung<br>
                    1983 (PPTGI - UG 1983), yang kemudian diresmikan menjadi SNI 03-1726-1989.<br>
                    1992 : Ketua Pengarah Panitia Penyusunan Tata Cara Penghitungan Struktur Beton untuk Gedung (SNI 03-2847-1992).<br>
                    2002 : Ketua Panitia Pengarah Panitia Penyusunan Tata Cara Penghitungan Struktur Beton untuk Gedung (SNI 03-2847-2002).<br>
                    2002 : Ketua Panitia Penyusunan Tata Cara Perencanaan Ketahanan Gempa untuk Bangunan Gedung (SNI 03-1726-2002).<br><br>

                    <strong>Akhir</strong><br>
                    Beliau meninggal pada 5 April 2017.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Roesdiman -->
    <div class="modal" id="roesdiman">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Prof. Ir. Roesdiman Soegiarso, MSc., PhD</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_roesdiman_soegiarso.jpg" class="img-thumbnail mb-3">
                  <p>
                    Rektor Universitas Tarumanagara.<br><br> 
                    <strong>Pendidikan</strong><br>
                    Ia menyelesaikan pendidikan sarjananya di Fakultas Teknik Sipil Universitas Parahyangan Bandung<br><br>
                    <strong>Riwayat Pekerjaan</strong><br>
                    Rektor Universitas Tarumanagara, Dosen di Jurusan Sipil Universitas Tarumanagara dan beberapa Perguruan Tinggi Swasta<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Hadiman -->
    <div class="modal" id="hadiman">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Irjen Pol (Purn) Prof. DR. dr. Hadiman, Sp KO., SH., MBA., MSc</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_hadiman.jpg" class="img-thumbnail mb-3">
                  <p>
                    Dosen Pasca Sarjana UI. Dosen di Perguruan Tinggi Ilmu Kepolisian
                    <br><br> 
                    <strong>Pendidikan</strong><br>
                    Ia menyelesaikan pendidikan sarjananya di Fakultas Kedokteran Universitas Indonesia<br><br>
                    <strong>Riwayat Pekerjaan</strong><br>
                    Rektor Universitas Bung Karno, Anggota Dewan Riset Nasional RI, Koordinator Staf Ahli Kapolri, Kapolda Sumatera Utara<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Satya -->
    <div class="modal" id="satya">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Prof. DR. Satya Arinanto, SH., MH</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_satya_arinanto.jpg" class="img-thumbnail mb-3">
                  <p>
                    Lahir di Surabaya pada tanggal 16 November 1965, (dengan Pangkat Akademik: Guru Besar dan Golongan: IV/E), adalah Guru Besar dan Ketua Program Pascasarjana Ilmu Hukum pada Fakultas Hukum  Universitas Indonesia.
                    <br><br>
                    Dia juga merupakan Ketua Konsentrasi bidang HAM dan Good  Governance  pada  Program  Pascasarjana  Ilmu  Hukum Universitas  Indonesia.  Dia  pernah  beberapa  kali  diundang  untuk melakukan kegiatan kunjungan (visiting) dan penelitian di beberapa universitas di luar negeri, antara lain sebagai: Visiting Scholars pada Queen's  University  of  Belfast,  Northern  Ireland,  UK  (Mei,  Agustus, dan September 2008); Visiting Research Scholars pada the Institute of Social Studies, University of Tokyo, Japan (Januari 2008); Visiting Young Asian Scholars pada the University of Melbourne Law School, Australia (Februari-Maret 1997); and berbagai institusi akademik dan penelitian lainnya.
                    <br><br>
                    Dia juga pernah menjadi Fulbright Scholar on U.S. Constitution (Mei-Agustus 2001) di  Amerika Serikat. Dia seringkali diundang  sebagai  pembicara  dalam  berbagai  pertemuan akademik baik  dalam  level  nasional  maupun  internasional.  Dia  juga  telah menulis  ratusan  artikel  dan berbagai  buku dan jurnal ilmiah  dalam level  nasional  maupun  internasional.  Beberapa  artikelnya  juga pernah  diterbitkan  dalam  berbagai  buku  dan  jurnal  ilmiah internasional.
                    <br><br>
                    Dia juga pernah menjadi anggota Tim Pakar/Ahli pada beberapa Kementerian dan Lembaga Negara. Sejak Oktober  2009 hingga saat ini, dia diangkat menjadi Staf Khusus Wakil Presiden RI Bidang  Hukum;  yaitu  pada  masa  Wakil  Presiden  RI  Prof.  DR. Boediono, M.Ec. (2009-2014) dan pada masa Wakil Presiden RI Drs. M. Jusuf  Kalla (2014-sekarang).<br><br>
                    Selanjutnya  pada  10  Maret  2010 sampai  dengan  6  Agustus  2015,  ia  juga  diangkat  sebagai Wakil Ketua  merangkap  Anggota  Komisi  Kejaksaan  RI.  Pada  3  Januari 2012 hingga sekitar bulan Desember 2013, dia juga pernah menjabat sebagai  Ketua  Badan  Arbitrase  Olahraga  Indonesia  (BAORI).  Di bidang profesional,ia antara lain pernah menjabat sebagai Anggota Dewan Komisaris PT Waskita Karya Tbk. (25 Oktober 2012 - 24April 2015).<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Agus Raharjo -->
    <div class="modal" id="agus_raharjo">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Ir. Agus Rahardjo, MSM</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_agus_rahardjo.jpg" class="img-thumbnail mb-3">
                  <p>
                    Kepala Lembaga Kebijakan Pengadaan Barang dan Jasa Pemerintah (LKPP) 2010-2015<br><br>
                    <strong>Pendidikan</strong><br>
                    Ia menyelesaikan pendidikan sarjananya di Institut Teknologi 10 November<br><br>
                    <strong>Riwayat Pekerjaan</strong><br>
                    Kepala Lembaga Kebijakan Pengadaan Barang/Jasa, Ketua Dewan Pimpinan Pusat Ikatan Ahli Pengadaan Indonesia, Kepala Pusat Pengembangan Kebijakan Pengadaan Barang dan Jasa Publik Bappenas<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Hedianto -->
    <div class="modal" id="hedianto">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Ir. Hedianto W. Husaeni, MSCE., MSi</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_hedianto_w_husaeni.jpg" class="img-thumbnail mb-3">
                  <p>
                    Lahir di Cimahi 18-09-1956,  Dirjen Bina Marga, Kementerian Pekerjaan Umum Perumahan Rakyat<br><br>
                    <strong>Pendidikan</strong><br>
                    Ia Menyelesaikan Pendidikan Sarjananya Di Institut Teknologi Bandung, S2 Ekonomi Pembangunan Unand, Padang.<br>
                    S2 Construction Management Reliigh - North Carolina, USA.<br><br>
                    <strong>Riwayat Pekerjaan</strong><br>
                    Kepala Badan Pembinaan Konstruksi, Kementerian Pekerjaan Umum, Staf ahli Menteri PU, Direktur jalan dan jembatan wilayah barat Kementerian PU, Kepala bappeda Sumatera Barat, Kepala Dinas PU Sumatera barat, Pimpro Proyek Jalan Muara Bungo-Lubuk Linggau<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Sudarto -->
    <div class="modal" id="sudarto">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">DR. Ir. Sudarto, MT</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_sudarto.jpg" class="img-thumbnail mb-3">
                  <p>
                    Lahir di Bandung, 27 Mei 1951, saat ini sebagai komisaris dibeberapa bidang usaha yang bergerak dibidang: Property, Konstruksi, Keuangan dan Furniture Manufacturing.<br>
                    <br> 
                    <strong>Pendidikan</strong><br>
                    Bidang Teknik : Doktor (S3) Teknik Sipil Universitas Indonesia Lulus Tahun 2007. Magister (S2) Sipil Lulus Tahun 2001. Sarjana (S1) Lulus Tahun 1978. Non Teknik : Research Institute of Science, Delft Netherlands Pada Tahun 1985 dibidang Marketing. Magister Manajemen (S2) Bidang Keuangan, Kekhususan dibidang Pasar Modal  -  USAHID tahun 1999.<br>
                    <br> 
                    <strong>Riwayat Pekerjaan<br>
                    Organisasi Profesi :</strong><br>
                    2013-2014 : Presiden IFAWPCA ( International Federation of Asian and Western Pacific Contractors' Association).<br>
                    April 2011-2014 : Ketua Umum AKI ( Asosiasi Kontraktor Indonesia )<br>
                    2011-2013 : Vice President I,II IFAWPCA ( International Federation of Asian and Western Pacific Contractors' Association).<br>
                    2008-2011 : Ketua Umum AKI ( Asosiasi Kontraktor Indonesia )<br>
                    2008-2010 : Chairman ACF ( Asean Constructor Federation )<br>
                    2008-2011 : Ketua Kompartemen Sarana dan Prasarana Kontruksi Pada KADIN Indonesia.<br>
                    2008-2010 : Majelis LPJKN (Lembaga Pengembangan Jasa Kontruksi Nasional)<br>
                    2005-2008 : Sebagai Sekretaris Jenderal AKI.<br>
                    1996-2004 : Pengurus BPP GAPENSI (Gabungan Pelaksana Kontruksi Nasional Indonesia) dengan jabatan Terakhir Sebagai Wakil Ketua Umum.<br>
                    1996-2002 : Wakil Ketua Kompartemen Kontruksi DPP APINDO (Asosiasi Perusahaan Indonesia)<br>
                    1999-2004 : Ketua Kompartemen Organisasi KADIN Indonesia 1988-1992 : Wakil Ketua Umum ASMINDO (Asosiasi Permebelan & Kerajinan Indonesia) 
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Sarwono -->
    <div class="modal" id="sarwono">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Prof. DR. Ir. Sarwono Hardjomuljadi, MT., MH</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_sarwono_hardjomuljadi.jpg" class="img-thumbnail mb-3">
                  <p>
                    <i>
                      Born in  Pekalongan, 6 June1953,  Sarwono Hardjomuljadi, completed his Doctoral at Tarumanagara University, Magister of Engineering from ITB, Magister of Law Tarumanagara University and Bachelor Degree of Engineering from Parahyangan University. His Professional qualifications are 1st Class Professional Engineer, ASEAN Chartered Professional Engineer, Member of Dispute Board Federation, Member of Chartered Institute of Arbitrator, FIDIC Affiliate Member, FIDIC International Accredited Trainer, FIDIC Adjudicator.
                      <br><br>
                      He is the Vice Chairman of Indonesian National Board for Construction Services Development, Country Representative for Indonesia of Dispute Resolution Board Foundation, Secretary General of Centre of Arbitration and Alternative Dispute Resolution of Indonesia (BADAPSKI).   
                      <br><br>
                      Formerly he is Special Adviser to the Minister of Public Works; Vice President, Deputy Director, Chief of Staff for Operation North Sumatera and Aceh Province  of PT PLN (Persero), where he has been working since 1982  and involved in contract administration & claim settlement of the construction of 10 HEPP in Indonesia, as the Site Engineer, Project Manager and Project Director for tunnel, dam and infrastructure works of Saguling HEPP, Cirata HEPP, Renun HEPP, Sipansihaporas HEPP, Peusangan HEPP; Construction Implementation Planner for Singkarak HEPP, Kotapanjang HEPP, Besai HEPP, Musi HEPP and Tanggari HEPP.
                      <br><br>
                      He is Associate Professor on Construction Law and Contract Administration at Mercu Buana University,Tarumanagara University; Parahyangan University, Muhammadiyah Jakarta University,  Atma Jaya Yogyakarta University. He is also conduct the training on FIDIC Conditions of Contract and Management of Construction Claim as International Accredited Trainer.
                      <br><br>
                      Several Publication are Renewable Energy: Hydro Power Construction and Notes on Its Development (2008), Tunneling by New Austrian Tunneling Method (2011); Tunneling, From Construction Method till Construction Claim) (2007); Construction Claim Strategy Based on FIDIC Conditions of Contract) (2006); The Importance of Management Decisions in the Application of FIDIC Conditions of Contract for Civil Construction Works (1999) and FIDIC Bahasa Indonesia Edition Series under FIDIC's license: GCC for Construction  MDB Harmonised (2008), GCC for EPC/Turnkey (2010),  GCC Short Form (2010) and GCC for Plant Design-Build (2015).
                    </i>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Ahmad -->
    <div class="modal" id="ahmad_sudiro">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">DR. Ahmad Sudiro, S.H., M.H., M.M</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_ahmad_sudiro.jpg" class="img-thumbnail mb-3">
                  <p>
                    Saat ini sebagai Dekan dan dosen tetap Fakultas Hukum Universitas Tarumanagara serta dosen luar biasa di berbagai universitas/ perguruan tinggi lainnya, dengan Jabatan Fungsional Lektor Kepala (LK/IV-C).<br><br>
                    <strong>Pendidikan</strong><br>
                    Pascasarjana Program Doktor (S-3) Fakultas Hukum - Universitas Indonesia. Aktif mengikuti berbagai pelatihan dan pendidikan non-formal, antara lain; Course of International Transaction Business; Training of Learning Method; Training of Taxonomy Bloom; Training of International Legal Research for Lecturer; Training and Education of Journal Management; Training and Education of Grand Design Strategy Deployment Program; Training of Trainers Entrepreneurship Education; Training and Education of Professional Mediator; Training and Education of Arbiter Ad-Hoc; Training and Education of Advocate; Training and Education of Professional Leadership. <br>
                    <br>
                    <strong>Riwayat Pekerjaan</strong><br>
                    Selain itu aktif meneliti dan menulis buku serta naskah di berbagai jurnal ilmiah nasional dan internasional, antara lain; Current Air Transport Regulations in Indonesia (International Law Journal "Annals of Air and Space Law", Vol.XXXVIII, Mc.Gill University, Montreal-Canada); Aspek Hukum Transportasi Udara Jamaah Haji Indonesia (Jakarta: Raja Grafindo Persada); Hukum dan Keadilan "Nilai Keadilan Pada Pelaku Usaha dan Konsumen Dalam Hukum Transportasi Udara Niaga" (Jakarta: Raja Grafindo Persada); Hukum Udara Nasional dan Internasional Publik (Jakarta: Raja Grafindo Persada); Hukum Angkutan Udara Berdasarkan Undang-Undang RI No.1 Tahun 2009 (Jakarta: Raja Grafindo Persada); Ganti Kerugian Dalam Kecelakaan Pesawat Udara: Studi Perbandingan Amerika Serikat - Indonesia (Jakarta: Pusat Studi Hukum Ekonomi - Universitas Indonesia); Kewajiban Pengangkut Kepada Pihak yang Menderita Kerugian Dalam Undang-Undang Penerbangan Nasional (Jurnal Hukum "LEX PUBLICA", Vol.1, No.1); Asuransi Wajib Kecelakaan Penumpang dan Asuransi Tanggung Jawab Pengangkut Dalam Kecelakaan Transportasi Udara (Jurnal Hukum "KERTHA PATRIKA", Vol.37, No.2); Konsep Keadilan dan Sistem Tanggung Jawab Keperdataan Dalam Hukum Udara (Jurnal Hukum "IUS QUIA IUSTUM", Vol.19, No.3); Kajian Penyelesaian Santunan Terhadap Pengguna Jasa Angkutan Udara Nasional yang Menderita Kerugian (Warta Penelitian Perhubungan, Vol.23, No.6); Product Liability Dalam Penyelenggaraan Penerbangan (Jurnal Hukum & Pembangunan, Tahun Ke-41 No.1); "Hukum dan Pembangunan Ekonomi Indonesia di Era Reformasi" (Jurnal Ilmiah Era Hukum, No.2); "Perlindungan Hukum Pada Konsumen Pengangkutan Udara" (Jurnal Ilmiah Hukum Honeste Vivere, Vol. XIX); "Peranan Hukum Dalam Pembangunan Ekonomi di Indonesia dan Permasalahannya" (Jurnal Ilmiah Era Hukum, No.37); "Penyelesaian Sengketa Perdagangan Internasional" (Buletin Ilmiah Tarumanagara, No.34). Aktif sebagai pimpinan dan pengurus serta anggota dalam berbagai organisasi, antara lain; Dewan Pengurus Nasional Asosiasi Profesi Hukum Indonesia (DPN-APHI); Badan Arbitrase dan Alternatif Penyelesaian Sengketa Konstruksi Indonesia (BADAPSKI); Perhimpunan Advokat Indonesia (PERADI); Asosiasi Perguruan Tinggi Swasta Indonesia (APTISI) Pusat; Lembaga Sertifikasi Kompetensi Profesi Hukum Indonesia (LSKPHI); Asosiasi Dosen Indonesia (ADI); Asosiasi Mediator Profesional Indonesia (AMPI); Asosiasi Penyelenggara Program Studi Ilmu Hukum Indonesia (APPSIHI); Lembaga Akreditasi Mandiri Perguruan Tinggi Hukum Indonesia (LAM-PTHI). Selain itu aktif sebagai narasumber dan penyaji/pembahas makalah dalam berbagai pertemuan ilmiah dan konferensi, baik nasional maupun internasional.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Firman -->
    <div class="modal" id="firman">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">DR. Firman Wijaya SH., MH</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_firman_wijaya.jpg" class="img-thumbnail mb-3">
                  <p>
                    Pengacara, Dosen Fakultas Hukum Universitas Krisna Dwipayana, Tarumanegara, Advokat (Persatuan Advokat Indonesia)<br><br>
                    <strong>Pendidikan</strong><br>
                    Ia menyelesaikan pendidikan sarjananya di Fakultas Hukum Universitas Tarumanagara, Pasca Sarjana Ilmu Hukum Universitas Tarumanagara<br><br>
                    <strong>Riwayat Pekerjaan</strong><br>
                    Pengacara, Dosen Fakultas Hukum Universitas Krisna Dwipayana, Tarumanegara<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Bintang -->
    <div class="modal" id="bintang">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Bintang Perbowo, SE., MM</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_bintang_perbowo.jpg" class="img-thumbnail mb-3">
                  <p>
                    Direktur Utama PT Wijaya Karya Tbk<br><br>
                    <strong>Pendidikan</strong><br>
                    Ia menyelesaikan pendidikan sarjananya di Universitas Krisnadwipayana, Magister manajemen Prasetya Mulya<br><br>
                    <strong>Riwayat Pekerjaan</strong><br>
                    Direktur Utama PT Wijaya Karya Tbk, Direktur Keuangan PT Pembangunan prumahan (Persero), manager beberapa Proyek Konstruksi.<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Erie -->
    <div class="modal" id="erie">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Ir. Erie Heryadi</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <img src="./assets/img/img_erie_heryadi.jpg" class="img-thumbnail mb-3">
                  <p>
                    Direktur Utama PT. Amythas, Ketua DPP INKINDO DKI Jakarta.<br><br>
                    <strong>Pendidikan</strong><br>
                    Ia menyelesaikan pendidikan sarjananya di Universitas Trisakti, Jurusan Teknik Perminyakan.<br><br>
                    <strong>Riwayat Pekerjaan</strong><br>
                    Direktur Utama PT. Amythas, Ketua INKINDO DKI Jakarta, Ketua DPP INKINDO DKI Jakarta, Ketua Umum INTAKINDO, Ketua komite tetap jasa Konsultansi KADIN DKI Jakarta,Wakil Ketua Umum ( Bidang Jasa Konsultasi dan Lingkungan Hidup), Wakil Ketua Umum ( Bidang Organisasi dan Kompetensi) MKI, Masyarakat Ketenagalistrikan, Sekretaris Unsur Pengarah USBU Nasional, LPJKN
                    <br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Lebih lanjut peraturan -->
    <div class="modal" id="lihat-lebih-lanjut-peraturan">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Peraturan & Prosedur</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <div class="table-responsive">
                    <table id="tabel-peraturan-prosedur" class="table table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">No.</th>
                          <th class="text-center">Nama Dokumen</th>
                          <th class="text-center">Tanggal</th>
                          <th class="text-center">Oleh</th>
                          <th class="text-center">Link Download</th>
                        </tr>
                      </thead>
                      <tbody>
	                    <tr>
                          <td class="text-center">1</td>
                          <td class="text-left">Surat Edaran Kesekretariatan Jenderal BADAPSKI - Libur Lebaran Tahun 2021</td>
                          <td class="text-center">19-09-2020</td>
                          <td class="text-center">Admin</td>
                          <td class="text-center"><a href="./assets/document/Libur%20Lebaran%20Tahun%202021.pdf" target="_blank">.pdf</a></td>
                        </tr>
                        <tr>
                          <td class="text-center">2</td>
                          <td class="text-left">Surat Edaran Kesekretariatan Jenderal BADAPSKI II</td>
                          <td class="text-center">19-09-2020</td>
                          <td class="text-center">Admin</td>
                          <td class="text-center"><a href="./assets/document/Surat Edaran II.pdf" target="_blank">.pdf</a></td>
                        </tr>
                        <tr>
                          <td class="text-center">3</td>
                          <td class="text-left">PERATURAN & PROSEDUR ARBITRASE</td>
                          <td class="text-center">19-09-2020</td>
                          <td class="text-center">Admin</td>
                          <td class="text-center"><a href="./assets/document/new_upload.pdf" target="_blank">.pdf</a></td>
                        </tr>
                        <tr>
                          <td class="text-center">4</td>
                          <td class="text-left">Surat Keputusan Work From Home (WFH)</td>
                          <td class="text-center">19-09-2020</td>
                          <td class="text-center">Admin</td>
                          <td class="text-center"><a href="./assets/document/Surat Keputusan WFH.pdf" target="_blank">.pdf</a></td>
                        </tr>
                        <tr>
                          <td class="text-center">5</td>
                          <td class="text-left">Surat Edaran Kesekretariatan Jenderal BADAPSKI</td>
                          <td class="text-center">19-09-2020</td>
                          <td class="text-center">Admin</td>
                          <td class="text-center"><a href="./assets/document/Surat Edaran Kesekretariatan Jenderal BADAPSKI.pdf" target="_blank">.pdf</a></td>
                        </tr>
                        <tr>
                          <td class="text-center">6</td>
                          <td class="text-left">Surat Penyerahan Salinan Putusan BADAPSKI</td>
                          <td class="text-center">-</td>
                          <td class="text-center">-</td>
                          <td class="text-center"><a href="./assets/document/SK%20PENYERAHAN%20SALINAN%20PUTUSAN.pdf" target="_blank">.pdf</a></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th class="text-center">No.</th>
                          <th class="text-center">Nama Dokumen</th>
                          <th class="text-center">Tanggal</th>
                          <th class="text-center">Oleh</th>
                          <th class="text-center">Link Download</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- <div class="card">
                    <div class="card-header">
                      Featured
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Surat Edaran Kesekretariatan Jenderal BADAPSKI II</li>
                      <li class="list-group-item">PERATURAN & PROSEDUR ARBITRASE</li>
                      <li class="list-group-item">Surat Keputusan Work From Home (WFH)</li>
                      <li class="list-group-item">Surat Edaran Kesekretariatan Jenderal BADAPSKI</li>
                    </ul>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <div class="modal" id="lihat-lebih-lanjut-opini">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Opini</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-sm">
                  <div class="table-responsive">
                    <table id="tabel-opini" class="table table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">No.</th>
                          <th class="text-center">Nama Dokumen</th>
                          <th class="text-center">Tanggal</th>
                          <th class="text-center">Oleh</th>
                          <th class="text-center">Link Download</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">1</td>
                          <td class="text-left">Pekerjaan Pembangunan Transportasi</td>
                          <td class="text-center">24-02-2021</td>
                          <td class="text-center">Admin</td>
                          <td class="text-center"><a href="./assets/document/OPINI PEKERJAAN PEMBANGUNAN TRANSPORTASI.pdf" target="_blank">.pdf</a></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th class="text-center">No.</th>
                          <th class="text-center">Nama Dokumen</th>
                          <th class="text-center">Tanggal</th>
                          <th class="text-center">Oleh</th>
                          <th class="text-center">Link Download</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- <div class="card">
                    <div class="card-header">
                      Featured
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Surat Edaran Kesekretariatan Jenderal BADAPSKI II</li>
                      <li class="list-group-item">PERATURAN & PROSEDUR ARBITRASE</li>
                      <li class="list-group-item">Surat Keputusan Work From Home (WFH)</li>
                      <li class="list-group-item">Surat Edaran Kesekretariatan Jenderal BADAPSKI</li>
                    </ul>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Lebih lanjut kegiatan -->
    <div class="modal" id="lihat-lebih-lanjut-kegiatan">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Kegiatan</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-sm">
                  
                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- Modal Lebih lanjut galeri -->
    <div class="modal" id="lihat-lebih-lanjut-galeri">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Galeri</h4>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          </div>
          <!--/.Modal Header -->
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-sm">

                </div>
              </div>
            </div>
          </div>
          <!--/.Modal Body -->
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
          <!--/.Modal Footer -->
        </div>
        <!--/.Modal Content -->
      </div>
      <!--/.Modal Dialog -->
    </div>
    <!--/.Modal -->
    <!-- <div id="mybutton">
      <button class="feedback">Feedback</button>
    </div> -->
    <a href="https://api.whatsapp.com/send?phone=6281296847472&text=Hello%2C%20%0A%0ASaya%20mendapatkan%20info%20dari%20web%20badapski%2C%20tolong%20hubungi%20saya%20segera.%0A%0ATerimakasih." class="float" target="_blank">
      <i class="fab fa-whatsapp my-float"></i>
    </a>
    <a href="#beranda" class="js-scroll-trigger float-top-right" data-aos="fade-down">
      <i class="fa fa-chevron-circle-up my-float-top-right"></i>
    </a>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
<!--        <div class="container">-->
<!--         Visitor: <br />-->
<!--          <a href='https://www.symptoma.it/'>check out Symptoma</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=a82d9a30fc2998ccaf9c052dc2b754c50ed921c9'></script>-->
<!--<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/757472/t/1"></script>-->
<!--        </div>-->
        <br />
        <div class="container">
          <?php
            $page_id = 1;
            $visitor_ip = $_SERVER['REMOTE_ADDR']; 
            add_view($conn, $visitor_ip, $page_id);

            $total_website_views = total_views($conn);
            //echo "<strong>Total Website Views:</strong> " . $total_website_views;
          ?>
          <?php
	         // Jenis Browser
			$browser = $_SERVER['HTTP_USER_AGENT'];
			$chrome = '/Chrome/';
			$firefox = '/Firefox/';
			$ie = '/IE/';
			$safari = '/Safari/';
			if (preg_match($chrome, $browser)) {
				$data = "Chrome/Opera";
			} else if (preg_match($firefox, $browser)) {
			    $data = "Firefox";
			} else if (preg_match($ie, $browser)) {
			    $data = "IE";
			} else if (preg_match($safari, $browser)) {
				$data = "Safari";
			} else {
				$data = "Other Browser";
			}
			
			
			// untuk mengambil informasi dari pengunjung
			$ipaddress = $_SERVER['REMOTE_ADDR']."";
			$browser = $data;
			$date = date('Y-m-d');
			$counter = 1;
			
			// Daftarkan Kedalam Session Lalu Simpan Ke Database
			if (!isset($_SESSION['counterdb'])){
			$_SESSION['counterdb']=$ipaddress;
			mysqli_query($conn,"INSERT INTO counterdb (date,ipaddress,counter,browser) VALUES ('".$date."','".$ipaddress."','".$counter."','".$browser."')");
			} 
			
			// Hitung Jumlah Visitor
			$kemarin  = date("Y-m-d",mktime(0,0,0,date('m'),date('d')-1,date('Y')));
			$hari_ini  = mysqli_fetch_array(mysqli_query($conn,'SELECT sum(counter) AS hari_ini FROM counterdb WHERE date="'.date("Y-m-d").'"'));
			$kemarin = mysqli_fetch_array(mysqli_query($conn,'SELECT sum(counter) AS kemarin FROM counterdb WHERE date="'.$kemarin.'"'));
			$sql = mysqli_fetch_array(mysqli_query($conn,'SELECT sum(counter) as total FROM counterdb'));
          ?>
        </div>
        <br />
        <div class="container">Copyright © B A D A P S K I 2020. All Rights Reserved.</div>
    </footer>
    <script>
      AOS.init({
        duration: 1200,
      });
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <!-- Core theme JS-->
    <script src="./assets/js/scripts.js"></script>
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/validator.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            //semua element dengan class text-warning akan di sembunyikan saat load
            $('.text-warning').hide();
            //untuk mengecek bahwa semua textbox tidak boleh kosong
            $('input').each(function(){ 
                $(this).blur(function(){ 
                    if (! $(this).val()){ 
                        return get_error_text(this);
                    } else {
                        $(this).removeClass('no-valid'); 
                        $(this).parent().find('.text-warning').hide();
                        $(this).closest('div').removeClass('has-warning');
                        $(this).closest('div').addClass('has-success');
                        $(this).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-warning-sign');
                        $(this).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-ok');
                    }
                });
            });
            //mengecek textbox Nama Valid Atau Tidak
            $('#nama').blur(function(){
                var nama= $(this).val();
                var len= nama.length;
                if(len>0){ 
                    if(!valid_nama(nama)){ 
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Invalid Name");
                        return apply_feedback_error(this);
                    } else {
                        if (len>35){ 
                            $(this).parent().find('.text-warning').text("");
                            $(this).parent().find('.text-warning').text("Maximal 35 Character");
                            return apply_feedback_error(this);
                        }
                    }
                } 
            });
            //mengecek text box email
            $('#email').blur(function(){
                var email= $(this).val();
                var len= email.length;
                if(len>0){ 
                    if(!valid_email(email)){ 
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Invalid Email");
                        return apply_feedback_error(this);
                    } else {
                        if (len>35){ 
                            $(this).parent().find('.text-warning').text("");
                            $(this).parent().find('.text-warning').text("Maximal 35 Character");
                            return apply_feedback_error(this);
                        } else {
                            var valid = false;
                            $.ajax({
                                url: "checkemail.php",
                                type: "POST",
                                data: "email="+email,
                                dataType: "text",
                                success: function(data){
                                    if (data==0){
                                        $('#email').parent().find('.text-warning').text("");
                                        $('#email').parent().find('.text-warning').text("Email already exists");
                                        return apply_feedback_error('#email');
                                    }
                                }
                            });
                        }
                    }
                } 
            });
            //mengecek nomer hp
            $('#hp').blur(function(){
                var hp=$(this).val();
                var len=hp.length;
                if (len>0 && len<=10){
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Too short phone number");
                    return apply_feedback_error(this);
                } else {
                    if(!valid_hp(hp)){
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Invalid phone number format");
                        return apply_feedback_error(this);
                    } else {
                        if (len >13){
                            $(this).parent().find('.text-warning').text("");
                            $(this).parent().find('.text-warning').text("Too long phone number");
                            return apply_feedback_error(this);
                        }
                    }
                }
            });
        });

        //fungsi cek nama
        function valid_nama(nama) {
            var pola= new RegExp(/^[a-z A-Z]+$/);
            return pola.test(nama);
        }
        //fungsi cek email
        function valid_email(email){
            var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
            return pola.test(email);
        }
        //fungsi cek phone 
        function valid_hp(hp){
            var pola = new RegExp(/^[0-9-+]+$/);
            return pola.test(hp);
        }
        //menerapkan gaya validasi form bootstrap saat terjadi eror
        function apply_feedback_error(textbox){
            $(textbox).addClass('no-valid'); //menambah class no valid
            $(textbox).parent().find('.text-warning').show();
            $(textbox).closest('div').removeClass('has-success');
            $(textbox).closest('div').addClass('has-warning');
            $(textbox).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-ok');
            $(textbox).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-warning-sign');
        }

        //untuk mendapat eror teks saat textbox kosong, digunakan saat submit form dan blur fungsi
        function get_error_text(textbox){
            $(textbox).parent().find('.text-warning').text("");
            $(textbox).parent().find('.text-warning').text("Fill the box is required");
            return apply_feedback_error(textbox);
        }
    </script>
  </body>
</html>