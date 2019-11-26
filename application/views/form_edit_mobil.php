
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="page-header">
		<h2 class="pageheader-title">Form Mobil </h2>
		<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
		<div class="page-breadcrumb">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Mobil</a></li>
					<li class="breadcrumb-item active" aria-current="page">Form Mobil</li>
				</ol>
			</nav>
		</div>
	</div>
</div>
</div>
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
<div class="row">
	<!-- ============================================================== -->
	<!-- valifation types -->
	<!-- ============================================================== -->
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h3 class="card-header">Form Mobil</h3>
			<div class="card-body">
				<?php if(validation_errors() || null !== $this->session->flashdata('errors')): ?>
					<div class="alert alert-danger">
						<?php echo validation_errors(); ?>
						<?php echo $this->session->flashdata('errors')['upload']; ?>
					</div>
				<?php endif; ?>
				<form id="validationform" action="<?php echo base_url('admin/edit_mobil') ?>" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id_mobil" value="<?php echo $data['id_mobil'] ?>">
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Nomor Plat Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('no_plat') ? set_value('no_plat') : $data['no_plat'] ?>" name="no_plat" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Nomor Mesin Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('no_mesin') ? set_value('no_mesin') : $data['no_mesin'] ?>" name="no_mesin" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Nomor Rangka Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('no_rangka') ? set_value('no_rangka') : $data['no_rangka'] ?>" name="no_rangka" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Merek Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('merek_mobil') ? set_value('merek_mobil') : $data['merek_mobil'] ?>" name="merek_mobil" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Model Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('model_mobil') ? set_value('model_mobil') : $data['model_mobil'] ?>" name="model_mobil" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Tipe Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
						<select name="tipe_mobil" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
							<option <?php echo (set_value('tipe_mobil') ? set_value('tipe_mobil') : $data['tipe_mobil'] == 'SUV') ? 'selected' : ''?> value="SUV">SUV</option>
							<option <?php echo (set_value('tipe_mobil') ? set_value('tipe_mobil') : $data['tipe_mobil'] == 'Sedan') ? 'selected' : ''?> value="Sedan">Sedan</option>
							<option <?php echo (set_value('tipe_mobil') ? set_value('tipe_mobil') : $data['tipe_mobil'] == 'LCGC') ? 'selected' : ''?> value="LCGC">LCGC</option>
						</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Transmisi Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="transmisi" <?php echo (set_value('transmisi') ? set_value('transmisi') : $data['transmisi']) == 'AT' ? 'checked' : ''?> value="AT" class="custom-control-input"><span class="custom-control-label">AT</span>
						</label>
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="transmisi" <?php echo (set_value('transmisi') ? set_value('transmisi') : $data['transmisi']) == 'MT' ? 'checked' : ''?> value="MT" class="custom-control-input"><span class="custom-control-label">MT</span>
						</label>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Jarak Tempuh Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('jarak_tempuh') ? set_value('jarak_tempuh') : $data['jarak_tempuh'] ?>" name="jarak_tempuh" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Tahun Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<select name="tahun" class="custom-select">
								<?php for($i = date("Y");$i >= 1980;$i--) : ?>
									<option <?php echo (set_value('tahun') ? set_value('tahun') : $data['tahun'] == $i) ? 'selected' : ''?> value="<?php echo $i ?>"><?php echo $i ?></option>
								<?php endfor; ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Warna Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('warna') ? set_value('warna') : $data['warna'] ?>" name="warna" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Bahan Bakar Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="bahan_bakar" value="bensin" <?php echo (set_value('bahan_bakar') ? set_value('bahan_bakar') : $data['bahan_bakar']) == 'bensin' ? 'checked' : ''?> class="custom-control-input"><span class="custom-control-label">Bensin</span>
						</label>
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="bahan_bakar" value="solar" <?php echo (set_value('bahan_bakar') ? set_value('bahan_bakar') : $data['bahan_bakar']) == 'solar' ? 'checked' : ''?> class="custom-control-input"><span class="custom-control-label">Solar</span>
						</label>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Kondisi Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="kondisi" value="0" <?php echo set_value('kondisi') ? set_value('kondisi') : $data['kondisi'] == '0' ? 'checked' : ''?> class="custom-control-input"><span class="custom-control-label">Baru</span>
						</label>
						<label class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="kondisi" value="1" <?php echo set_value('kondisi') ? set_value('kondisi') : $data['kondisi'] == '1' ? 'checked' : ''?> class="custom-control-input"><span class="custom-control-label">Bekas</span>
						</label>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Stok Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('stok') ? set_value('stok') : $data['stok'] ?>" name="stok" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Harga Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="text" value="<?php echo set_value('harga') ? set_value('harga') : $data['harga'] ?>" name="harga" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-12 col-sm-3 col-form-label text-sm-right">Tipe Mobil</label>
						<div class="col-12 col-sm-8 col-lg-6">
							<input type="file" name="gambar" id="gambar" class="form-control">
						</div>
					</div>
				   <div class="form-group row text-right">
						<div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
							<button type="submit" class="btn btn-space btn-primary">Submit</button>
							<button class="btn btn-space btn-secondary">Cancel</button>
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
