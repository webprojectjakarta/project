<?php defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class C_masuk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_masuk');
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{
		$biaya = '500';
		$id = $_GET['idcard'];
		$waktu = date('Y-m-d H:i:s');
		$keterangan = 'Masuk';
		$cekPengunjung = "Pengunung";
		
		$cek = $this->M_masuk->cekpengunjung($id);
		if($cek == '1')
		{
			$ceksaldo = $this->M_masuk->getsaldo($id);
			foreach($ceksaldo as $cek):
				$saldo = $cek->Saldo;
			endforeach;
			$transaksi = $saldo - $biaya;
			if($transaksi < '0')
			{ ?>
				<script type="text/javascript">
					alert('Saldo Tidak Cukup');
				</script>
			<?php }
			elseif($transaksi >= '0')
			{
				$data = array(
					'Saldo' => $transaksi);
				$result = $this->M_masuk->updatesaldo($id, $data);
				if($result == '1')
				{
					$data = array(
						'idcard' => $id,
						'waktu' => $waktu,
						'keterangan' => $keterangan
					);
					$hasil = $this->M_masuk->simpan($data);
					if($hasil != '1')
					{
						die('Invalid query: ');
					}
				}
			}
		}
		else
		{
			echo "%none";
		}
	}
}