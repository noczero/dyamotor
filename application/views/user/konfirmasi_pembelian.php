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
						<li class="breadcrumb-item"><a href="<?php echo base_url('home/beli/').$id ?>" class="breadcrumb-link">Tahap 1 </a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url('home/beli_mobil_tahap2/').$id ?>" class="breadcrumb-link">Tahap 2 </a></li>
						<li class="breadcrumb-item active" aria-current="page">Konfirmasi Pembayaran</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card influencer-profile-data">
			<h3 class="card-header">Konfirmasi Pembayaran - <small> <?php echo $user_data['id_beli'] ?> / <?php echo $user_data['tgl_transaksi'] ?></small> </h3>
			<small class="card-header">Pastikan data identitas anda benar</small>
			<div class="card-body">
				<div class="row">
					<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="text-center">
							<img src="<?php echo base_url('assets/images/foto_ktp/').$user_data['foto_ktp'] ?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
						</div>
					</div>
					<div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
						<div class="user-avatar-info">
							<div>
								<h3>Identitas Diri</h3>
							</div>
							<div class="m-b-20">
								<div class="user-avatar-name">
									<h2 class="mb-1"><?php echo $user_data['nama_lengkap'] ?></h2>
								</div>
							</div>							
							<div class="user-avatar-address">
								<p class="border-bottom pb-3">
					
									<span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i><?php echo $user_data['alamat'] ?>
										- <?php echo $user_data['kode_pos'] ?>
									</span>
									<span class="mb-2 ml-xl-4 d-xl-inline-block d-block">HP : <?php echo $user_data['no_hp'] ?>  </span>
									<span class=" mb-2 d-xl-inline-block d-block ml-xl-4">No. Rekening : <?php echo $user_data['no_rekening'] ?>
									</span>

									<span class=" mb-2 d-xl-inline-block d-block ml-xl-4">No. KTP : <?php echo $user_data['no_ktp'] ?>
									</span>
					
								</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card influencer-profile-data">
			<small class="card-header">Pastikan data kendaraan sudah sesuai!</small>
			<div class="card-body">
				<div class="row">
					<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="text-center">
							<img src="<?php echo base_url('assets/images/').$user_data['gambar'] ?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
						</div>
					</div>
					<div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
						<div class="user-avatar-info">
							<div>
								<h3>Data Kendaraan</h3>
							</div>
							<div class="m-b-20">
								<div class="user-avatar-name">
									<h2 class="mb-1"><?php echo $user_data['model_mobil'] ?></h2>
								</div>
							</div>							
							<div class="user-avatar-address">
								<p class="border-bottom pb-3">
					
									<span class="d-xl-inline-block d-block mb-2"><i class="fa fa-car mr-2 text-primary "></i><?php  echo $user_data['merek_mobil'] ?>
									</span>
									<span class="mb-2 ml-xl-4 d-xl-inline-block d-block"> Tipe : <?php echo $user_data['tipe_mobil'] ?>  </span>
									<span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Tahun : <?php echo $user_data['tahun'] ?>
									</span>

									<span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Warna : <?php echo $user_data['warna'] ?>
									</span>

									<span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Transmisi : <?php echo $user_data['transmisi'] ?>
									</span>

									<span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Bahan Bakar : <?php echo $user_data['bahan_bakar'] ?>
									</span>
									
									<h4 class=" mb-2 d-xl-inline-block d-block ml-xl-4 "> Harga : Rp.<?php echo $user_data['harga'] ?>
									</h4>					
								</p>
								
							</div>
						</div>
					</div>

				
					
				</div>
			</div>
		</div>
	</div>
</div>	<div class="text-center">
						<a class="btn btn-primary" href="<?php echo base_url('home/transfer/').$user_data['id_beli'] ?>"> Beli </a>
					</div>