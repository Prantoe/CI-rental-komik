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
                    Transaksi
                    <small>History Transaksi</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">
                                    <i class="fa fa-credit-card"></i>
                                    Data Transaksi</h3>
                            </div>
                            <div class="box-body">
                                <table class="table table-hover table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <th>No.Hp</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Nama Komik</th>
                                            <th>Total Tagihan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($transaksi as $row){ ?>
                                        <tr>
                                            <td><?= $row['nama_cust'] ?></td>
                                            <td><?= $row['contact_cust'] ?></td>
                                            <td><?= $row['nama_jalan'] ?></td>
                                            <td><?= $row['tgl_sewa'] ?></td>
                                            <td><?= $row['tgl_kembali'] ?></td>
                                            <td><?= $row['judul_komik'] ?></td>
                                            <td><?= $row['total_bayar'] ?></td>
                                            <td align="center">
                                                <a href="#" class="btn btn-info btn-xs">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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