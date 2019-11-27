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
						<li class="breadcrumb-item"><a href="<?php echo base_url('home/konfirmasi_pembelian_kredit/').$data_kredit['id_kredit']?>" class="breadcrumb-link">Konfirmasi Pembelian Kredit</a></li>
						<li class="breadcrumb-item active" aria-current="page">Transfer</li>
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
		<div class="card">
			<h3 class="card-header">Transfer - <small> <?php echo $belimobil['id_beli'] ?> / <?php echo $belimobil['tgl_transaksi'] ?></small> </h3>
			
			<div class="card-body">
				<div class="container">
					<div class="text-center">
						<h2>Mohon segera melakukan pembayaran!</h2>
						<br>
						<h2>Jumlah yang harus dibayar</h2>
						<br>
						<h2 class="text-secondary">Rp. <?php echo $data_kredit['bayar'] ?></h2>
					</div>
					<br>
					<div>
						<h3>Informasi Rekening Tujuan</h3>
						<h4><?php echo $rekening['nama_bank'] ?></h4>
						<h4><?php echo $rekening['no_rek'] ?></h4>
						<h4>Atas Nama : <?php echo $rekening['atas_nama'] ?></h4>
					</div>
					<div class="row">
						<div class="col-md-6"> <a class="btn btn-primary" href="<?php echo base_url("home/beli/") ?>" data-toggle="modal" data-target="#upload_bukti">Unggah Bukti</a></div>
						<div class="col-md-6 "> <a class="btn btn-default float-right" href="<?php echo base_url("home")?>">Home</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="upload_bukti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
				<a href="#" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</a>
			</div>
			<div class="modal-body text-center">
				<p>Silahkan Upload bukti pembayaran! </p>
				<?php if(validation_errors() || null !== $this->session->flashdata('errors')): ?>
					<div class="alert alert-danger">
						<?php echo validation_errors(); ?>
						<?php echo $this->session->flashdata('errors')['upload']; ?>
					</div>
				<?php endif; ?>
				<form id="validationform" action="<?php echo base_url('home/upload_bukti_pembayaran/').$belimobil['id_beli'] ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<div class="col-12">
							<input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control" required>
						</div>
					</div>

				
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Upload</button>
				<a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
			</div>
			</form>
		</div>
	</div>
</div>