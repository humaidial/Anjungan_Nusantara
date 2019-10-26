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
            <h3 class="panel-title">Daftar Produk</h3>
          </header>
          <div class="panel-body">
            <br>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-15">
                  <a href="<?php echo base_url() ?>/Penjual/form_produk_baru">
                  <button class="btn btn-outline btn-primary" type="button" data-target="#exampleTabs" data-toggle="modal">
                    <i class="icon wb-plus" aria-hidden="true"></i>Tambah Data
                  </button>
                </a>
                </div>
              </div>
            </div>
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Stock</th>
                  <th>Nama Toko</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($produk_data as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->produk_nama ?></td>
                      <td><?php echo $key->subkategori_nama ?></td>
                      <td><?php echo $key->produk_harga ?></td>
                      <td><?php echo $key->produk_stock ?></td>
                      <td><?php echo $key->usaha_nama ?></td>
                      <?php $status = $key->produk_status; if($status == "Disetujui") { ?>
                          <td><button  type="button" class="btn btn-info btnStatus"><?php echo $status ?></button></td>
                      <?php }else{  ?>
                         <td><button id="<?php echo $key->produk_id?>" type="button" class="btn btn-danger btnStatus"><?php echo $status ?></button></td>
                        <?php } ?>
                      <td class="actions">
                         <a href="<?php echo base_url()?>Penjual/lihat_foto/<?php echo $key->produk_id ?>"><button type="submit" class="btn btn-info">Foto</button>
                          <button type="submit" class="btn btn-info">Deskripsi</button>
                         <button type="submit" class="btn btn-success">Update</button>
                         <button type="submit" class="btn btn-warning" id="<?php echo $key->produk_id ?>">Hapus</button>
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
        $('.btnStatus').click(function(){ 
               $.ajax({
                                  url : "<?php echo base_url();?>Admin/ganti_status_produk",
                                  method : "POST",
                                  data : { id : this.id},
                                  async : false,
                                  dataType : 'json',
                                  success: function(data){ 
                                    Swal.fire({
                                                title: data,
                                                type: 'success',
                                                confirmButtonColor: '#3085d6',
                                                confirmButtonText: 'OK'
                                              }).then((result) => {
                                                if (result.value) {
                                                  location.reload();
                                                }
                                              })

                                  }});

          });
      });
    </script>