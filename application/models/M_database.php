<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_database extends CI_Model {

	public function __construct() {
		date_default_timezone_set('Asia/Jakarta');
	}

	function update_status( $id_akta, $data )
	{
	    $this->db->where( 'id_akta', $id_akta );
	    $this->db->update( 'akta', $data );
	}

	public function getdatabyid($id){
        $this->db->where('id_serahterima',$id);
        // $query = $this->db->get('serahterimabb');
        $query = $this->db
			      ->select('p.*, c.nama_jaksa as nama_jaksa1, d.nama_jaksa as nama_jaksa2, c.id_jaksa, d.id_jaksa')
		         ->join('jaksa c', 'p.id_jaksa1 = c.id_jaksa', 'LEFT')
		         ->join('jaksa d', 'p.id_jaksa2 = d.id_jaksa', 'LEFT')
		         ->get('serahterimabb p');
        return $query->result();
    }

    public function getdataputusan($id){
        $this->db->where('id_pendapathukum',$id);
        $query = $this->db
			      ->select('p.*, c.id_serahterima, c.no_putusan')
		         ->join('serahterimabb c', 'p.id_serahterimabb = c.id_serahterima', 'LEFT')
		         ->get('pendapathukum p');
        return $query->result();
    }

	/**
	 * find()
	 * Fungsi untuk mengambil record data
	 * @return array
	 */
	public function find($table, $field = '', $value = '', $order_by = '', $order_type = '') {
		if ($field != '' && $value != '') {
			$this->db->where($field, $value);
		}

		if ($order_by != '') {
			if ($order_type != '') {
				$this->db->order_by($order_by, $order_type);
			} else {
				$this->db->order_by($order_by, 'ASC');
			}
		}

		return $this->db->get($table);
	}

	/**
	 * save()
	 * Fungsi untuk menyimpan data kedalam tabel
	 * @return boolean
	 */
	public function save($table, $data) {
		return $this->db->insert($table, $data);
	}

	/**
	 * update()
	 * Fungsi untuk mengupdate record data dalam tabel
	 * @return boolean
	 */
	public function update($field, $value, $table, $data) {
		return $this->db->where($field, $value)->update($table, $data);
	}

	/**
	 * delete()
	 * Fungsi untuk menghapus record data dalam tabel
	 * @return boolean
	 */
	public function delete($field, $value, $table) {
		if (is_array($value)) {
			$this->db->where_in($field, $value);
		} else {
			$this->db->where($field, $value);
		}
		return $this->db->delete($table);
	}

	/**
	 * dropdown()
	 * Fungsi untuk membuat form dropdown
	 * @return array
	 */
	public function dropdown($key, $value, $table, $is_null = FALSE) {
		$query = $this->db->get($table);
		if ($query->num_rows() > 0) {
			if ($is_null != FALSE) {
				$data[NULL] = 'PILIH :';
			}
			foreach ($query->result() as $row) {
				$data[$row->$key] = $row->$value;
			}
			return $data;
		} 
		return [];
	}

	public function dropdownreadyputusan($key, $value, $table, $is_null = FALSE) {
		$query = $this->db->query('SELECT a.no_putusan, a.id_serahterima, b.id_serahterimabb
                                FROM serahterimabb a
                                LEFT JOIN pendapathukum b ON a.id_serahterima = b.id_serahterimabb
                                WHERE b.id_serahterimabb IS NULL');
		if ($query->num_rows() > 0) {
			if ($is_null != TRUE) {
				$data[NULL] = 'PILIH NO PUTUSAN :';
			}
			foreach ($query->result() as $row) {
				$data[$row->$key] = $row->$value;
			}
			return $data;
		} 
		return [];
	}

	/**
	 * is_exist()
	 * Fungsi untuk mengecek ketersediaan record data
	 * @return boolean
	 */
	public function is_exist($field, $value, $table, $pk = '', $id = '') {
		$this->db->where($field, $value);
		if ($id != '') {
			$this->db->where($pk . ' != ', $id);
		}
		return $this->db->count_all_results($table) > 0 ? TRUE : FALSE;
	}

	/**
	 * Fungsi untuk menu recursive : TOP Navigasi
	 */
	public function get_parent_page($induk = 0) {
		$data = [];
		$this->db->from('posts');
		$this->db->where('post_parent', $induk);
		$this->db->where('post_type', 'page');
		$this->db->order_by('order_pages ASC, post_title ASC');
		$result = $this->db->get();
		foreach ($result->result() as $row) {
			$data[] = [
				'post_id' => $row->post_id,
				'post_title' => $row->post_title,
				'slug' => $row->slug,
				'child' => $this->get_parent_page($row->post_id),
			];
		}

		return $data;
	}

	/**
	 * Fungsi untuk table recursive : file category
	 */
	public function get_parent_table($induk = 0) {
		$data = [];
		$this->db->from('file_category');
		$this->db->where('parent', $induk);
		$this->db->order_by('category', 'ASC');
		$result = $this->db->get();
		foreach ($result->result() as $row) {
			$data[] = [
				'category_id' => $row->category_id,
				'category' => $row->category,
				'child' => $this->get_parent_table($row->category_id),
			];
		}

		return $data;
	}

	/*
	 * fungsi untuk membuat widget category
	 */
	public function widget_post_category() {
		return $this->db->query("
			SELECT p.category_id
				, c.category
				, COUNT(*) as jumlah
			FROM posts p
			LEFT JOIN category c ON c.category_id = p.category_id
			WHERE p.post_type = 'post'
			GROUP BY p.category_id
			ORDER BY c.category ASC
		");
	}

	/**
	 * Fungsi untuk widget arsip post
	 */
	public function widget_archive_posts() {
		return $this->db->query("
			SELECT SUBSTR(post_date, 6, 2) as kode
				, MONTHNAME(post_date) AS bulan,
				(SELECT COUNT(*) FROM posts WHERE MONTHNAME(post_date) = bulan AND post_type = 'post') AS jumlah
			FROM posts
			WHERE YEAR(post_date) = YEAR(CURDATE())
			AND post_type = 'post'
			GROUP BY 1,2
			ORDER BY SUBSTR(post_date, 6, 2)
		");
	}

	/**
	 * Fungsi untuk slide show berita, Tabs pengumuman, dan Tabs Sekilas Info
	 */
	public function posts($type = 'post') {
		return $this->db->query("
			SELECT p.*, u.display_name
			FROM posts p
			LEFT JOIN users u ON p.user_id = u.id
			WHERE p.post_type = '$type'
			ORDER BY p.post_id DESC
			LIMIT 5
		");
	}

	/**
	 * Fungsi untuk Tabs Agenda
	 */
	public function agenda() {
		return $this->db
			->order_by('mulai', 'DESC')
			->limit(5)
			->get('agenda');
	}


	public function per_bulan($tahun) {
		return $this->db->query("
			SELECT SUBSTR(tanggal_daftar, 6, 2) AS bulan,
			COUNT(no_daftar) AS jumlah
			FROM siswa
			WHERE tanggal_daftar != '0000-00-00'
			AND LEFT(tanggal_daftar, 4) = '$tahun'
			GROUP BY SUBSTR(tanggal_daftar, 6, 2)
			ORDER BY SUBSTR(tanggal_daftar, 6, 2) ASC
		");
	}
	
	public function get_recent_photo() {
		return $this->db
			->select('photo_id, photo_title, photo_thumb, photo_original')
			->order_by('photo_id', 'DESC')
			->get('photo', 8);
	}

	public function showpost() {
		return $this->db->query("
			SELECT p.id_post,
				p.post_date,
				p.post_title,
				c.kategori,
				u.username,
				p.post_content,
				p.post_image,
				p.slug
			FROM posts p
			LEFT JOIN kategori c ON c.id_kategori = p.id_kategori
			LEFT JOIN users u ON u.id_user = p.id_user
			WHERE p.post_type = 'post'
			ORDER BY p.id_post DESC
			LIMIT 3
		");
	}

	public function datasambutan() {
		return $this->db->query("
			SELECT p.id_post,
				p.post_date,
				p.post_title,
				c.kategori,
				p.post_content,
				p.post_image,
				p.slug
			FROM posts p
			LEFT JOIN kategori c ON c.id_kategori = p.id_kategori
			WHERE p.post_type = 'page'
			ORDER BY p.id_post DESC
			LIMIT 1
		");
	}

	public function datafoto() {
		return $this->db->query("
			SELECT p.id_photo,
				p.photo_title,
				p.photo_thumb,
				p.photo_original,
				c.album
			FROM photo p
			LEFT JOIN album c ON c.id_album = p.id_album
			ORDER BY p.id_photo DESC
			LIMIT 1
		");
	}


	public function is_valid_captcha($str) {
		$expiration = time() - 7200; // Two hour limit
		$this->db->where('captcha_time < ', $expiration)->delete('captcha');
		$sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
		$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();
		return $row->count > 0;
	}

	public function is_mail_exist($email, $table) {
		return $this->db->where('email', $email)->count_all_results($table) == 0;
	}

	public function no_daftar($year) {
		$query = $this->db->query("
				SELECT MAX(RIGHT(no_daftar, 5)) AS max_number
				FROM siswa
				WHERE status_siswa = 'baru'
				AND left(no_daftar, 4) = '$year'
			");

		$no_daftar = "";
		if ($query->num_rows() == 1) {
			$data = $query->row();
			$number = ((int) $data->max_number) + 1;
			$no_daftar = sprintf("%05s", $number);
		} else {
			$no_daftar = "00001";
		}
		return $year . $no_daftar;
	}

   public function get_options() {
      $query = $this->db->select('variable, value')->get('options');
      $options = [];
      foreach($query->result() as $row) {
      	$options[$row->variable] = $row->value;
      }
      return $options;
   }

   //////////////////////////////////////////////////////////////////////////////////////////////////////////

   public function printaktabersk($params){//tgl, bln , tahun
		if($params[0]=='00' && $params[1] != '00'){ //menampilkan perbulan
			$sql = "SELECT *
			FROM akta
			WHERE MONTH(tgl_input_akta) =  '".$params[1]."'
			AND YEAR(tgl_input_akta ) =  '".$params[2]."' AND status = 'masuksk'" ;
			$query = $this->db->query($sql);
		}else if($params[0]=='00' && $params[1]=='00'){ //menampilkan pertahun
			$sql = "SELECT *
			FROM akta
			WHERE YEAR(tgl_input_akta ) =  '".$params[2]."' AND status = 'masuksk'" ;
			$query = $this->db->query($sql);
		}else{
			$sql = "SELECT *
			FROM akta
			WHERE DAY(tgl_input_akta ) = ?
			AND MONTH(tgl_input_akta ) =  ?
			AND YEAR(tgl_input_akta ) =  ?
			AND status = 'masuksk'" ;
			$query = $this->db->query($sql,$params);
		}		
		if($query->num_rows()>0)
			{
			return $query-> result_array();
		}else{
			return array();}
	}

	public function printaktaselesai($params){//tgl, bln , tahun
		if($params[0]=='00' && $params[1] != '00'){ //menampilkan perbulan
			$sql = "SELECT *
			FROM akta LEFT JOIN saksi ON akta.id_akta = saksi.id_akta
			WHERE MONTH(tgl_input_akta) =  '".$params[1]."'
			AND YEAR(tgl_input_akta ) =  '".$params[2]."' AND status = 'selesai'" ;
			$query = $this->db->query($sql);
		}else if($params[0]=='00' && $params[1]=='00'){ //menampilkan pertahun
			$sql = "SELECT *
			FROM akta LEFT JOIN saksi ON akta.id_akta = saksi.id_akta
			WHERE YEAR(tgl_input_akta ) =  '".$params[2]."' AND status = 'selesai'" ;
			$query = $this->db->query($sql);
		}else{
			$sql = "SELECT *
			FROM akta LEFT JOIN saksi ON akta.id_akta = saksi.id_akta
			WHERE DAY(tgl_input_akta ) = ?
			AND MONTH(tgl_input_akta ) =  ?
			AND YEAR(tgl_input_akta ) =  ?
			AND status = 'selesai'" ;
			$query = $this->db->query($sql,$params);
		}		
		if($query->num_rows()>0)
			{
			return $query-> result_array();
		}else{
			return array();}
	}

	public function printaktapernikahan($params){//tgl, bln , tahun
		if($params[0]=='00' && $params[1] != '00'){ //menampilkan perbulan
			$sql = "SELECT *
			FROM pernikahan
			WHERE MONTH(tgl_input_nikah) =  '".$params[1]."'
			AND YEAR(tgl_input_nikah ) =  '".$params[2]."' AND status = 'selesai'" ;
			$query = $this->db->query($sql);
		}else if($params[0]=='00' && $params[1]=='00'){ //menampilkan pertahun
			$sql = "SELECT *
			FROM pernikahan
			WHERE YEAR(tgl_input_nikah ) =  '".$params[2]."' AND status = 'selesai'" ;
			$query = $this->db->query($sql);
		}else{
			$sql = "SELECT *
			FROM pernikahan
			WHERE DAY(tgl_input_nikah ) = ?
			AND MONTH(tgl_input_nikah ) =  ?
			AND YEAR(tgl_input_nikah ) =  ?
			AND status = 'selesai'" ;
			$query = $this->db->query($sql,$params);
		}		
		if($query->num_rows()>0)
			{
			return $query-> result_array();
		}else{
			return array();}
	}

	public function printaktakematian($params){//tgl, bln , tahun
		if($params[0]=='00' && $params[1] != '00'){ //menampilkan perbulan
			$sql = "SELECT *
			FROM kematian
			WHERE MONTH(tgl_input_kematian) =  '".$params[1]."'
			AND YEAR(tgl_input_kematian ) =  '".$params[2]."' AND status = 'selesai'" ;
			$query = $this->db->query($sql);
		}else if($params[0]=='00' && $params[1]=='00'){ //menampilkan pertahun
			$sql = "SELECT *
			FROM kematian
			WHERE YEAR(tgl_input_kematian ) =  '".$params[2]."' AND status = 'selesai'" ;
			$query = $this->db->query($sql);
		}else{
			$sql = "SELECT *
			FROM kematian
			WHERE DAY(tgl_input_kematian ) = ?
			AND MONTH(tgl_input_kematian ) =  ?
			AND YEAR(tgl_input_kematian ) =  ?
			AND status = 'selesai'" ;
			$query = $this->db->query($sql,$params);
		}		
		if($query->num_rows()>0)
			{
			return $query-> result_array();
		}else{
			return array();}
	}

	
}