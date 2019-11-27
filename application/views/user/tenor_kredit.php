<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Beli Mobil</h2>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Beli </a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url('home/beli/').$id_mobil ?>" class="breadcrumb-link">Tahap 1 </a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url('home/beli_mobil_tahap2/').$id_mobil ?>" class="breadcrumb-link">Tahap 2 </a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url('home/simulasi_kredit/').$id_beli.'/'.$id_mobil ?>" class="breadcrumb-link">Simulasi Kredit </a></li>
						<li class="breadcrumb-item active" aria-current="page">Tenor Kredit</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<!-- ============================================================== -->
	<!-- valifation types -->
	<!-- ============================================================== -->
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="section-block">
			<h5 class="section-title">Tenor Kredit</h5>
			<p>Pilih angsuran pembayaran, dan lama tenor</p>
		</div>
		<div class="simple-card">
			<ul class="nav nav-tabs" id="myTab5" role="tablist">
				<li class="nav-item">
					<a class="nav-link active show border-left-0" id="home-tab-simple" data-toggle="tab" href="#home-simple" role="tab" aria-controls="home" aria-selected="false">ADDM (Angsuran Dibayar Dimuka)</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " id="profile-tab-simple" data-toggle="tab" href="#profile-simple" role="tab" aria-controls="profile" aria-selected="true">ADDB (Angsuran Dibayar Belakang)</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent5">
				<div class="tab-pane fade active show" id="home-simple" role="tabpanel" aria-labelledby="home-tab-simple">
					<div class="container">
						
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">Tenor</th>
								<th scope="col">Total Bayar Pertama</th>
								<th scope="col">Angsuran</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$jumlah_angusran_pertahun = 11;
								for ($i=1; $i <= 5; $i++) {
									$angsuran = (int) $uang_angsuran / ($i * $jumlah_angusran_pertahun);
									$uang_pertama = (int) $uang_muka + $angsuran;
								
							 ?>
							<tr>
								<th scope="row"><?php echo $i ?> Tahun</th>
								<td>Rp.<?php echo round($uang_pertama) ?></td>
								<td>Rp.<?php echo round($angsuran) ?></td>
								<td><a class="btn btn-primary" href="<?php echo base_url('home/apply_kredit').'?bayar='.round($uang_pertama).'&angsuran='.round($angsuran).'&tenor='.$i.'&id_kredit='.$id_kredit.'&metode_kredit=1' ?>"> Apply</a></td>
							</tr>

							<?php 
							}
							 ?>
						</tbody>
					</table>

					<p> Angsuran ini tanpa bunga!</p>
					</div>
					
				</div>
				<div class="tab-pane fade " id="profile-simple" role="tabpanel" aria-labelledby="profile-tab-simple">
					<div class="container">
						
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">Tenor</th>
								<th scope="col">Total Bayar Pertama</th>
								<th scope="col">Angsuran</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$jumlah_angusran_pertahun = 12;
								for ($i=1; $i <= 5; $i++) {
									$angsuran = (int) $uang_angsuran / ($i * $jumlah_angusran_pertahun);
	
								
							 ?>
							<tr>
								<th scope="row"><?php echo $i ?> Tahun</th>
								<td>Rp.<?php echo round($uang_muka) ?></td>
								<td>Rp.<?php echo round($angsuran) ?></td>
								<td><a class="btn btn-primary" href="<?php echo base_url('home/apply_kredit').'?bayar='.round($uang_pertama).'&angsuran='.round($angsuran).'&tenor='.$i.'&id_kredit='.$id_kredit.'&metode_kredit=2' ?>"> Apply</a></td>
							</tr>

							<?php 
							}
							 ?>
						</tbody>
					</table>

					<p> Angsuran ini tanpa bunga!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>