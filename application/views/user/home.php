 <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Dasboard - Showroom Dya Motor Bandung </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>

                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                            <div class="row">
                                <?php foreach($datas as $data): ?>
                                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="product-thumbnail">
                                        <div class="product-img-head">
                                            <div class="product-img">
                                                <img src="<?php echo base_url('assets/images/'.$data['gambar']) ?>" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-content-head">
                                                <h3 class="product-title"><?php echo $data['merek_mobil'].' '.$data['model_mobil'] ?></h3>
                                                <div class="product-rating d-inline-block">
                                                    <i class="fa fa-fw fa-star"></i>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    <i class="fa fa-fw fa-star"></i>
                                                </div>
                                                <div class="product-price"> <?php echo $data['harga'] ?></div>
                                            </div>
                                            <div class="product-btn">
                                                <a href="<?php echo base_url('home/beli/').$data["id_mobil"]?>" class="btn btn-primary">Beli</a>                                                <a href="<?php echo base_url('home/deskripsi_mobil')?>" class="btn btn-outline-light">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
					</div>
