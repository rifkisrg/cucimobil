<?php
class Pegawai extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('pegawai_model');
    }
    function pegawai_data(){
        $data=$this->pegawai_model->list_pegawai();
        echo json_encode($data);
    }

    function save(){
        $data=$this->pegawai_model->add_pegawai();
        echo json_encode($data);
    }

    function update(){
        $data=$this->pegawai_model->update_pegawai();
        echo json_encode($data);
    }

    function delete(){
        $data=$this->pegawai_model->delete_pegawai();
        echo json_encode($data);
    }

}