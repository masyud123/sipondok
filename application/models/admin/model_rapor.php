<?php

class Model_rapor extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('santri');
	}

	public function detail_indikator($id = NULL)
	{
		$query = $this->db->get_where('mapel', array('id_kelas' => $id))->row();
		return $query;
	}

	public function detail_rapor($id = NULL)
	{
		$query = $this->db->get_where('rapor', array('id_rapor' => $id))->row();
		return $query;
	}


	public function getMapel($id)
	{

		$this->db->select('rapor.*,mapel.*');
		$this->db->from('rapor');
		$this->db->join('mapel', 'mapel.id_mapel = rapor.id_mapel');
		$this->db->where('id_santri', $id);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getSum($id)
	{
		$this->db->select_sum('nilai');
		$this->db->from('rapor');
		$this->db->where('id_santri', $id);
		return $this->db->get()->row();
	}

	public function getAvg($id)
	{
		$this->db->select_avg('nilai');
		$this->db->from('rapor');
		$this->db->where('id_santri', $id);
		return $this->db->get()->row();
	}
}
