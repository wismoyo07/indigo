<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('number2alpha')) {
   function number2alpha($index) {
      --$index;
        if ($index >= 0 && $index < 26)
            return chr(ord('A') + $index);
        else if ($index > 25)
            return (number2alpha($index / 26)) . (number2alpha($index % 26 + 1));
        else
            show_error("Invalid Column # " . ($index + 1));
   }
}

if ( ! function_exists('array_date')) {
   function array_date($start, $end) {
      $range = [];    
      if (is_valid_date($start))
         $start = strtotime($start);
      if (is_valid_date($end) ) 
         $end = strtotime($end);      
      if ($start > $end) 
         return array_date($end, $start);     
      do {
         $range[] = date('Y-m-d', $start);
         $start = strtotime("+ 1 day", $start);
      }
      while($start < $end);      
      return $range;
   }
}

if (!function_exists('recursive_list')) {
   function recursive_list($data) {
      $str = "";
      foreach ($data as $list) {
         $href = site_url('home/readmore/' . $list['post_id'] . '/' . $list['slug']);
         if (count($list['child']) > 0) {
            $href = '#';
         }
         $str .= "<li ".(count($list['child']) > 0 ? 'class="level2"' : '')."'><a href='".$href."'>" . strtoupper($list['post_title']) . "</a>";
         $subchild = recursive_list($list['child']);
         if ($subchild != '') {
            $str .= "<ul>" . $subchild . "</ul>";
         }
         $str .= "</li>";
      }
      return $str;
   }
}

if (!function_exists('recursive_table')) {
   function recursive_table($data) {
      $str = "";
      foreach ($data as $list) {
         $str .= '<tr>';
         $str .= '<td><input type="checkbox" class="checkbox" name="category_id[]" value="' . $list['category_id'] . '" /></td>';
         $str .= '<td>- - <i>' . $list['category'] . '</i></td>';
         $str .= '<td>';
         $str .= '<div class="btn-group">';
         $str .= '<a href="' . site_url('file_category/update/' . $list['category_id']) . '" class="btn btn-sm bg-teal btn-flat" data-toggle="tooltip" data-original-title="edit"><i class="glyphicon glyphicon-edit"></i></a>';
         $str .= '<a href="' . site_url('file_category/delete/' . $list['category_id']) . '" class="btn btn-sm bg-red btn-flat" data-toggle="tooltip" data-original-title="hapus"><i class="glyphicon glyphicon-trash"></i></a>';
         $str .= '</div>';
         $str .= '</td>';
         $str .= '</tr>';
      }
      return $str;
   }
}

/**
 * Nested List
 * @param   Array
 * @return  string
 */
if (!function_exists('nested_list')) {
   function nested_list($data) {
      $str = "";
      foreach ($data as $list) {
         $str .= '<li class="dd-item" data-id="' . $list['post_id'] . '">';
         $str .= '<div class="dd-handle">' . strtoupper($list['post_title']) . '</div>';
         $subchild = nested_list($list['child']);
         if ($subchild != '') {
            $str .= '<ol class="dd-list">' . $subchild . '</ol>';
         } else {
            $str .= '</li>';
         }
      }
      return $str;
   }
}

if (!function_exists('alert')) {
   function alert($type, $content) {
      $alert = '';
      if ($type == 'error') {
         $alert .= '<div class="alert alert-danger alert-dismissable">';
         $alert .= '<i class="fa fa-ban"></i>';
         $alert .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
         $alert .= $content;
         $alert .= '</div>';
      } elseif ($type == 'success') {
         $alert .= '<div class="alert alert-success alert-dismissable">';
         $alert .= '<i class="fa fa-check"></i>';
         $alert .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
         $alert .= $content;
         $alert .= '</div>';
      } elseif ($type == 'warning') {
         $alert .= '<div class="alert alert-warning alert-dismissable">';
         $alert .= '<i class="fa fa-warning"></i>';
         $alert .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
         $alert .= $content;
         $alert .= '</div>';
      } elseif ($type == 'info') {
         $alert .= '<div class="alert alert-info alert-dismissable">';
         $alert .= '<i class="fa fa-info"></i>';
         $alert .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
         $alert .= $content;
         $alert .= '</div>';
      }
      return $alert;
   }
}

if (!function_exists('status')) {
   function status($key = '') {
      $message = '';
      switch ($key) {
      case 'created':
         $message = 'Data sudah tersimpan !';
         break;
      case 'not_created':
         $message = 'Data tidak tersimpan !';
         break;
      case 'updated':
         $message = 'Data sudah diperbaharui !';
         break;
      case '404':
         $message = 'Halaman tidak ditemukan !';
         break;
      case 'deleted':
         $message = 'Data sudah dihapus !';
         break;
      case 'not_deleted':
         $message = 'Data tidak terhapus !';
         break;
      case 'not_selected':
         $message = 'Tidak ada data yang terpilih !';
         break;
      case 'existed':
         $message = 'Data sudah ada !';
         break;
      }
      return $message;
   }
}

if (!function_exists('indo_date')) {
   function indo_date($str) {
      if (!is_valid_date($str)) return NULL;
      $exp = explode("-", $str);
      return $exp[2] . ' ' . bulan($exp[1]) . ' ' . $exp[0];
   }
}

if (!function_exists('bulan')) {
   function bulan($kode, $type = 'L') {
      $bulan = '';
      switch ($kode) {
         case '01':
            $bulan = 'Januari';
            break;
         case '02':
            $bulan = 'Februari';
            break;
         case '03':
            $bulan = 'Maret';
            break;
         case '04':
            $bulan = 'April';
            break;
         case '05':
            $bulan = 'Mei';
            break;
         case '06':
            $bulan = 'Juni';
            break;
         case '07':
            $bulan = 'Juli';
            break;
         case '08':
            $bulan = 'Agustus';
            break;
         case '09':
            $bulan = 'September';
            break;
         case '10':
            $bulan = 'Oktober';
            break;
         case '11':
            $bulan = 'Nopember';
            break;
         case '12':
            $bulan = 'Desember';
            break;
      }
      if ($type != 'L') {
         return substr($bulan, 0, 3);
      }
      return $bulan;
   }
}

