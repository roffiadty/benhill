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
              <?php $chart_conn = mysqli_query($koneksi, "SELECT * FROM surat_jalan"); ?>
              <?php while( $chart_total = mysqli_fetch_assoc($chart_conn) ) : ?>
                <?php $id_ttl[]=$chart_total["total"] ;?>
              <?php endwhile ;?>
              <div id="barJanuari">
                <!-- replace 20 to actual data -->
                <?php echo $id_ttl[0] ;?>
              </div>
              <div id="barFebruari">
                <!-- replace 45 to actual data -->
                <?php echo $id_ttl[1] ;?>
              </div>
              <div id="barMaret">
                <!-- replace 30 to actual data -->
                <?php echo $id_ttl[2] ;?>
              </div>
              <div id="barApril">
                <!-- replace 60 to actual data -->
                <?php echo $id_ttl[3] ;?>
              </div>
              <div id="barMei">
                <!-- replace 83 to actual data -->
                <?php echo $id_ttl[4] ;?>
              </div>
              <div id="barJuni">
                <!-- replace 15 to actual data -->
              15
              </div>
              <div id="barJuli">
                <!-- replace 50 to actual data -->
              50
              </div>
              <div id="barAgustus">
                <!-- replace 85 to actual data -->
              85
              </div>
              <div id="barSeptember">
                <!-- replace 30 to actual data -->
              30
              </div>
              <div id="barOktober">
                <!-- replace 100 to actual data -->
              100
              </div>
              <div id="barNovember">
                <!-- replace 75 to actual data -->
              75
              </div>
              <div id="barDesember">
                <!-- replace 92 to actual data -->
              92
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
                  <?php $result = mysqli_query($koneksi, "SELECT * FROM surat_jalan"); ?>
                  <?php while ( $srt_jln = mysqli_fetch_assoc($result) ) : ;?>
                  <?php $tanggal = $srt_jln["tanggal"] ;?>
                  <?php $tgl = date_create($tanggal) ;?>
                  <?php $date_formated = date_format($tgl, 'd F Y') ;?>
                  <tr class="border-2 border-light text-center align-middle">
                    <th class="border-2 border-light text-center align-middle fs-6 px-0"><?php echo $i ;?></th>
                    <td class="border-2 border-light px-0"><?php echo $srt_jln["no_wo"] ;?></td>
                    <td class="border-2 border-light px-0"><?php echo $srt_jln["kode_bundel"] ;?></td>
                    <td class="border-2 border-light px-0"><?php echo $srt_jln["no_artikel"] ;?></td>
                    <td class="border-2 border-light px-0"><?php echo $srt_jln["nama_barang"] ;?></td>
                    <td class="border-2 border-light px-0"><?php echo $srt_jln["bundel"] ;?></td>
                    <td class="border-2 border-light px-0"><?php echo $srt_jln["total"] ;?></td>
                    <td class="border-2 border-light px-0"><?php echo $srt_jln["ratio"] ;?></td>
                    <td class="border-2 border-light px-0"><?php echo $date_formated ;?></td>
                  </tr>
                  <?php $i++ ;?>
                  <?php endwhile ;?>
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
                      Showing 1 to 5 of <?php echo $jml_entries ;?> entries</div>
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