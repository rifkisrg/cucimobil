<?php

class DataCuciMobil extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CuciMobil', 'CM');
    }

    // Transaksi

    public function lihatTransaksi(){
        $id_customer = $this->input->post('id_cust');
        $query = $this->CM->getTransaksi($id_customer);

        echo json_encode($query);
    }

    public function tambahTransaksi(){
        $data = [
            'id_reservasi' => $this->input->post('id_reservasi'),
            'id_user' => $this->input->post('id_user'),
            'total_harga' => $this->input->post('total_harga'),
            'metode_pembayaran' => $this->input->post('metode_pembayaran')
        ];

        $res = $this->CM->addTransaksi($data);
        echo json_encode($res);
    }

    // Reservasi
    public function lihatReservasi()
    {
        $query = $this->CM->getReservasi();

        echo json_encode($query);
    }

    public function tambahReservasi()
    {
        $data = [
            'id_customer' => $this->input->post('id_customer'),
            'id_reservasi' => $this->input->post('id_reservasi'),
            'tanggal_reservasi' => $this->input->post('tanggal_reservasi'),
            'jam_reservasi' => $this->input->post('jam_reservasi'),
            'id_layanan' => $this->input->post('id_layanan'),
            'plat_no' => $this->input->post('plat_no'),
            'harga' => $this->input->post('harga')
        ];

        $res = $this->CM->addReservasi($data);
        echo json_encode($res);
    }

    // Layanan
    public function lihatLayanan()
    {
        $query = $this->CM->getLayanan();

        echo json_encode($query);
    }

    public function tambahLayanan(){
        $data = [
            'nama_layanan' => $this->input->post('nama_layanan'),
            'harga' => $this->input->post('harga'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];

        $res = $this->CM->addLayanan($data);
        echo json_encode($res);
    }

    // Pegawai
    public function lihatPegawai()
    {
        $query = $this->CM->getPegawai();

        echo json_encode($query);
    }

    public function tambahPegawai()
    {
        $data = [
			'nama_pegawai' => $_POST('name'),
			'no_telp' => $_POST('notelp'),
			'alamat' => $_POST('address')
        ];

        $res = $this->CM->addPegawai($data);
        echo json_encode($res);
    }

    // Customer
    public function lihatCustomer()
    {
        $query = $this->CM->getCustomer();

        echo json_encode($query);
    }

    public function registerCustomer(){
        $data = [
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ];

        $res = $this->CM->addCustomer($data);
        echo json_encode($res);
    }
}
