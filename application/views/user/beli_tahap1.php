
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
					<li class="breadcrumb-item active" aria-current="page">Tahap 1</li>
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
	
	<!-- ============================================================== -->
	<!-- valifation types -->
	<!-- ============================================================== -->

	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h3 class="card-header">Tahap 1  </h3>
			<small class="card-header">Isi data diri anda dengan lengkap kemudian simpan!</small>
			<div class="card-body">
				<?php if(validation_errors() || null !== $this->session->flashdata('errors')): ?>
					<div class="alert alert-danger">
						<?php echo validation_errors(); ?>
						<?php echo $this->session->flashdata('errors')['upload']; ?>
					</div>
				<?php endif; ?>
				<?php 
					//cek sudah ada data diri belom
					if (!isset($user_data[0])){
						// belom ada data diri, user input data
				 ?>


				<form id="validationform" action="<?php echo base_url('home/beli_mobil_tahap1/').$id ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Pemilik</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('nama_lengkap') ?>" name="nama_lengkap" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">No. KTP</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="number" value="<?php echo set_value('no_ktp') ?>" name="no_ktp" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('alamat') ?>" name="alamat" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Kode Pos</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="number" value="<?php echo set_value('kode_pos') ?>" name="kode_pos" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">No. Hp</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="number" value="<?php echo set_value('no_hp') ?>" name="no_hp" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">No. Rekening</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="number" value="<?php echo set_value('no_rekening') ?>" name="no_rekening" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Upload Foto KTP</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="file" name="foto_ktp" id="foto_ktp" class="form-control">
						</div>
					</div>
					
				   <div class="form-group row text-right">
						<div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
							<button type="submit" class="btn btn-space btn-primary">Next</button>
							<button  type="reset" class="btn btn-space btn-secondary">Cancel</button>
						</div>
					</div>
				</form>


				<?php 
				} else {
					// user sudah ada data tinggal edit
				 ?>
				 <form id="validationform" action="<?php echo base_url('home/edit_mobil_tahap1/').$user_data[0]['id_userdata'].'/'.$id
				  ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Pemilik</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('nama_lengkap') ? set_value('nama_lengkap') : $user_data[0]['nama_lengkap'] ?>" name="nama_lengkap" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">No. KTP</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="number" value="<?php echo set_value('no_ktp') ? set_value('no_ktp') : $user_data[0]['no_ktp'] ?>" name="no_ktp" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('alamat') ? set_value('alamat') : $user_data[0]['alamat'] ?>" name="alamat" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Kode Pos</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="number" value="<?php echo set_value('kode_pos') ? set_value('kode_pos') : $user_data[0]['kode_pos'] ?>" name="kode_pos" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">No. Hp</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="number" value="<?php echo set_value('no_hp') ? set_value('no_hp') : $user_data[0]['no_hp'] ?>" name="no_hp" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">No. Rekening</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="number" value="<?php echo set_value('no_rekening') ? set_value('no_rekening') : $user_data[0]['no_rekening'] ?>" name="no_rekening" class="form-control">
						</div>
					</div>
					<div class="text-center">
						
					<img class="img img-responsive" style="width:50%" src="<?php echo base_url('/assets/images/foto_ktp/').$user_data[0]['foto_ktp'] ?>">
					</div>

					<div class="form-group row">
						

						<label class="col-12 col-sm-3 col-form-label text-sm-right">Upload Foto KTP</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="file" name="foto_ktp" id="foto_ktp" class="form-control">
						</div>
					</div>
					
				   <div class="form-group row text-right">
						<div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
							<button type="submit" class="btn btn-space btn-primary">Save</button>
							<a class="btn btn-default" href="<?php echo base_url("home/beli_mobil_tahap2/").$id ?>">Next</a>
						</div>
					</div>
				</form>


				 <?php 
				 //endif
				 } ?>

			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- end valifation types -->
	<!-- ============================================================== -->





	
</div>