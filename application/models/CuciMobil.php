<?php

class CuciMobil extends CI_Model{

    // Transaksi

    public function getTransaksi($id_customer){
        $query = $this->db->select('*')->from('transaksi')->where('id_user', $id_customer);
        $result = $query->get()->result();

        if (empty($result) || is_null($result)) {
            $res['status'] = false;
            $res['message'] = 'Data tidak Ditemukan';
        } else {
            $res['status'] = true;
            $res['message'] = 'Data Ditemukan';
            $res['data'] = $result;
        }
        return $res;
    }

    public function addTransaksi($dataTransaksi){
        $query = $this->db->insert('transaksi', $dataTransaksi);

        if ($query) {
            $res['status'] = true;
            $res['message'] = 'Data Berhasil Ditambahkan';
        } else {
            $res['status'] = false;
            $res['message'] = 'Data Tidak Berhasil Ditambahkan';
        }

        return $res;
    }

    // Reservasi

    public function getReservasi(){
        $query = $this->db->select('*')->from('reservasi');
        $result = $query->get()->result();

        if (empty($result) || is_null($result)) {
            $res['status'] = false;
            $res['message'] = 'Data tidak Ditemukan';
        } else {
            $res['status'] = true;
            $res['message'] = 'Data Ditemukan';
            $res['data'] = $result;
        }
        return $res;
    }

    public function addReservasi($dataReservasi)
    {
        $query = $this->db->insert('reservasi', $dataReservasi);

        if ($query) {
            $res['status'] = true;
            $res['message'] = 'Data Berhasil Ditambahkan';
        } else {
            $res['status'] = false;
            $res['message'] = 'Data Tidak Berhasil Ditambahkan';
        }

        return $res;
    }

    // Layanan
    public function getLayanan()
    {
        $query = $this->db->select('*')->from('layanan');
        $result = $query->get()->result();

        if (empty($result) || is_null($result)) {
            $res['status'] = false;
            $res['message'] = 'Data tidak Ditemukan';
        } else {
            $res['status'] = true;
            $res['message'] = 'Data Ditemukan';
            $res['data'] = $result;
        }
        return $res;
    }

    public function addLayanan($dataLayanan){
        $query = $this->db->insert('layanan', $dataLayanan);

        if ($query) {
            $res['status'] = true;
            $res['message'] = 'Data Berhasil Ditambahkan';
        } else {
            $res['status'] = false;
            $res['message'] = 'Data Tidak Berhasil Ditambahkan';
        }

        return $res;
    }

    // Pegawai
    public function getPegawai()
    {
        $query = $this->db->select('*')->from('pegawai');
        $result = $query->get()->result();

        if (empty($result) || is_null($result)) {
            $res['status'] = false;
            $res['message'] = 'Data tidak Ditemukan';
        } else {
            $res['status'] = true;
            $res['message'] = 'Data Ditemukan';
            $res['data'] = $result;
        }
        return $res;
    }

    public function addPegawai($dataPegawai)
    {
        $query = $this->db->insert('layanan', $dataPegawai);

        if ($query) {
            $res['status'] = true;
            $res['message'] = 'Data Berhasil Ditambahkan';
        } else {
            $res['status'] = false;
            $res['message'] = 'Data Tidak Berhasil Ditambahkan';
        }

        return $res;
    }

    // Customer
    public function getCustomer()
    {
        $query = $this->db->select('*')->from('customer');
        $result = $query->get()->result();

        if (empty($result) || is_null($result)) {
            $res['status'] = false;
            $res['message'] = 'Data tidak Ditemukan';
        } else {
            $res['status'] = true;
            $res['message'] = 'Data Ditemukan';
            $res['data'] = $result;
        }
        return $res;
    }

    public function addCustomer($dataCustomer)
    {
        $query = $this->db->insert('customer', $dataCustomer);

        if ($query) {
            $res['status'] = true;
            $res['message'] = 'Data Berhasil Ditambahkan';
        } else {
            $res['status'] = false;
            $res['message'] = 'Data Tidak Berhasil Ditambahkan';
        }

        return $res;
    }
}