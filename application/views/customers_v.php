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
                    Customers
                    <small>Data Customers</small>
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
                                    Data Customers</h3>
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
                                            <th>Nama Lengkap</th>
                                            <th>No.Hp</th>
                                            <th>Alamat</th>
                                            <th>Kode Pos</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($customers as $row){ ?>
                                        <tr>
                                            <td><?= $row['id_cust'] ?></td>
                                            <td><?= $row['nama_cust'] ?></td>
                                            <td><?= $row['contact_cust'] ?></td>
                                            <td><?= $row['nama_jalan'] ?></td>
                                            <td><?= $row['kode_pos'] ?></td>
                                            <td align="center">
                                                <a
                                                    href="#"
                                                    class="btn btn-primary btn-xs"
                                                    data-toggle="modal"
                                                    data-target="#modal-default<?= $row['id_cust'] ?>">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a
                                                    href="<?= base_url("dashboard/deleteCustomer/").$row['id_cust'] ?>"
                                                    class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- Modal Edit Customers -->
                                <?php foreach($customers as $row){ ?>
                                <div
                                    class="modal fade"
                                    id="modal-default<?= $row['id_cust'] ?>"
                                    style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Edit Data Customers</h4>
                                            </div>
                                            <form action="<?php echo base_url("dashboard/edit") ?>" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Nama Customers :</label>
                                                        <input type="hidden" name="id_customers" value="<?= $row['id_cust'] ?>">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="nama_customers"
                                                            value="<?= $row['nama_cust'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No.Hp :</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="contact_customers"
                                                            value="<?= $row['contact_cust'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat :</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="alamat_customers"
                                                            value="<?= $row['nama_jalan'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kode Pos :</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="kode_pos"
                                                            value="<?= $row['kode_pos'] ?>">
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