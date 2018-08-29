<?php
	$pdf = new Pdf('P', 'mm', 'A5', true, 'UTF-8', false);
	$pdf->SetTitle('Laporan Data Anggota');
	$pdf->SetTopMargin(20);
	$pdf->setFooterMargin(20);
	$pdf->SetAutoPageBreak(true);
	$pdf->SetAuthor('Author');
	$pdf->SetDisplayMode('real', 'default');
	$pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',12);
        // mencetak string 
        $pdf->Cell(190,7,'APLIKASI PRAMUKA',0,1,'C');
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(190,7,'DATA ANGGOTA ',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','B',10);
        $pdf->Cell(15,6,'ID',1,0);
        $pdf->Cell(40,6,'NAMA ',1,0);
        $pdf->Cell(15,6,'JK',1,0);
        $pdf->Cell(30,6,'AGAMA',1,0);
        $pdf->Cell(30,6,'GOL DARAH',1,0);
        $pdf->Cell(60,6,'ALAMAT',1,1);

        $anggota = $this->db->get('tb_anggota')->result();
        foreach ($anggota as $row){
            $pdf->Cell(15,6,$row->id_anggota,1,0);
            $pdf->Cell(40,6,$row->nama,1,0);
            $pdf->Cell(15,6,$row->jenis_kelamin,1,0);
            $pdf->Cell(30,6,$row->agama,1,0);
            $pdf->Cell(30,6,$row->gol_darah,1,0);
            $pdf->Cell(60,6,$row->alamat,1,1);
        }
        $pdf->Output();
?>
 