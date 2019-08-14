<?php require_once("../../core/init.php");

/**
* Sanin10 Framework Ver.1.0
*
* GENERAL DESCRIPTION: Sanin10 (read: Saninten) Framework
* dibuat untuk memudahkan author dalam mengelola content sebuah website.
* Dilengkapi dengan banyak plugin open-source yang siap untuk digunakan.
* 
* SUB DESCRIPTION:
* 
* @category   PHP Framework
* @package    Sanin10 Framework
* @author     Diana Sena Kurnia <senna.9942@gmail.com>
* @copyright  2017  By Senna Application Software
* @license    GNU-GPL
* @version    1.0
* @link       http://sennasoft.com
*/

isset($_GET['getdata']) ? $request = $_GET['getdata'] : $request = '';

$output  	= array('data' => array());
switch($request)
{		
	default:echo $modules->notifikasi($level,$module,$action);break;	
	case 'rekrut_read':
		$objects	= $generates->read_all($tabel='t_konter');
		foreach($objects as $object_data)
		{
			$output['data'][] = array(
			'',
			strtoupper($object_data['kd_konter']),
			strtoupper($object_data['nama_konter']),
			strtoupper($object_data['alamat_1'] . ' ' . $object_data['alamat_2'] . ' ' . $object_data['alamat_3'] ),
			strtoupper($object_data['Kota']));	
		}
		echo(json_encode($output));
	break;
}

/**
* End of file x_mod_rekrut.php
* Location: ../mod_rekrut/x_mod_rekrut.php
*/