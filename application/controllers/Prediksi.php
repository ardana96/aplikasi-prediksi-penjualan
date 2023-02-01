<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prediksi extends CI_Controller
{

    function __construct()

    {
        parent::__construct();
        $this->sesnama = $this->session->userdata('usersnama');
        $this->seslevel = $this->session->userdata('level');
        $this->sesstatus = $this->session->userdata('status');

        if ($this->sesstatus != 'login') {
            redirect('login');
        }
    }

    public function index()

    {
        $data['ses_nama'] = $this->sesnama;
        $data['ses_level'] = $this->seslevel;
        $data['judul'] = "Prediksi";
        $data['judul_top'] = "Prediksi | Prediksi Prediksi Bateeq";
        $data['pageM'] = 'prediksi';
        $data['page'] = 'prediksi';

        $data['barang_view'] = $this->Barang_model->barang_view();
        $data['content'] = 'v_Prediksi/index';
        $this->load->view('template', $data);
    }

    function cari()
    {
        $data['ses_nama'] = $this->sesnama;
        $data['ses_level'] = $this->seslevel;
        $data['judul'] = "Prediksi";
        $data['judul_top'] = "Prediksi | Prediksi Prediksi Bateeq";
        $data['pageM'] = 'prediksi';
        $data['page'] = 'prediksi';
        $params = $this->input->post('BarangId');
        $tahunAkhir = $this->Prediksi_model->lastYear($params);
        $data['tahun']  =  $this->Prediksi_model->firstYear($params);
        $data['tahunAkhir'] = $tahunAkhir;
        $data['BarangId'] = $params;

        $filterTahunAkhir = $tahunAkhir['Tahun'];

        $data['hasilPrediksi'] = $this->Prediksi_model->hasilPrediksi_view($params, $filterTahunAkhir);
        $data['hasilPrediksiPrev'] = $this->Prediksi_model->hasilPrediksi_view($params, $filterTahunAkhir);
        $data['prediksi_view'] = $this->Prediksi_model->prediksi_view($params);


        $data['content'] = 'v_Prediksi/hasil';
        $this->load->view('template', $data);
    }

    function print($params)
    {
        $data['ses_nama'] = $this->sesnama;
        $data['ses_level'] = $this->seslevel;
        // $data['judul'] = "Prediksi";
        // $data['judul_top'] = "Prediksi | Prediksi Prediksi Bateeq";
        // $data['pageM'] = 'prediksi';
        // $data['page'] = 'prediksi';
        //$params = $this->input->post('BarangId');
        $tahunAkhir = $this->Prediksi_model->lastYear($params);
        $data['tahun']  =  $this->Prediksi_model->firstYear($params);
        $data['tahunAkhir'] = $tahunAkhir;
        $data['BarangId'] = $params;

        $filterTahunAkhir = $tahunAkhir['Tahun'];

        $data['hasilPrediksi'] = $this->Prediksi_model->hasilPrediksi_view($params, $filterTahunAkhir);
        $data['hasilPrediksiPrev'] = $this->Prediksi_model->hasilPrediksi_view($params, $filterTahunAkhir);
        $data['prediksi_view'] = $this->Prediksi_model->prediksi_view($params);


        //$data['content'] = 'v_Prediksi/hasil';
        $this->load->view('v_Prediksi/print', $data);
    }
}
