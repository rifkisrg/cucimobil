<?php

class Pegawai_model extends CI_Model
{

    function list_pegawai()
    {
        $hasil = $this->db->get('pegawai');
        return $hasil->result();
    }

    function add_pegawai()
    {
        $data = array(
            'nama' => $this->input->post('name'),
            'alamat' => $this->input->post('address'),
            'no_telp' => $this->input->post('notelp'),
        );
        $result = $this->db->insert('pegawai', $data);
        return $result;
    }

    function update_pegawai()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $nama_pegawai = $this->input->post('pegawaiNewName');
        $notelp = $this->input->post('pegawaiNewPhone');
        $alamat = $this->input->post('pegawaiNewAddress');

        $this->db->set('nama', $nama_pegawai);
        $this->db->set('alamat', $alamat);
        $this->db->set('no_telp', $notelp);
        $this->db->where('product_code', $id_pegawai);
        $result = $this->db->update('pegawai');
        return $result;
    }

    function delete_pegawai()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $this->db->where('id_pegawai', $id_pegawai);
        $result = $this->db->delete('pegawai');
        return $result;
    }

}