<div id="layoutSidenav_content">
     <main>
         <div class="container-fluid px-4"><br>
             <h1 class="mt-4">Data pembayaran Paud</h1>
             <ol class="breadcrumb mb-4">
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalPembayaranPaud">
                     <i class="fas fa-plus"></i> Tambah Data
                 </button>
             </ol>
             <div class="card mb-4">
                 <div class="card-header">
                     <i class="fas fa-table me-1"></i>
                     Data Pembayaran
                 </div>

                 <div class="card-body">
                     <table id="datatablesSimple">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Nama Lengkap</th>
                                 <th>Bukti pembayaran</th>
                             </tr>
                         </thead>
                         <tfoot>
                             <th>No</th>
                             <th>Nama lengkap</th>
                             <th>Bukti pembayaran</th>
                         </tfoot>
                         <tbody>
                             <?php
                                $data = $this->db->query("select * from pembayaran_paud")->result_array();
                                $no = 1;
                                foreach ($data as $row) {
                                ?>

                                 <tr>
                                     <td>
                                         <?= $no ?>
                                     </td>
                                     <td>
                                         <?= $row['nama_lengkap'] ?>
                                     </td>
                                     <td>
                                         <?= $row['bukti_pembayaran'] ?>
                                     </td>
                                 </tr>
                             <?php
                                    $no++;
                                }
                                ?>
                             </tr>
                             </tfoot>
                         </tbody>
                     </table>
                 </div>
             </div>
             <!-- Modal -->
             <div class="modal fade" id="ModalPembayaranPaud" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="staticBackdropLabel">Pendaftaran PAUD</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <form action="<?= base_url('siswa/paud'); ?>" method="post">
                             <div class="modal-body">
                                 <div class="form-group">
                                     <label>Nama Lengkap</label>
                                     <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" class="form-control form-control-user">
                                 </div>
                                 <div class="form-group">
                                     <label>Bukti pembayaran</label>
                                     <input type="file" name="bukti_pembayaran" class="form-control form-control-user">
                                 </div>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                                 <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
     </main>