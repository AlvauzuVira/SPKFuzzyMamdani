<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLaporan');
    }


    public function gizi_perbulan()
    {
        $this->load->view('KepalaPuskesmas/Layouts/head');
        $this->load->view('KepalaPuskesmas/Layouts/navbar');
        $this->load->view('KepalaPuskesmas/Layouts/aside');
        $this->load->view('KepalaPuskesmas/LapGiziPerbulan');
        $this->load->view('KepalaPuskesmas/Layouts/footer');
    }
    public function status_gizi()
    {
        $this->load->view('KepalaPuskesmas/Layouts/head');
        $this->load->view('KepalaPuskesmas/Layouts/navbar');
        $this->load->view('KepalaPuskesmas/Layouts/aside');
        $this->load->view('KepalaPuskesmas/LapStatusGizi');
        $this->load->view('KepalaPuskesmas/Layouts/footer');
    }
    public function lapgiziperbulan()
    {
        $status_gizi = $this->input->post('gizi');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data = array(
            'laporan' => $this->mLaporan->status_gizi_perbulan($status_gizi, $bulan, $tahun)
        );
        $this->load->view('KepalaPuskesmas/Layouts/head');
        $this->load->view('KepalaPuskesmas/Layouts/navbar');
        $this->load->view('KepalaPuskesmas/Layouts/aside');
        $this->load->view('KepalaPuskesmas/hasillapstatbulan', $data);
        $this->load->view('KepalaPuskesmas/Layouts/footer');
    }
    public function lapstatusgizi()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data = array(
            'laporan' => $this->mLaporan->all_status_gizi($bulan, $tahun)
        );
        $this->load->view('KepalaPuskesmas/Layouts/head');
        $this->load->view('KepalaPuskesmas/Layouts/navbar');
        $this->load->view('KepalaPuskesmas/Layouts/aside');
        $this->load->view('KepalaPuskesmas/hasillapgizi', $data);
        $this->load->view('KepalaPuskesmas/Layouts/footer');
    }
}

/* End of file Laporan.php */
