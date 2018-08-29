<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        
    img{
      width: 50px;
     text-align: left;
    }
    </style>
</head>
<body>

     <?php 
      foreach($anggota as $d)?>

        
        <h3 align="center">KARTU TANDA ANGGOTA</h3>
        <h4 align="center">SMK NEGERI 2 SLAWI</h4>
       <p style="margin-left: 200px"> <img width="100px" height="100px" src="<?php echo base_url()?>asset/dist/img/bakhtiar.jpg" style="float: left;"></p>
        <p style="margin-left: 300px;">Nama :<?php echo $d->nama?></p>
        <p style="margin-left: 300px;">TTL  :<?php echo $d->tgl_lahir?></p>
        <p style="margin-left: 300px;">Jenis Kelamin :<?php echo $d->jenis_kelamin?></p>
        <p style="margin-left: 300px;">Alamat :<?php echo $d->alamat?></p>
        <form style="text-align: right;">

        
        </form>
        </form>
        
     </body>
     </html>