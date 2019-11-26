
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
					<li class="breadcrumb-item active" aria-current="page">Tahap 2</li>
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
			<h3 class="card-header">Tahap 2  </h3>
			<small class="card-header">Pilih pembayaran!</small>
			<div class="card-body">
				<?php if(validation_errors() || null !== $this->session->flashdata('errors')): ?>
					<div class="alert alert-danger">
						<?php echo validation_errors(); ?>
						<?php echo $this->session->flashdata('errors')['upload']; ?>
					</div>
				<?php endif; ?>
				<form id="validationform" action="<?php echo base_url('home/proses_beli_mobil_tahap2/').$id ?>" method="POST">
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Metode Pembayaran</label>
						<!-- metode pembayran 1 : cash, 2 : kredit -->
						<div class="col-12 col-sm-8 col-lg-6">
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="metode_pembayaran" value="1" <?php echo set_value('metode_pembayaran') == '1' ? 'checked' : ''?> class="custom-control-input"><span class="custom-control-label" required>Cash / Tunai</span>
						</label>
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="metode_pembayaran" value="2" <?php echo set_value('metode_pembayaran') == '2' ? 'checked' : ''?> class="custom-control-input"><span class="custom-control-label" required>Kredit</span>
						</label>
						</div>
					</div>

					<div id="metode_pembayaran_bank">
						<div class="form-group row">
							<label class="col-12 col-sm-3 col-form-label text-sm-right">Transfer via Bank </label>
							<!-- metode pembayran 1 : cash, 2 : kredit -->
							<div class="col-12 col-sm-8 col-lg-6">
							<label class="custom-control custom-radio custom-control-inline">
								<input type="radio" name="transfer_bank" value="BCA" <?php echo set_value('transfer_bank') == 'BCA' ? 'checked' : ''?> class="custom-control-input" required><span class="custom-control-label">BCA</span>
							</label>
							<label class="custom-control custom-radio custom-control-inline">
								<input type="radio" name="transfer_bank" value="Mandiri" <?php echo set_value('transfer_bank') == 'Mandiri' ? 'checked' : ''?> class="custom-control-input" required><span class="custom-control-label">Mandiri</span>
							</label>
							</div>
						</div>
					</div>

					
				   <div class="form-group row text-right">
						<div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
							<a class="btn btn-default" href="<?php echo base_url("home/beli/").$id ?>">Back</a>
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