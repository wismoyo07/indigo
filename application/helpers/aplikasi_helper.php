<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
      case 'dibuat':
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
      case 'ada':
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

// buat dirrektori

if (!function_exists('create_dir')) {
   function create_dir($dir) {
      if (!is_dir($dir)) {
         if (!mkdir($dir, 0777, true)) {
            die('Failed to create directory : ' . $dir);
         }
      }
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
      $date = 2021;
      $str = date('Y') > $date ? "COPYRIGHT &copy; " . $date . ' - ' . date('Y') : "COPYRIGHT &copy; " . $date;
      return $str;
   }
}

if (!function_exists('developed')) {
   function developed() {
      return 'DIKEMBANGKAN OLEH <a href="#" target="_blank">PENGADILAN AGAMA SIMALUNGUN</a>';
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