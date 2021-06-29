<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
  <style>
    #loading{
      width: 50px;
      height: 50px;
      border: solid 5px #ccc;
      border-top-color: blue;
      border-bottom-color: blue;
      border-radius: 100%;

      position: fixed;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      margin: auto;
      animation: putar 0.7s linear infinite;
    }

    @keyframes putar{
      form{transform: rotate(0deg)}
      to{transform: rotate(360deg)}
    }
  </style>
</head>
<body>
  <div id="loading"></div>
<h1 align="center"><?= $title ?></h1>

<table width="100%" border="1" style="border-collapse: collapse;">
  <thead>
    <th>no</th>
    <th>nim</th>
    <th>nama</th>
    <th>qrcode</th>
    <th>barcode</th>
  </thead>
  <tbody>
  	<?php $no = 1; foreach ($mahasiswa as $m) : ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $m->nim ?></td>
      <td><?= $m->nama ?></td>
      <td>
      	<img src="<?= base_url('renderbarcode/qrcode/'.$m->nim) ?>">
      </td>
      <td>
      	<img src="<?= base_url('renderbarcode/barcode/'.$m->nim) ?>">
      </td>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>


<script>
  var loading = document.getElementById('loading');
  window.addEventListener('load', function(){
    loading.style.display = "none";
  });
</script>
</body>
</html>