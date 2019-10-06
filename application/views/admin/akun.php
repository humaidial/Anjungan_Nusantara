    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">

          <div class="col-xxl-8 col-lg-12">
            <!-- Widget Statistic -->
            <div class="card card-shadow" id="widgetStatistic">
              <div class="card-block p-0">
                <div class="row no-space h-full" data-plugin="matchHeight">
                  <div class="col-md-12 col-sm-12">
                    <div class="panel">
          <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Manajemen Akun <?php echo $judul?></h3>
          </header>
          <div class="panel-body">
            <br>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-15">
                  <button id="addToTable" class="btn btn-outline btn-primary" type="button">
                    <i class="icon wb-plus" aria-hidden="true"></i>Tambah Data
                  </button>
                </div>
              </div>
            </div>
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>E-mail</th>
                  <th>No Handphone</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($data_akun as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->profile_nama ?></td>
                      <td><?php echo $key->e_mail ?></td>
                      <td><?php echo $key->profile_no_hp ?></td>
                      <td class="actions">
                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                          data-toggle="tooltip" data-original-title="Lihat Data"><i class="icon wb-wrench" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                          data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                          data-toggle="tooltip" data-original-title="Update"><i class="icon wb-edit" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                          data-toggle="tooltip" data-original-title="Hapus"><i class="icon wb-trash" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                <?php $i++ ;} ?>
                <!-- <tr>
                  <td>Damon</td>
                  <td>5516 Adolfo Green</td>
                  <td>Littelhaven</td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
                </div>
              </div>
            </div>
            <!-- End Widget Statistic -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Page -->
    <script type="text/javascript">
      $(document).ready( function () {
          $('#table_id').DataTable();
      } );
    </script>