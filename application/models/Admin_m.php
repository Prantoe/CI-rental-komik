<?php
class Admin_m extends CI_Model{
    public function getKomik(){
        return $this->db->get("komik")->result_array();
    }
    public function getTotalKomik(){
        $this->db->select("SUM(jumlah) as jumlah");
        $this->db->from("komik");
        return $this->db->get()->result_array();
    }
    public function getTotalKomikTersewa(){
        $this->db->select("COUNT(id_komik) as tersewa");
        $this->db->from("sewa");
        return $this->db->get()->result_array();
    }
    public function addData($data){
        $this->db->set("nama_cust", $data["nama_customers"]);
        $this->db->set("contact_cust", $data["contact_customers"]);
        $this->db->set("nama_jalan", $data["alamat_customers"]);
        $this->db->set("kode_pos", $data["kode_pos"]);
        $customers = $this->db->insert("customer");
        if($customers){
            $this->db->set("id_komik", $data["id_komik"]);
            $this->db->set("tgl_sewa", $data["tanggal_booking"]);
            $this->db->set("tgl_kembali", $data["tanggal_pengembalian"]);
            $sewa = $this->db->insert("sewa");
            if($sewa){
                // Get Last Data Customers
                $getIdCustomers = $this->db->order_by("id_cust", "desc")
                                            ->limit(1)
                                            ->get("customer")
                                            ->row();
                $idCustomers = $getIdCustomers->id_cust;
                $this->db->set("id_komik", $data["id_komik"]);
                $this->db->set("id_cust", $idCustomers);
                $this->db->set("total_bayar", $data["harga"]);
                $transaksi = $this->db->insert("transaksi");
                if($transaksi){
                    return true;
                }
                
            }
        }
        
    }
    public function detailTransaksi(){
        $this->db->select("customer.nama_cust, customer.contact_cust, customer.nama_jalan, sewa.tgl_sewa, sewa.tgl_kembali, komik.judul_komik, transaksi.total_bayar");
        $this->db->from("customer");
        $this->db->join("transaksi", "customer.id_cust = transaksi.id_cust");
        $this->db->join("komik", "transaksi.id_komik = komik.id_komik");
        $this->db->join("sewa", "komik.id_komik = sewa.id_komik");
        return $this->db->get()->result_array();
    }
    public function getCustomers(){
        return $this->db->get("customer")->result_array();
    }
    public function addKomik($data){
        $this->db->set("judul_komik", $data["judul_komik"]);
        $this->db->set("pengarang", $data["pengarang"]);
        $this->db->set("penerbit", $data["penerbit"]);
        $this->db->set("jumlah", $data["jumlah"]);
        $this->db->set("harga", $data["harga"]);
        $this->db->set("gambar", $data["gambar"]);
        return $this->db->insert("komik");
    }
    public function updateCustomers($data){
        $this->db->set("nama_cust", $data["nama_cust"]);
        $this->db->set("contact_cust", $data["contact_cust"]);
        $this->db->set("nama_jalan", $data["nama_jalan"]);
        $this->db->set("kode_pos", $data["kode_pos"]);
        $this->db->where("id_cust", $data["id_cust"]);
        return $this->db->update("customer");
    }
    public function deleteCustomers($id){
        return $this->db->delete("customer", array("id_cust" => $id));
    }
    public function updateKomik($data){
        if($data["gambar"] == ""){
            $this->db->set("judul_komik", $data["judul_komik"]);
            $this->db->set("pengarang", $data["pengarang"]);
            $this->db->set("penerbit", $data["penerbit"]);
            $this->db->set("jumlah", $data["jumlah"]);
            $this->db->set("harga", $data["harga"]);
            $this->db->where("id_komik", $data["id_komik"]);
            return $this->db->update("komik");
        }else{
            $this->db->set("judul_komik", $data["judul_komik"]);
            $this->db->set("pengarang", $data["pengarang"]);
            $this->db->set("penerbit", $data["penerbit"]);
            $this->db->set("jumlah", $data["jumlah"]);
            $this->db->set("harga", $data["harga"]);
            $this->db->set("gambar", $data["gambar"]);
            $this->db->where("id_komik", $data["id_komik"]);
            return $this->db->update("komik");
        }
    }
    public function deleteKomiks($id){
        return $this->db->delete("komik", array("id_komik" => $id));
    }
    // method for Home/Landing page or Front-End
    public function getKomikForHome(){
        $this->db->select("komik.id_komik, komik.judul_komik, komik.pengarang, komik.penerbit, komik.harga, komik.gambar, komik.jumlah, COUNT(sewa.id_komik) as tersewa, komik.jumlah - COUNT(sewa.id_komik) as tersedia");
        $this->db->from("komik");
        $this->db->join("sewa", "komik.id_komik = sewa.id_komik", "left");
        $this->db->group_by("komik.id_komik");
        return $this->db->get()->result_array();
    }
    
}