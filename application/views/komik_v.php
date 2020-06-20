<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jogja Komik | Booking</title>
    <?php $this->load->view("templates/head") ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php $this->load->view("templates/sidebar")?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Komik
                    <small>Daftar Komik</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">
                                    <i class="fa fa-list-alt"></i>
                                    Data Komik</h3>
                                <div class="pull-right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#addKomik">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body">
                                <?php if($this->session->flashdata("pesan")){ ?>
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5>
                                        <i class="icon fa fa-check"></i><?php echo $this->session->flashdata("pesan") ?>
                                    </h5>
                                </div>
                                <?php } ?>
                                <table class="table table-hover table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th>#No</th>
                                            <th>Judul Komik</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i=0; $i<count($komik); $i++){ ?>
                                        <tr>
                                            <td><?= $i + 1 ?></td>
                                            <td><?= $komik[$i]['judul_komik'] ?></td>
                                            <td><?= $komik[$i]['pengarang'] ?></td>
                                            <td><?= $komik[$i]['penerbit'] ?></td>
                                            <td><?= $komik[$i]['harga'] ?></td>
                                            <td align="center">
                                                <a
                                                    href="#"
                                                    class="btn btn-primary btn-xs"
                                                    data-toggle="modal"
                                                    data-target="#modal-default<?= $komik[$i]['id_komik'] ?>">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a
                                                    href="<?= base_url("dashboard/deleteKomik/").$komik[$i]['id_komik'] ?>"
                                                    class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- Modal Edit Customers -->
                                <?php foreach($komik as $row){ ?>
                                <div
                                    class="modal fade"
                                    id="modal-default<?= $row['id_komik'] ?>"
                                    style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Edit Data Komik</h4>
                                            </div>
                                            <form
                                                action="<?php echo base_url("dashboard/editKomik") ?>"
                                                method="post"
                                                enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Judul Komik :</label>
                                                        <input type="hidden" name="id_komik" value="<?= $row['id_komik'] ?>">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="judul_komik"
                                                            value="<?= $row['judul_komik'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pengarang :</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="pengarang"
                                                            value="<?= $row['pengarang'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Penerbit :</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="penerbit"
                                                            value="<?= $row['penerbit'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jumlah :</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="jumlah"
                                                            value="<?= $row['jumlah'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Harga :</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="harga"
                                                            value="<?= $row['harga'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gambar :</label>
                                                        <input
                                                            type="file"
                                                            class="form-control"
                                                            name="gambar"
                                                            value="<?= $row['gambar'] ?>">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <?php } ?>
                                <!-- /Modal Edit Customers -->

                                <!-- Tambah Komik -->
                                <div class="modal fade" id="addKomik" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Tambah Komik</h4>
                                            </div>
                                            <form
                                                action="<?php echo base_url("dashboard/tambahKomik") ?>"
                                                method="post"
                                                enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Judul Komik :</label>
                                                        <input type="text" class="form-control" name="judul_komik">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pengarang :</label>
                                                        <input type="text" class="form-control" name="pengarang">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Penerbit :</label>
                                                        <input type="text" class="form-control" name="penerbit">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jumlah :</label>
                                                        <input type="number" class="form-control" name="jumlah">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Harga :</label>
                                                        <input type="text" class="form-control" name="harga">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gambar :</label>
                                                        <input type="file" class="form-control" name="gambar">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /Tambah Komik -->
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php $this->load->view("templates/footer")?>

        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("templates/script")?>
</body>