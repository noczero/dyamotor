<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Halaman Tukar Tambah</h2>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

		<div class="row">
			<div class="col-6">
				<form id="form" action="<?php echo base_url('home/tukar_tambah1_submit')?>" method="post">
				<div class="card">
					<h5 class="card-header">Detail Mobil Anda</h5>
					<div class="card-body">
							<div class="form-group">
								<label for="merek_mobil">Merek Mobil</label>
								<input id="merek_mobil" type="text" name="merek_mobil" data-parsley-trigger="change" required="" placeholder="Merek Mobil Anda" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<label for="model_mobil">Model Mobil</label>
								<input id="model_mobil" type="text" name="model_mobil" data-parsley-trigger="change" required="" placeholder="Model Mobil Anda" autocomplete="off" class="form-control">
							</div>
							<div class="form-group">
								<label for="harga_mobil">Harga Mobil</label>
								<input id="harga_mobil" name="harga_mobil" type="text" placeholder="Harga Mobil Anda" required="" class="form-control">
							</div>
							<div class="form-group">
								<label for="jarak_tempuh">Jarak Tempuh</label>
								<input id="jarak_tempuh" name="jarak_tempuh" type="text" required="" placeholder="Jarak Tempuh Mobil Anda" class="form-control">
							</div>
					</div>
				</div>
			</div>

			<div class="col-6">

				<div class="card">
					<h5 class="card-header">Mobil yang ingin anda beli </h5>
					<div class="card-body">

							<div class="form-group">
								<label for="merek">Merek Mobil</label>
								<select class="form-control" id="sel1" name="id_mobil">
									<option>Pilih Mobil..</option>
									<?php
										foreach ($datas as $mobil)
										{
											echo "<option value='$mobil[id_mobil]'> $mobil[merek_mobil] $mobil[model_mobil] </option>";
										}
									?>
								</select>
								</div>
							<div class="row pt-2 pt-sm-5 mt-1">
								<div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">

								</div>
								<div class="col-sm-6 pl-0">
									<p class="text-right">
										<button type="submit" class="btn btn-space btn-primary">Submit</button>
										<button class="btn btn-space btn-secondary">Cancel</button>
									</p>
								</div>
							</div>

					</div>
				</div>
			</div>
			</form>
		</div>

	</div>
</div>
