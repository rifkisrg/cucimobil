<?php

$data = [
	'nama_pegawai' => $_POST('name'),
	'no_telp' => $_POST('notelp'),
	'alamat' => $_POST('address')
];

$this->db->insert('pegawai', $data);

