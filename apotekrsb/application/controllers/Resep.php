<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

	function __construct() {
	date_default_timezone_set('Asia/Jakarta');

	parent::__construct();
	$this->load->model('resep_m');
	}

	public function get_all()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/v_getAll');
		$this->load->view('admin/footer');
	}

	function get_ajax() {
        $list = $this->resep_m->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $resep) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $resep->no_resep;
            $row[] = $resep->tgl_perawatan;
            $row[] = $resep->no_rawat;
            $row[] = $resep->nm_dokter;
            $row[] = $resep->nm_pasien;
            $row[] = '
                    <a href="'.site_url('resep/del/'.$resep->no_resep).'" onclick="return confirm(\'Yakin hapus data?\')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->resep_m->count_all(),
                    "recordsFiltered" => $this->resep_m->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
    }

    public function del($no_resep)
    {
        $this->resep_m->delete($no_resep);
        redirect('resep/get_all');
    }

    public function del_data($no_resep)
    {
        $this->resep_m->delete($no_resep);
        redirect('resep/get_resep');
    }

    public function get_resep()
    {
        $data ['resep_obat'] = $this->resep_m->getData()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/v_getData', $data);
        $this->load->view('admin/footer');

    }
}