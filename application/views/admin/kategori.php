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
                          <h3 class="panel-title">Kategori dan Subkategori</h3>
                        </header>
                        <div class="panel-body">
                <!-- Example Tabs Left -->
                <div class="example-wrap">
                   <div class="mb-15">
                      <button class="btn btn-outline btn-primary" type="button" data-target="#exampleNew" data-toggle="modal">
                        <i class="icon wb-plus" aria-hidden="true"></i>Tambah Kategori
                      </button>
                       <button class="btn btn-outline btn-primary" type="button" data-target="#exampleTabs" data-toggle="modal">
                        <i class="icon wb-plus" aria-hidden="true"></i>Tambah Subkategori
                      </button>
                  </div>
                  <div class="nav-tabs-vertical nav-tabs-inverse" data-plugin="tabs">
                    <ul class="nav nav-tabs mr-25" role="tablist">
                      <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsLeftOne" aria-controls="exampleTabsLeftOne" role="tab" aria-selected="true">Kategori</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftTwo" aria-controls="exampleTabsLeftTwo" role="tab" aria-selected="false">Subkategori</a></li>
                    </ul>
                    <div class="tab-content py-15">
                      <div class="tab-pane active" id="exampleTabsLeftOne" role="tabpanel">
                      <br>  
                      <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; foreach ($kategori as $key) { ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $key->kategori_nama ?></td>
                      <td class="actions">
                         <button type="submit" class="btn btn-success" data-target="#exampleUpdate" data-toggle="modal" id="$key->kategori_id">Update</button>
                         <button type="submit" class="btn btn-warning" id="$key->kategori_id">Hapus</button>
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
                      <div class="tab-pane" id="exampleTabsLeftTwo" role="tabpanel">
                       
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Example Tabs Left -->
                 <!-- Modal new data -->
                          <div class="modal fade" id="exampleNew" aria-hidden="true" aria-labelledby="examplePositionCenter"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Tambah Kategori</h4>
                                </div>
                                <div class="modal-body">
                                    <h4 class="example-title">Nama Kategori</h4>
                                 <input type="text" class="form-control infoNama" id="namaKategori" placeholder="Nama">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" id="saveKategori">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->
                <!--batas-->
                        </div>
                      </div>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Widget Statistic -->
          </div>
        </div>
    <!-- End Page -->
    <script type="text/javascript">
        $(document).ready( function () {

        $('#saveKategori').click(function(){ 
            var namaKategori = $('#namaKategori').val();

            set_get_kategori(0,namaKategori, 'baru');

            // console.log(hasil);
        });

       function set_get_kategori(id, nama, tipe){

             $.ajax({
                    url : "<?php echo base_url();?>Admin/proses_kategori",
                    method : "POST",
                    data : { id: id, nama : nama, tipe : tipe},
                    async : false,
                    dataType : 'json',
                    success: function(data){ 
                          alert(data);
                    }});
          }
        });
    </script>