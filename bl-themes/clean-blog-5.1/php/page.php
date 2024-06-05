<!-- Page Header -->
<!-- Page Header -->
<header class="masthead" style="background-image: url('https://vokasi.unair.ac.id/wp-content/uploads/2022/12/gedung-vokasi-baru.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="post-heading">
					<h1><?php echo ($page->title() == 'HOME') ? 'D4 TEKNOLOGI LABORATORIUM MEDIK' : $page->title(); ?></h1></h1>
					<h2 class="subheading"><?php echo $page->description() ?></h2>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<!-- Post Content -->
<article>
<div class="container">
<div class="row">
	<div class=" col-md-10 mx-auto">
	<?php if ($page->title() == 'HOME') { ?>
      <h5 class="text-center text-uppercase heading-1"><span>Berita dan Agenda</span></h5>
      <br>
  		<?php Theme::plugins("newsSlider"); ?>
	<?php } ?>
	<br>
	
	<?php echo $page->content() ?>
	<br>
	<?php if ($page->title() == 'HOME') { ?>
      <h5 class="text-center text-uppercase heading-1"><span>Partnership</span></h5>
      <div style="padding: 10px;">
    <p class="text-center" style="font-size: 0.9rem; margin-bottom: 5px;">Lab Klinik Prodia</p>
    <p class="text-center" style="font-size: 0.9rem; margin-bottom: 5px;">Lab Klinik Paramita</p>
    <p class="text-center" style="font-size: 0.9rem; margin-bottom: 5px;">RSUD Ibnu Sina Gresik</p>
    <p class="text-center" style="font-size: 0.9rem; margin-bottom: 5px;">RSUD Dr. Iskak Tulungagung</p>
    <p class="text-center" style="font-size: 0.9rem; margin-bottom: 5px;">RSPAL Dr Ramelan Surabaya</p>
    <p class="text-center" style="font-size: 0.9rem; margin-bottom: 5px;">RSUD Haji</p>
    <p class="text-center" style="font-size: 0.9rem; margin-bottom: 5px;">Universiti Teknologi Mara Malaysia</p>
    <p class="text-center" style="font-size: 0.9rem; margin-bottom: 5px;">The Chinese University of Hongkong</p>
    <p class="text-center" style="font-size: 0.9rem; margin-bottom: 5px;">Asia University Taiwan</p>
  </div>
      <br>
  		
	<?php } ?>
	</div>
</div>
</div>
</article>

<!-- Bootstrap Modal -->
<?php if ($page->title() == 'HOME') { ?>
<button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target=".bd-example-modal-lg" id="trigger-modal">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal content here -->
      <div class="modal-header">
        <h5 class="modal-title text-center" id="myLargeModalLabel">Disclaimer !!!</h5>
      </div>
      <div class="modal-body">
        <!-- Your modal content here -->
  		<p class="text-center" style="font-size: 0.9rem;">Website ini bukanlah merupakan website resmi dari Program Studi D4 Tenknologi Laboratorium Medik.<br>Website ini dibuat atas keperluan untuk Ujian Akhir Semester kami mahasiswa D4 Teknik Informatika, pada Matakuliah Pemrograman Web Berbasis Framework Teori kelas A2, Kelompok 1.<br><br>Anggota Kelompok :<br><br> Helmi Said Hidayatulloh - 434231080<br>Muchamad Erlangga Setiawan - 434231095<br>Evika Pitaloka - 434231100<br>Aureli Eci Salsabila - 434231011<br><br>Salam hangat: Administrator</p>
      </div>
      <div class="modal-footer">
        <a class="btn custom-btn rounded rounded-lg text-white" data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    if (window.location.pathname === '/') { // Check if it is the home page
      $('#trigger-modal').click();
    }
  });
</script>
<?php } ?>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>

<hr>
