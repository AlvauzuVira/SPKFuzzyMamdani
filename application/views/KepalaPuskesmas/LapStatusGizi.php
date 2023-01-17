<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Laporan Status Gizi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-light">
                        <div class="card-header">
                            <h3 class="card-title">Laporan All Status Gizi Perbulan</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            echo form_open('KepalaPuskesmas/Laporan/lapstatusgizi') ?>
                            <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <form method="post">
                                        <label>Tanggal Laporan</label>   
                                        <td><input type="date" name="tanggal_laporan"></td>
                                      </select>
                                    </div>
                                </div>
                                </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> Cetak Laporan</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>