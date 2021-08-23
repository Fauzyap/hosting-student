<?php
require_once 'php/config.php';
require_once 'app/header.php';



$query = mysqli_query($conn, "SELECT * FROM siswa");
?>


<body class="bg-dark">
  <div class="mt-5 pt-3">
    <div class="container">
      <div class="card">
        <div class="card-header">
          <form action="index.php" method="GET">
            <div class="form-group mb-3 input-group">
              <span class="input-group-text">
                <i class='bx bx-search'></i>
              </span>
              <input type="text" class="form-control" placeholder="Cari Data" name="cari">
              <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            <div class="mb-3 radio-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radiocheck" id="radioNis" value="nis" autocomplete="off">
                <label class="form-check-label" for="radioNis">NIS</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radiocheck" id="radioNama" value="nama" autocomplete="off">
                <label class="form-check-label" for="radioNama">Nama</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radiocheck" id="radioTempat" value="ttl" autocomplete="off">
                <label class="form-check-label" for="radioTempat">Tempat Lahir</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radiocheck" id="radioSemua" value="semua" autocomplete="off">
                <label class="form-check-label" for="radioSemua">Semua</label>
              </div>
            </div>
          </form>
          <div class="mb-3">
            <a class="btn btn-success" href="index.php">Refresh</a>
          </div>
          <?php
          require_once 'app/sidebar.php';
          ?>
          <div class="p-1 my-container active-cont">
            <div>
              <table class="table table-dark">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  include 'php/search.php';
                  while ($row = mysqli_fetch_object($query)) {

                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $row->nis; ?></td>
                      <td><?= $row->nama; ?></td>
                      <td><?= $row->ttl; ?></td>
                    </tr>
                  <?php }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <a class="btn border-0" id="menu-btn">
            <i class="bx bx-menu"></i>
          </a>
        </div>

      </div>
    </div>
  </div>
  </div>
  </main>
  <!-- Javascript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="assets/js/jquery.backstretch.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>