<head>
  <title>Surat Balasan</title>
  <style type="text/css">
   .upper { text-transform: uppercase; }
   .lower { text-transform: lowercase; }
   .cap   { text-transform: capitalize; }
   .small { font-variant:   small-caps; }
</style>
<script type="text/javascript">
  window.print();
</script>
</head>
<body bgcolor="white">
  <form>
    <table align="center" border="0">
      <tr>
        <td rowspan="5"><img src="<?= base_url(); ?>assets/img/si/si.png" alt="Logo Surat" width="50" height="50"></td>
      </tr>
      <tr>
        <td><font face="Times New Roman" size="5"><center>PT.Surveyor Indonesia</center></font></td>
      </tr>
     <!--  <tr>
        <td><font face="Times New Roman" size="5"><center>KECAMATAN DUKUHTURI</center></font></td>
      </tr> -->
      <!-- <tr>
        <td><font face="Times New Roman" size="5.5"><center><b>KANTOR KEPALA DESA BANDASARI</b></center></font></td>
      </tr> -->
      <tr>
        <td><font face="Times New Roman" size="3"><center>Alamat : JL. Bukit Raya Indah,1</center></font></td>
      </tr>
    </table>
  </form>
  <hr size="3" noshade="8">
  <font face="Arial" size="5"> <p align="center"> <u> <b>LAPORAN PENGAJUAN</b></u></font><br>
  <!-- <font face="Arial" size="4"> Nomor: 8021/DES/2018 </p></font> -->
  <form>
    <table align="center" border="0">
       <input type="hidden" name="id" value="<?= $data['id']; ?>">
      <tr>
        <td align="left" colspan="3">Yang bertanda tangan di bawah ini :</td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" width="250">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
        <td>:</td>
        <td align="left">Kordinator</td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan</td>
        <td>:</td>
        <td align="left">Kordinator</td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
        <td>:</td>
        <td align="left">JL. Bukit Raya Indah,1 </td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" colspan="3">Dengan ini menerangkan bahwa menyetujui pengajuan transportasi dengan detail :</td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Lengkap</td>
        <td>:</td>
        <td align="left"><?php echo $data['nama_req']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagian</td>
        <td>:</td>
        <td align="left"><?php echo $user['bagian']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Transportasi</td>
        <td>:</td>
        <td align="left"><?php echo $data['jenis_trans']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tujuan</td>
        <td>:</td>
        <td align="left"><?php echo $data['tujuan_trans']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keperluan</td>
        <td>:</td>
        <td align="left"><?php echo $data['keperluan_trans']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dari</td>
        <td>:</td>
        <td align="left"><?php echo $data['req_dari']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ke</td>
        <td>:</td>
        <td align="left"><?php echo $data['req_ke']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Pinjam</td>
        <td>:</td>
        <td align="left"><?php echo $data['tanggal_pinjam']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jam Pinjam</td>
        <td>:</td>
        <td align="left"><?php echo $data['jam_pinjam']; ?></td>
      </tr>
       <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Kembali</td>
        <td>:</td>
        <td align="left"><?php echo $data['tanggal_kembali']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jam Kembali</td>
        <td>:</td>
        <td align="left"><?php echo $data['jam_kembali']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kode Proyek</td>
        <td>:</td>
        <td align="left"><?php echo $data['kode_proyek']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status</td>
        <td>:</td>
        <td align="left" style="color:<?= $data['color']; ?>"><?= $data['status_req'];?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Pengajuan</td>
        <td>:</td>
        <td align="left"><?= date('d F Y', $data['date_created']);?></td>
      </tr>
       <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Polisi</td>
        <td>:</td>
        <td align="left"><?php echo $data['no_polisi']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Supir</td>
        <td>:</td>
        <td align="left"><?php echo $data['nama_supir']; ?></td>
      </tr>
    </table>
    <BR>
    <table align="center" border="0">
      <tr>
        <td>
          Tanda Tangan Pemohon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kordinator
        </td>
      </tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>
        <font class="upper"><b><i>(<?php echo $data['nama_req']; ?>)</i></b></font>
      </td>
      <td align="right">
        <font class="upper"><b><i>(Kordinator)</i></b></font>
      </td>
    </tr>
    <tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" colspan="2">
          Mengetahui :
        </td>
      </tr>
      <tr>
        <td align="center" colspan="2">
          Kepala Cabang PT.Surveyor Indonesia
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <font class="upper"><b><i>(Jufnaidi)</i></b></font>
          </td>
        </tr>
      </table>
    </form>
  </body>