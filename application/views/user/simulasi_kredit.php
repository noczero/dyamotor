
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
						<li class="breadcrumb-item active" aria-current="page">Simulasi Kredit</li>
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
			<h3 class="card-header">Simulasi Kredit </h3>
			<small class="card-header">Simulasikan kredit pembelian mobil Anda!</small>
			<div class="card-body">
				<?php if(validation_errors() || null !== $this->session->flashdata('errors')): ?>
					<div class="alert alert-danger">
						<?php echo validation_errors(); ?>
						<?php echo $this->session->flashdata('errors')['upload']; ?>
					</div>
				<?php endif; ?>
				<form id="validationform" action="<?php echo base_url('home/insert_kredit/').$id_beli.'/'.$id_mobil ?>" method="POST">
					
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Harga Kendaraan</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('harga') ? set_value('harga') : $harga ?>" name="harga" class="form-control" disabled>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Uang Muka </label>
						<div class="col-12 col-sm-8 col-lg-6">
							<small>Uang muka boleh lebih dari yang ditentukan.</small>
							<input type="number" min="<?php echo $uang_muka ?>" value="<?php echo set_value('uang_muka') ? set_value('uang_muka') : $uang_muka ?>" name="uang_muka" class="form-control" >
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Kondisi Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="kondisi" value="0" <?php echo set_value('kondisi') ? set_value('kondisi') : $kondisi == '0' ? 'checked' : ''?> class="custom-control-input" disabled><span class="custom-control-label">Baru</span>
						</label>
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="kondisi" value="1" <?php echo set_value('kondisi') ? set_value('kondisi') : $kondisi == '1' ? 'checked' : ''?> class="custom-control-input" disabled><span class="custom-control-label">Bekas</span>
						</label>
						</div>
					</div>
						<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Asuransi</label>
						<div class="col-12 col-sm-8 col-lg-6">
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="asuransi" value="1" <?php echo set_value('asuransi')?> class="custom-control-input" required><span class="custom-control-label">Comperhensive</span>
						</label>
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="asuransi" value="2" <?php echo set_value('asuransi')?> class="custom-control-input" required><span class="custom-control-label">Combine</span>
						</label>
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="asuransi" value="3" <?php echo set_value('asuransi')?> class="custom-control-input" required><span class="custom-control-label">TLO</span>
						</label>
						</div>
					</div>

					
				   <div class="form-group row text-right">
						<div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
							<a class="btn btn-default" href="<?php echo base_url('home/beli_mobil_tahap2/').$id_mobil ?>">Back</a>
							<button type="submit" class="btn btn-space btn-primary">Next</button>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- end valifation types -->
	<!-- ============================================================== -->
</div>