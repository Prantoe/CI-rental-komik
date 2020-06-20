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
                    Booking
                    <small>Booking Komik</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">
                                    <i class="fa fa-shopping-cart"></i>
                                    Booking</h3>
                            </div>
                            <form
                                role="form"
                                action="<?php echo base_url("dashboard/booking") ?>"
                                method="post">
                                <div class="box-body">
                                    <?php if($this->session->flashdata("pesan")){ ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4>
                                            <i class="icon fa fa-check"></i><?php echo $this->session->flashdata("pesan") ?></h4>
                                    </div>
                                    <?php } ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Customers :</label>
                                            <input 
                                                type="text"
                                                name="nama_customers"
                                                class="form-control"
                                                placeholder="Nama Customers"
                                                autocomplete="off">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Alamat Customers :</label>
                                            <input
                                                type="text"
                                                name="alamat_customers"
                                                class="form-control"
                                                placeholder="Alamat Customers"
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contact Customers :</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input
                                                    type="text"
                                                    name="contact_customers"
                                                    class="form-control"
                                                    placeholder="Contact Customers"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Kode POS :</label>
                                            <input type="text" name="kode_pos" class="form-control" placeholder="Kode POS"
                                            autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Komik :</label>
                                            <select name="komik" onchange="totalHarga()" id="harga" class="form-control">
                                                <option>--PILIH KOMIK--</option>
                                                <?php foreach($komik as $row){ ?>
                                                <option
                                                    data-harga="<?php echo $row['harga'] ?>"
                                                    value="<?php echo $row['id_komik'] ?>"><?php echo $row['judul_komik'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tanggal Booking :</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input
                                                    type="text"
                                                    name="tanggal_booking"
                                                    class="form-control pull-right"
                                                    id="datepicker"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tanggal Pengembalian :</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input
                                                    type="text"
                                                    name="tanggal_pengembalian"
                                                    class="form-control pull-right"
                                                    id="datepicker2"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Harga Komik :</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-dollar"></i>
                                                </div>
                                                <input type="hidden" name="harga" id="getHarga">
                                                <input
                                                    type="text"
                                                    id="showHarga"
                                                    class="form-control pull-right"
                                                    disabled="disabled"
                                                    >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
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
    <script>
        //Date picker
        $('#datepicker').datepicker({autoclose: true})
        $('#datepicker2').datepicker({autoclose: true})
        function totalHarga() {
            let idSelect = "#harga";
            let harga = $("option:selected", $(idSelect)).attr("data-harga");
            $("#showHarga").val("Rp. " + harga + " .-")
            $("#getHarga").val(harga)
        }
    </script>
</body>