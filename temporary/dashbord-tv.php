<?php require "connect_db.php" ;?>

<?php
// checking erorr connect db
// if( !$result ) {
// echo mysqli_error($koneksi);
// } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap v5.0 -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="../cstm-style.css">
  <title>Dashboard TV</title>
</head>
<body>
<!-- start content wrapper -->
<div class="content-wrapper">
  <div class="card bg-dark text-light h-100">
    <div class="card-body">
      <h3 class="card-title">Data Monitoring Surat Jalan</h3>

      <div class="row align-items-center">
        <div class="col-md-4">
            <div class="card bg-black-accsent mt-5 h-100">
              <!-- start chart bar -->
              <canvas id="barChart" style="height: 36rem;">
              <?php $chart_connn = mysqli_query($koneksi, "SELECT * FROM surat_jalan"); ?>
              <?php while( $chart_date = mysqli_fetch_assoc($chart_connn) ) : ?>
                <?php $chart_dates=$chart_date["tanggal"] ;?>
                <?php $chart_dates_formated=date_create($chart_dates) ;?>
                <?php $chrt_dts_formated=date_format($chart_dates_formated, 'F') ;?>
                <?php if($chrt_dts_formated=="January") {
                  $januari[]=$chrt_dts_formated;
                  $total_januari=count($januari);
                } ;?>
                <?php if($chrt_dts_formated=="February") {
                  $februari[]=$chrt_dts_formated;
                  $total_februari=count($februari);
                } ;?>
                <?php if($chrt_dts_formated=="March") {
                  $maret[]=$chrt_dts_formated;
                  $total_maret=count($maret);
                } ;?>
                <?php if($chrt_dts_formated=="April") {
                  $april[]=$chrt_dts_formated;
                  $total_april=count($april);
                } ;?>
                <?php if($chrt_dts_formated=="May") {
                  $mei[]=$chrt_dts_formated;
                  $total_mei=count($mei);
                } ;?>
                <?php if($chrt_dts_formated=="June") {
                  $juni[]=$chrt_dts_formated;
                  $total_juni=count($juni);
                } ;?>
                <?php if($chrt_dts_formated=="July") {
                  $juli[]=$chrt_dts_formated;
                  $total_juli=count($juli);
                } ;?>
                <?php if($chrt_dts_formated=="August") {
                  $agustus[]=$chrt_dts_formated;
                  $total_agustus=count($agustus);
                } ;?>
                <?php if($chrt_dts_formated=="September") {
                  $september[]=$chrt_dts_formated;
                  $total_september=count($september);
                } ;?>
                <?php if($chrt_dts_formated=="October") {
                  $oktober[]=$chrt_dts_formated;
                  $total_oktober=count($oktober);
                } ;?>
                <?php if($chrt_dts_formated=="November") {
                  $november[]=$chrt_dts_formated;
                  $total_november=count($november);
                } ;?>
                <?php if($chrt_dts_formated=="December") {
                  $desember[]=$chrt_dts_formated;
                  $total_desember=count($desember);
                } ;?>
                <?php endwhile ;?>

              <div id="barJanuari">
                <?php echo $total_januari ;?>
              </div>
              <div id="barFebruari">
                <?php echo $total_februari ;?>
              </div>
              <div id="barMaret">
                <?php echo $total_maret ;?>
              </div>
              <div id="barApril">
                <?php echo $total_april ;?>
              </div>
              <div id="barMei">
                <?php echo $total_mei ;?>
              </div>
              <div id="barJuni">
                <?php echo $total_juni ;?>
              </div>
              <div id="barJuli">
                <?php echo $total_juli ;?>
              </div>
              <div id="barAgustus">
                <?php echo $total_agustus ;?>
              </div>
              <div id="barSeptember">
                <?php echo $total_september ;?>
              </div>
              <div id="barOktober">
                <?php echo $total_oktober ;?>
              </div>
              <div id="barNovember">
                <?php echo $total_november ;?>
              </div>
              <div id="barDesember">
                <?php echo $total_desember ;?>
              </div>
            </canvas>
            <!-- end chart bar -->
          </div>
        </div>

        <div class="col-md-8">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
              </div>
              <div class="col-3">
                <div class="row">
                  <div class="col-12">
                    <!-- start search bar -->
                    <label for="search-data" class="form-label fs-6 fw-bold">Search</label>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" id="search-data">
                  </div>
                  <!-- end search bar -->
                </div>
              </div>
            </div>

            <!-- start table surat jalan -->
            
              <div class="table-responsive">
                <table class="table border text-light mt-3">
                <thead>
                  <tr class="border-2 border-light text-center align-middle fs-6">
                    <th scope="col" class="border-2 border-light px-0">No.</th>
                    <th scope="col" class="border-2 border-light px-0">No. WO</th>
                    <th scope="col" class="border-2 border-light px-0">Kode Bundel</th>
                    <th scope="col" class="border-2 border-light px-0">Artikel</th>
                    <th scope="col" class="border-2 border-light px-0">Nama barang</th>
                    <th scope="col" class="border-2 border-light px-0">Bundel<br>(bdl)</th>
                    <th scope="col" class="border-2 border-light px-0">Total<br>(pcs)</th>
                    <th scope="col" class="border-2 border-light px-0">Ratio</th>
                    <th scope="col" class="border-2 border-light px-0">Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ;?>
                  <?php $x=$i ?>
                  <?php $result = mysqli_query($koneksi, "SELECT * FROM surat_jalan"); ?>
                  <?php $srt_jln=0; for($srt_jln; $srt_jln < 5; $srt_jln++) {
                    $dt_srt_jln = mysqli_fetch_assoc($result);
                    $data_tanggal = $dt_srt_jln["tanggal"];
                    $dt_tgl = date_create($data_tanggal);
                    $date_formated = date_format($dt_tgl, 'd F Y');
                    echo '<tr class="border-2 border-light text-center align-middle">';
                    echo '<td class="border-2 border-light text-center align-middle fs-6 px-0">'.$i.'</td>';
                    echo '<td class="border-2 border-light px-0">'.$dt_srt_jln["no_wo"].'</td>';
                    echo '<td class="border-2 border-light px-0">'.$dt_srt_jln["kode_bundel"].'</td>';
                    echo '<td class="border-2 border-light px-0">'.$dt_srt_jln["no_artikel"].'</td>';
                    echo '<td class="border-2 border-light px-0">'.$dt_srt_jln["nama_barang"].'</td>';
                    echo '<td class="border-2 border-light px-0">'.$dt_srt_jln["bundel"].'</td>';
                    echo '<td class="border-2 border-light px-0">'.$dt_srt_jln["total"].'</td>';
                    echo '<td class="border-2 border-light px-0">'.$dt_srt_jln["ratio"].'</td>';
                    echo '<td class="border-2 border-light px-0">'.$date_formated.'</td>';
                  $i++;
                  };?>
                </tbody>
                </table>
              </div>
            <!-- end table surat jalan -->

            <div class="row">
              <!-- start showing entries -->
              <div class="col-11">
                <div class="card w-50 bg-black-accsent">
                  <?php $entries = mysqli_query($koneksi, "SELECT * FROM surat_jalan"); ?>
                  <?php $jml_entries=mysqli_num_rows($entries) ;?>
                  <div class="card-body text-light text-center fs-6 fw-bold py-2">
                      Showing <?php echo $x ;?> to <?php echo $srt_jln ;?> of <?php echo $jml_entries ;?> entries</div>
                  </div>
                </div>
                <!-- end showing entries -->

                <!-- start Previous and Next button -->
                <div class="col-1">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                        <a class="bg-black-accsent page-link py-2 fs-6" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item disabled"><a class="bg-black-accsent page-link py-2 fs-6 text-light fw-bold user-select-none" href="#">1</a></li>
                      <li class="page-item">
                        <a class="bg-black-accsent page-link py-2 fs-6" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- end Previous and Next button -->
              </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- end content wrapper -->

<!-- library chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../assets/chartjs/chart.js"></script>
<!-- end library chart js -->

<!-- start script bootstrap 5 -->
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<!-- end script bootstrap 5 -->
</body>
</html>