if (!function_exists('agama')) {
   function agama() {
      return [
         'Islam' => 'Islam',
         'Kristen' => 'Kristen',
         'Katholik' => 'Katholik',
         'Hindu' => 'Hindu',
         'Budha' => 'Budha',
      ];
   }
}

if (!function_exists('encode_url')) {
   function encode_url($key = '') {
      $CI = &get_instance();
      $CI->load->library('encrypt_url');
      return $CI->encrypt_url->encode($key);
   }
}

if (!function_exists('decode_url')) {
   function decode_url($key = '') {
      $CI = &get_instance();
      $CI->load->library('encrypt_url');
      return $CI->encrypt_url->decode($key);
   }
}

if (!function_exists('sex')) {
   function sex() {
      return [
         'Laki-laki' => 'Laki-laki',
         'Perempuan' => 'Perempuan',
      ];
   }
}

if (!function_exists('copyright')) {
   function copyright() {
      date_default_timezone_set('Asia/Jakarta');
      $date = 2014;
      $str = date('Y') > $date ? "Copyright &copy; " . $date . ' - ' . date('Y') : "Copyright &copy; " . $date;
      return $str;
   }
}

if (!function_exists('developed')) {
   function developed() {
      return 'Developed by <a href="http://sekolahku.web.id" target="_blank">sekolahku.web.id</a>';
   }
}

if (!function_exists('jenjang_pendidikan')) {
   function jenjang_pendidikan($str = '') {
      $arr = [
         'SD' => 'SD',
         'SDLB' => 'SDLB',
         'SMP' => 'SMPLB',
         'SMA' => 'SMA',
         'SMALB' => 'SMALB',
         'SMK' => 'SMK',
         'SLB' => 'SLB',
      ];
      return $str == '' ? $arr : $arr[$str];
   }
}

if (!function_exists('is_valid_date')) {
   function is_valid_date($str) {
      $split = [];
      if (preg_match("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/", $str, $split)) {
         return checkdate($split[2], $split[3], $split[1]);
      }
      return false;
   }
}

if (!function_exists('create_dir')) {
   function create_dir($dir) {
      if (!is_dir($dir)) {
         if (!mkdir($dir, 0777, true)) {
            die('Failed to create directory : ' . $dir);
         }
      }
   }
}

if (!function_exists('status_kepegawaian')) {
   function status_kepegawaian($key = '') {
      $arr = [
         '1' => 'PNS', 
         '2' => 'PNS Diperbantukan', 
         '3' => 'PNS DEPAG', 
         '4' => 'GTY/PTY', 
         '5' => 'GTT/PTT Provinsi', 
         '6' => 'GTT/PTT Kabupaten/Kota',
         '7' => 'Guru Bantu Pusat',
         '8' => 'Guru Honor Sekolah', 
         '9' => 'Tenaga Honor Sekolah', 
         '10' => 'CPNS', 
         '11' => 'Lainnya',
      ];
      return $key == '' ? $arr : $arr[$key];
   }
}

if (!function_exists('jenis_ptk')) {
   function jenis_ptk($key = '') {
      $arr = [
         '1' => 'Guru Kelas',
         '2' => 'Guru Mata Pelajaran',
         '3' => 'Guru BK',
         '4' => 'Guru Inklusi',
         '5' => 'Tenaga Administrasi Sekolah',
         '6' => 'Gurtu Pendamping',
         '7' => 'Guru Magang',
         '8' => 'Guru TIK',
         '9' => 'Laboran',
         '10' => 'Pustakawan',
         '11' => 'Lainnya'
      ];
      return $key == '' ? $arr : $arr[$key];
   }
}

if (! function_exists('status_anak')) {
   function status_anak($str = '') {
      $arr = [
         'Anak Kandung' => 'Anak Kandung',
         'Anak Angkat' => 'Anak Angkat'
      ];
      
      return $str == '' ? $arr : $arr[$str];
   }
}

if (! function_exists('pendidikan')) {
    function pendidikan($str = '') {
        $arr = [
            '0' => 'Tidak sekolah',
            '1' => 'PAUD',
            '2' => 'TK / sederajat',
            '3' => 'Putus SD',
            '4' => 'SD / sederajat',
            '5' => 'SMP / sederajat',
            '6' => 'SMA / sederajat',
            '7' => 'Paket A',
            '8' => 'Paket B',
            '9' => 'Paket C',
            '10' => 'D1',
            '11' => 'D2',
            '12' => 'D3',
            '13' => 'D4',
            '14' => 'Profesi',
            '15' => 'S1',
            '16' => 'Sp-1',
            '17' => 'S2',
            '18' => 'Sp-2',
            '19' => 'S3',
            '20' => 'Non formal',
            '21' => 'Informal',
            '22' => 'Lainnya'
        ];

        return $str == '' ? $arr : $arr[$str];
    }
}

/**
 * List Themes
 * @return array
 */
if (!function_exists('themes')) {
   function themes() {
      return [
         'classic' => 'Classic',
         'default' => 'Default',
      ];
   }
}

/**
 * Config Themes
 * @return array
 */
if (!function_exists('config_themes')) {
   function config_themes($theme = 'default') {
      $config = file_get_contents('./views/themes/'.$theme.'/config.json');
      return json_decode($config, true);
   }
}