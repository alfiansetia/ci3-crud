<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bunga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Bunga_model");
    }

    public function index()
    {
        $data["title"] = "Data Binatang";
        $data["bunga"] = $this->Bunga_model->get();
        $this->load->view('header', $data);
        $this->load->view('bunga/index', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        $bunga = $this->Bunga_model;
        $validation = $this->form_validation;
        $validation->set_rules($bunga->rules());
        if ($validation->run()) {
            $bunga->store();
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Disimpan"); </script>');
            redirect("bunga");
        }
        $data["title"] = "Tambah Binatang";
        $this->load->view('header', $data);
        $this->load->view('bunga/add', $data);
        $this->load->view('footer');
    }

    public function edit($id = null)
    {
        if ($id == null) {
            // redirect('bunga');
            show_404();
        } else {
            $bunga = $this->Bunga_model;
            $validation = $this->form_validation;
            $validation->set_rules($bunga->rules());

            if ($validation->run()) {
                $bunga->update($id);
                $this->session->set_flashdata('message', '<script> alert("Data Berhasil Diupdate"); </script>');
                redirect("bunga");
            } else {
                $data["title"] = "Edit Binatang";
                $data["bunga"] = $bunga->edit($id);

                if (!$data["bunga"]) {
                    show_404();
                } else {
                    $this->load->view('header', $data);
                    $this->load->view('bunga/edit', $data);
                    $this->load->view('footer');
                }
            }
        }
    }

    public function destroy($id = null)
    {
        if ($id == null) {
            show_404();
        } else {
            $this->Bunga_model->destroy($id);
            $this->session->set_flashdata('message', '<script> alert("Data Berhasil Dihapus"); </script>');
            redirect("bunga");
        }
    }
}
