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
			<div class="col-12">

				<div class="card">
					<h5 class="card-header">Detail Diri Anda</h5>
					<div class="card-body">
						<div class="alert alert-danger">
							<?php echo validation_errors(); ?>
						</div>
						<form action="<?php echo base_url('home/tukar_tambah2_submit/'.$id)?>" method="post" id="basicform" enctype="multipart/form-data">
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label for="nama_pemilik">Nama Pemilik Mobil</label>
										<input id="nama_pemilik" type="text" name="nama_pemilik" data-parsley-trigger="change" required="" placeholder="Nama Pemilik Mobil" autocomplete="off" class="form-control">
									</div>
									<div class="form-group">
										<label for="no_tlp">Nomor Telepon</label>
										<input id="no_tlp" type="text" name="no_tlp" data-parsley-trigger="change" required="" placeholder="Nomor Telepon" autocomplete="off" class="form-control">
									</div>
									<div class="form-group">
										<label for="alamat">Alamat</label>
										<input id="alamat" name="alamat" type="text" placeholder="Alamat Anda" required="" class="form-control">
									</div>
									<div class="form-group">
										<label for="no_ktp">Nomor KTP</label>
										<input id="no_ktp"  name="no_ktp" type="text" required="" placeholder="Nomor KTP" class="form-control">
									</div>
									<div class="form-group">
										<label for="no_stnk">Nomor STNK</label>
										<input id="no_stnk" name="no_stnk" type="text" placeholder="Nomor STNK" required="" class="form-control">
									</div>
									<div class="form-group">
										<label for="no_bpkb">Nomor BPKB</label>
										<input id="no_bpkb" name="no_bpkb" type="text" required="" placeholder="Nomor BPKB" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="upload">Upload KTP</label>
										<input id="upload_ktp" type="file" name="upload_ktp" data-parsley-trigger="change" required="" placeholder="Merek Mobil Anda" autocomplete="off" class="form-control">
									</div>
									<div class="form-group">
										<label for="upload_stnk">Upload STNK</label>
										<input id="upload_stnk" type="file" name="upload_stnk" data-parsley-trigger="change" required="" placeholder="Model Mobil Anda" autocomplete="off" class="form-control">
									</div>
									<div class="form-group">
										<label for="upload_bpkb">Upload BPKB</label>
										<input id="upload_bpkb" name="upload_bpkb" type="file" placeholder="Harga Mobil Anda" required="" class="form-control">
									</div>
									<div class="form-group">
										<label for="upload_mobil">Upload Mobil Lama</label>
										<input id="upload_mobil" name="upload_mobil" type="file" required="" placeholder="Jarak Tempuh Mobil Anda" class="form-control">
									</div>
									<div class="form-group">
										<label for="tgl_pengajuan">Tanggal Pengajuan</label>
										<input id="tgl_pengajuan" name="tgl_pengajuan" type="date" required="" placeholder="Jarak Tempuh Mobil Anda" class="form-control">
									</div>
								</div>
							</div>

							<div class="pl-auto">
								<p class="text-right">
									<button type="submit" class="btn btn-space btn-primary">Submit</button>
									<button class="btn btn-space btn-secondary">Cancel</button>
								</p>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>
