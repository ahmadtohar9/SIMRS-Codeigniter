<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep_m extends CI_Model {

	// start datatables
    var $column_order = array(null, 'no_resep', 'tgl_perawatan','no_rawat','nm_dokter','nm_pasien');
    var $column_search = array('no_resep','nm_dokter','nm_pasien'); //set column field database for datatable searchable
    var $order = array('tgl_perawatan' => 'desc'); // default order 
 
    private function _get_datatables_query() {
        $this->db->select('resep_obat.*, dokter.nm_dokter, pasien.nm_pasien');
        $this->db->from('resep_obat');
        $this->db->join('dokter','resep_obat.kd_dokter=dokter.kd_dokter');
        $this->db->join('reg_periksa','resep_obat.no_rawat=reg_periksa.no_rawat');
        $this->db->join('pasien','reg_periksa.no_rkm_medis=pasien.no_rkm_medis');
        $this->db->order_by('tgl_perawatan','desc');
        $i = 0;
         foreach ($this->column_search as $resep) { // loop column 
            if(@$_POST['search']['value']) { // if datatable send POST for search
                if($i===0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($resep, $_POST['search']['value']);
                } else {
                    $this->db->or_like($resep, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }  else if(isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    function get_datatables() {
        $this->_get_datatables_query();
        if(@$_POST['length'] != -1)
        $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all() {
        $this->db->from('resep_obat');
        return $this->db->count_all_results();
    }
    // end datatables

    function delete($no_resep)
    {
        $this->db->where('no_resep', $no_resep);
        $this->db->delete('resep_obat');
    }

    function getData()
    {
        $tanggal = date('Y-m-d');

        $this->db->select('resep_obat.*, dokter.nm_dokter,pasien.nm_pasien');
        $this->db->from('resep_obat');
        $this->db->join('dokter','resep_obat.kd_dokter=dokter.kd_dokter');
        $this->db->join('reg_periksa','resep_obat.no_rawat=reg_periksa.no_rawat');
        $this->db->join('pasien','reg_periksa.no_rkm_medis=pasien.no_rkm_medis');
        $this->db->where('tgl_perawatan', $tanggal);
        $query = $this->db->get();
        return $query;
    }
}

