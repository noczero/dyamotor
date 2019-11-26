
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Mobil</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Mobil</li>
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
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h3 class="card-header">Detail Mobil</h3>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>No Plat</th>
                                        <th>Merek Mobil</th>
                                        <th>Model Mobil</th>
                                        <th>Tipe Mobil</th>
                                        <th>Transmisi</th>
                                        <th>Jarak Tempuh</th>
                                        <th>Tahun</th>
                                        <th>Warna</th>
                                        <th>Bahan Bakar</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($datas as $data): ?>
                                        <tr>
                                            <td><?php echo $data['no_plat'] ?></td>
                                            <td><?php echo $data['merek_mobil'] ?></td>
                                            <td><?php echo $data['model_mobil'] ?></td>
                                            <td><?php echo $data['tipe_mobil'] ?></td>
                                            <td><?php echo $data['transmisi'] ?></td>
                                            <td><?php echo $data['jarak_tempuh'] ?></td>
                                            <td><?php echo $data['tahun'] ?></td>
                                            <td><?php echo $data['warna'] ?></td>
                                            <td><?php echo $data['bahan_bakar'] ?></td>
                                            <td><?php echo $data['stok'] ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/form_edit_mobil/'.$data['id_mobil']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="<?php echo base_url('admin/hapus/'.$data['id_mobil']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No Plat</th>
                                        <th>Merek Mobil</th>
                                        <th>Model Mobil</th>
                                        <th>Tipe Mobil</th>
                                        <th>Transmisi</th>
                                        <th>Jarak Tempuh</th>
                                        <th>Tahun</th>
                                        <th>Warna</th>
                                        <th>Bahan Bakar</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>
