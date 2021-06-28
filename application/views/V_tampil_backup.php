<?php
$pdf=new PDF('P','mm','A4'); 
$pdf->setData($detail, $jumlah);
$pdf->downloadName($detail);
$pdf->AliasNbPages();
$pdf->SetMargins(5,5,5);
$pdf->AddPage();
/**
 * 
 */
class PDF extends FPDF
{
    function setData($detail, $jumlah)
    {
        $i=0; foreach ($detail as $x) 
        {
            if($x->keterangan[$i] == 'Masuk')
            {
                $this->masuk[$i] = date('d-m-Y H:i:s',strtotime($x->waktu));
                $this->keluar[$i] = 'Belum Keluar';
            }
            elseif($x->keterangan[$i] == 'Keluar')
            {
                $this->keluar[$i] = date('d-m-Y H:i:s',strtotime($x->waktu));
            }
            $this->idcard[$i]    = $x->idcard;
            $this->nama[$i]      = $x->nama;
            $this->jeniskendaraan[$i]   = $x->Jeniskendaraan;
            $this->nomorkendaraan[$i] = $x->nomorkendaraan;
            $this->jurusan[$i]  = $x->jurusan;
            $this->keterangan[$i]  = $x->keterangan;
            $i++; 
        }
        $this->tanggal = date('d-m-Y');
        $this->jumlah = $jumlah;
        $this->rentang = 41;

    }

    function Header()
    {
        $this->SetXY(4,8);
        $this->Cell(25,17,'',1,0,'C');
        $this->Image('assets/image/RSUPNEW.png',9,9,15,15);
        $this->SetFont('Arial','B',8);
        $this->Cell(137,6,'UNIVERSITAS ISLAM NEGERI SULTAN SYARIF KASIM RIAU',1,0,'C');
        $this->SetFont('Arial','',8);
        $this->Cell(40,17,'',1,0,'');
        $this->SetXY(166,8);
        $this->Cell(40,6,'',1,0,'L');
        $this->SetXY(166,14);
        $this->Cell(40,5.5,'',1,0,'L');
        $this->SetXY(166,14);
        $this->Cell(12,5,'Tanggal',0,0,'L');
        $this->Cell(1.5,5,':',0,0,'C');
        $this->Cell(23,5,$this->tanggal,0,1,'L');
        $this->SetXY(166,20);
        $this->Cell(12,5,'Halaman',0,0,'L');
        $this->Cell(1.5,5,':',0,0,'C');
        $this->Cell(23,5,$this->PageNo(),0,1,'L');
        $this->SetXY(29,14);
        $this->SetFont('Arial','B',11);
        $this->Cell(137,11,'REKAP PENGUNJUNG',1,1,'C');
        $this->SetXY(4,25);
        $this->Cell(202,265,"",1,1);

        $this->SetXY(6,27);
        $this->SetFont('Arial','B',9);
        $this->Cell(8,7,'NO','TLR',0,'C', false);
        $this->SetXY(14,27);
        $this->Cell(35,7,'Nama','TLR',0,'C', false);
        $this->SetXY(49,27);
        $this->Cell(40,7,'Jenis Kendaraan','TLR',0,'C', false);
        $this->SetXY(89,27);
        $this->Cell(30,7,'Plat Nomor','TLR',0,'C', false);
        $this->SetXY(119,27);
        $this->Cell(30,7,'Jurusan','TLR',0,'C', false);
        $this->SetXY(149,27);
        $this->Cell(55,7,'Waktu',1,0,'C');
        $this->SetXY(6,34);
        $this->Cell(8,7,'','BLR',0,'L', false);
        $this->SetXY(14,34);
        $this->Cell(35,7,'','BLR',0,'L', false);
        $this->SetXY(49,34);
        $this->Cell(40,7,'','BLR',0,'L', false);
        $this->SetXY(89,34);
        $this->Cell(30,7,'','BLR',0,'L', false);
        $this->SetXY(119,34);
        $this->Cell(30,7,'','BLR',0,'L', false);
        $this->SetXY(149,34);
        $this->Cell(27.5,7,'Masuk',1,0,'C');
        $this->SetXY(176.5,34);
        $this->Cell(27.5,7,'Masuk',1,0,'C');
        for ($nomor=0; $nomor < $this->jumlah; $nomor++) { 
            $this->SetXY(6,$this->rentang);
            $this->SetFont('Arial','',9);
            $this->Cell(8,7,$nomor,1,0,'L');
            $this->SetXY(14,$this->rentang);
            $this->Cell(35,7,'',1,0,'L');
            $this->SetXY(49,$this->rentang);
            $this->Cell(40,7,'',1,0,'L');
            $this->SetXY(89,$this->rentang);
            $this->Cell(30,7,'',1,0,'L');
            $this->SetXY(119,$this->rentang);
            $this->Cell(30,7,'',1,0,'L');
            $this->SetXY(149,$this->rentang);
            $this->Cell(27.5,7,'',1,0,'L');
            $this->SetXY(176.5,$this->rentang);
            $this->Cell(27.5,7,'',1,0,'L');
        }
    }

    function Content()
    {

    }

    function Footer()
    {

    }

    function downloadName($detail)
    {
        foreach ($detail as $y) 
        {
            $this->idcard = $y->idcard;
        }
        $this->output($this->idcard.'.pdf','I');
    }

}

?>