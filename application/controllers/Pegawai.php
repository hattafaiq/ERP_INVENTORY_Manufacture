<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Pegawai";
        $data['pegawai'] = $this->admin->get('pegawai');
        $this->template->load('templates/dashboard', 'pegawai/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|trim');
        $this->form_validation->set_rules('no_telp_pegawai', 'Nomor Telepon', 'required|trim|numeric');
        $this->form_validation->set_rules('alamat_pegawai', 'Alamat', 'required|trim');
    }

    public function add()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Pegawai";
            $this->template->load('templates/dashboard', 'pegawai/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('pegawai', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('pegawai');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('pegawai/add');
            }
        }
    }


    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Supplier";
            $data['supplier'] = $this->admin->get('supplier', ['id_supplier' => $id]);
            $this->template->load('templates/dashboard', 'supplier/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('supplier', 'id_supplier', $id, $input);

            if ($update) {
                set_pesan('data berhasil diedit.');
                redirect('supplier');
            } else {
                set_pesan('data gagal diedit.');
                redirect('supplier/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('supplier', 'id_supplier', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('supplier');
    }
}
