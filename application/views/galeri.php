<div class="row">
	<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
		<div class="row">
			<?php foreach($datas as $mobil): ?>
				<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="product-thumbnail">
						<div class="product-img-head">
							<div class="product-img">
								<img src="<?php echo base_url('assets/images/'.$mobil['gambar']) ?>" alt="" class="img-fluid">
							</div>
						</div>
						<div class="product-content">
							<div class="product-content-head">
								<h3 class="product-title"><?php echo $mobil['merek_mobil'].' '.$mobil['model_mobil'] ?></h3>
								<div class="product-rating d-inline-block">
									<i class="fa fa-fw fa-star"></i>
									<i class="fa fa-fw fa-star"></i>
									<i class="fa fa-fw fa-star"></i>
									<i class="fa fa-fw fa-star"></i>
									<i class="fa fa-fw fa-star"></i>
								</div>
								<div class="product-price"> <?php echo $mobil['harga'] ?></div>
							</div>
							<div class="product-btn">
								<a href="#" class="btn btn-primary">Add to Cart</a>
								<a href="#" class="btn btn-outline-light">Details</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">

		<div class="card">
			<center><h3 class="card-header">Merek Mobil</h3></center>

			<div class="card-body">


				<div class="class row text-center">
					<div class="class col 3 mb-4">
						<img src="<?php echo base_url('assets/images/hondalogo.png')?>" width="150px" height="100px" class="">
					</div>

					<div class="class col 3 mb-4">
						<img src="<?php echo base_url('assets/images/toyotalogo.png')?>" alt="" class="img-fluid">
					</div>

					<div class="class col 3 mb-4">
						<img src="<?php echo base_url('assets/images/daihatsulogo.png')?>" width="150px" height="100px" class="">
					</div>

					<div class="class col 3 mb-4">
						<img src="<?php echo base_url('assets/images/mitsubishilogo.png')?>" width="150px" height="100px" class="">
					</div>
				</div>


			</div>
		</div>
	</div>

</div>
