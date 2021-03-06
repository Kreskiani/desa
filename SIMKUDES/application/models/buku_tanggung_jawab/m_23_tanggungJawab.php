<?php
	/**
	* 
	*/
	class M_23_tanggungJawab extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		/*
		=====================
			  Template
		=====================
		*/

		public function templateSimpan($tabel, $data)
		{
			$this->db->insert($tabel, $data);
		}

		public function templateHapus($tabel, $data)
		{
			$this->db->where($data);
			$this->db->delete($tabel);
		}

		public function templateUpdate($tabel, $where, $data)
		{
			$this->db->where($where);
			$this->db->update($tabel, $data);
		}

		/*
		=====================
		#	  Template 	#
		=====================
		*/

		public function cekTanggungJawabpertahun($tahun)
		{
			$this->db->select('*');
			$this->db->from('buku_tanggung_jawab');
			$this->db->where('tahun', $tahun);
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function insert($data)
		{
			$this->db->insert('buku_tanggung_jawab', $data);
		}

		public function select()
		{
			$this->db->select('*');
			$this->db->from('buku_tanggung_jawab');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$query = $this->db->get();
			return $result  = $query->result();
		}

		public function selectDesc()
		{
			$this->db->select('*');
			$this->db->from('buku_tanggung_jawab');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$this->db->order_by('id', 'desc');
			$query = $this->db->get();
			return $result  = $query->result();
		}

		public function selectSum($field)
		{
			$this->db->select_sum($field);
			$this->db->from('buku_tanggung_jawab');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function selectJumlahTahunKegiatan($field, $dataWhere)
		{
			$this->db->select_sum($field);
			$this->db->from('buku_tanggung_jawab');
			$this->db->where($dataWhere);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function selectWhere($where)
		{
			$this->db->select('*');
			$this->db->from('buku_tanggung_jawab');
			$this->db->where($where);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function selectWhereTahun($where)
		{
			$this->db->select('*');
			$this->db->from('buku_tanggung_jawab');
			$this->db->where($where);
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function delete($data)
		{
			$this->db->where($data);
			$this->db->delete('buku_tanggung_jawab');
		}
		public function update($dataUpdate, $dataWhere)
		{
			$this->db->where($dataWhere);
			$this->db->update('buku_tanggung_jawab', $dataUpdate);
		}
	}