@extends('layouts.main')

@include('partials.navbar')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <h1>Selamat Datang</h1>
    <h2>Website Resmi Puskesmas Malikussaleh</h2>
    <a href="/antrian" class="btn-get-started scrollto">Ambil Antrian</a>
  </div>
</section><!-- End Hero -->
<main id="main">
  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container">

      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3>Sistem Antrian Online</h3>
            <p>
              Ini adalah Sistem Antrian Online Puskesmas dimana setiap pengunjung dapat mengambil antrian Sesuai Poliklinik terlebih dahulu dari rumah
            </p>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-plus-medical"></i>
                  <h4>Poli Umum</h4>
                  <p>Pelayanan Poli Umum adalah pelayanan pemeriksaan medis berupa pemeriksaan kesehatan, pengobatan, dan edukasi kepada pasien dalam rangka meningkatkan kesehatan perorangan dan masyarakat.</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-dna"></i>
                  <h4>Poli Gigi</h4>
                  <p>Pelayanan Kesehatan Gigi dan Mulut merupakan pelayanan kesehatan gigi dan mulut berupa pemeriksaan kesehatan gigi dan mulut, pengobatan dan pemberian tindakan medis dasar kesehatan gigi dan mulut.</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bxs-first-aid"></i>
                  <h4>Poli THT</h4>
                  <p>Pelayanan Kesehatan THT atau Telinga Hidung Tenggorokan berupa pemeriksaan kesehatan, pengobatan, dan pemberian tindakan medis pada Telinga Hidung Tenggorokan</p>
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>

      </div>

    </div>
  </section><!-- End Why Us Section -->



  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fas fa-user-md"></i>
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Dokter</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="far fa-hospital"></i>
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Unit Pelayanan</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="fas fa-flask"></i>
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Laboratorium</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="fas fa-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
            <p>Penghargaan</p>
          </div>

        </div>

      </div>

    </div>


  </section><!-- End Counts Section -->