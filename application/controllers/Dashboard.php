<?php

class Dashboard extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        if($this->session->userdata("isLogin") != true){
            $this->session->set_flashdata("pesan", "Login Terlebih Dahulu!");
            redirect("login");
        }
        $this->load->model("Admin_m");
    }
    public function index(){
        $jmlCustomers   = $this->Admin_m->getCustomers();
        $jmlKomik       = $this->Admin_m->getKomik();

        $count["customers"] = count($jmlCustomers);
        $count["komik"]     = $this->Admin_m->getTotalKomik();
        $count["jnsKomik"]  = count($jmlKomik);
        $count["tersewa"]   = $this->Admin_m->getTotalKomikTersewa();

        $this->load->view("home_v", $count);
    }
    public function booking(){
        $getKomik['komik'] = $this->Admin_m->getKomik();
        $this->load->view("booking_v", $getKomik);
        if(isset($_POST['submit'])){
            $data = [
                "nama_customers" => $this->input->post("nama_customers"),
                "alamat_customers" => $this->input->post("alamat_customers"),
                "contact_customers" => $this->input->post("contact_customers"),
                "kode_pos" => $this->input->post("kode_pos"),
                "id_komik" => $this->input->post("komik"),
                "tanggal_booking" => $this->input->post("tanggal_booking"),
                "tanggal_pengembalian" => $this->input->post("tanggal_pengembalian"),
                "harga" => $this->input->post("harga"),
                // "kd_sewa" => $this->input->post("sewa") //tadi gada
            ];
            $isInput = $this->Admin_m->addData($data);
            if($isInput){
                $this->session->set_flashdata("pesan", "Pesanan Berhasil!!");
                redirect("dashboard/booking");
            }
        }
    }
    public function transaksi(){
        $data['transaksi'] = $this->Admin_m->detailTransaksi();
        $this->load->view("transaksi_v", $data);
    }
    public function customers(){
        $data['customers'] = $this->Admin_m->getCustomers();
        $this->load->view("customers_v", $data);
    }
    public function edit(){
        $data = [
            "nama_cust" => $this->input->post("nama_customers"),
            "contact_cust" => $this->input->post("contact_customers"),
            "nama_jalan" => $this->input->post("alamat_customers"),
            "kode_pos" => $this->input->post("kode_pos"),
            "id_cust" => $this->input->post("id_customers")
        ];
        $isEdit = $this->Admin_m->updateCustomers($data);
        if($isEdit){
            $this->session->set_flashdata("pesan", "Update Data Customers Berhasil!!");
            redirect("dashboard/customers");
        }
    }
    public function deleteCustomer($id){
        $isDelete = $this->Admin_m->deleteCustomers($id);
        if($isDelete){
            redirect("dashboard/customers");
        }
    }
    public function komik(){
        $data["komik"] = $this->Admin_m->getKomik();
        $this->load->view("komik_v",$data);
    }
    public function tambahKomik(){
        $data = [
            "judul_komik" => $this->input->post("judul_komik"),
            "pengarang" => $this->input->post("pengarang"),
            "penerbit" => $this->input->post("penerbit"),
            "harga" => $this->input->post("harga"),
            "jumlah" => $this->input->post("jumlah"),
            "gambar" => ""
        ];

        $config['upload_path']          = './images/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar')){
            $this->session->set_flashdata("pesan", "Ada Masalah saat menambahkan data!");
            redirect("dashboard/komik");
        }else{
            $file = $this->upload->data();
            $data["gambar"] = $file["file_name"];
            $isInput = $this->Admin_m->addKomik($data);
            if($isInput){
                $this->session->set_flashdata("pesan", "Komik Berhasil Ditambahkan!!");
                redirect("dashboard/komik");
            }
        }
    }
    public function editKomik(){

        $data = [
            "judul_komik" => $this->input->post("judul_komik"),
            "pengarang" => $this->input->post("pengarang"),
            "penerbit" => $this->input->post("penerbit"),
            "harga" => $this->input->post("harga"),
            "jumlah" => $this->input->post("jumlah"),
            "id_komik" => $this->input->post("id_komik"),
            "gambar" => ""
        ];

        $config['upload_path']          = './images/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
    
    
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload('gambar')){
            $isUpdate = $this->Admin_m->updateKomik($data);
            if($isUpdate){
                $this->session->set_flashdata("pesan", "Update Komik Berhasil!!");
                redirect("dashboard/komik");
            }
        }else{
            $file = $this->upload->data();
            $data["gambar"] = $file["file_name"];
            $isUpdate = $this->Admin_m->updateKomik($data);
            if($isUpdate){
                $this->session->set_flashdata("pesan", "Update Komik Berhasil!!");
                redirect("dashboard/komik");
            }
        }
    }
    public function deleteKomik($id){
        $isDelete = $this->Admin_m->deleteKomiks($id);
        if($isDelete){
            redirect("dashboard/komik");
        }
    }
    public function logout(){
        $userdata = [
            "username" => "",
            "nama" => "",
            "isLogin" => false
        ];
        $this->session->unset_userdata($userdata);
        $this->session->sess_destroy();
        redirect("login");
    }
}