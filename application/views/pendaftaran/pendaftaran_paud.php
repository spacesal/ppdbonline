 <div id="layoutSidenav_content">
     <main>
         <div class="container-fluid px-4"><br>
             <h1 class="mt-4">Data Pendaftaran PAUD</h1>
             <ol class="breadcrumb mb-4">
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalPaud">
                     <i class="fas fa-plus"></i> Tambah Data
                 </button>
             </ol>
             <div class="card mb-4">
                 <div class="card-header">
                     <i class="fas fa-table me-1"></i>
                     Data Calon Siswa
                 </div>

                 <div class="card-body">
                     <table id="datatablesSimple">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Nik</th>
                                 <th>Nama </th>
                                 <th>TTL</th>
                                 <th>Agama</th>
                                 <th>Jenis Kelamin</th>
                                 <th>Alamat</th>
                                 <th>Ayah</th>
                                 <th>Ibu</th>
                                 <th>Telp</th>
                                 <th>Foto</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tfoot>
                             <th>No</th>
                             <th>Nik</th>
                             <th>Nama </th>
                             <th>TTL</th>
                             <th>Agama</th>
                             <th>Jenis Kelamin</th>
                             <th>Alamat</th>
                             <th>Ayah</th>
                             <th>Ibu</th>
                             <th>Telp</th>
                             <th>Foto</th>
                             <th>Aksi</th>
                         </tfoot>
                         <tbody>
                             <?php
                                $data = $this->db->query("select * from pendaftaran_paud")->result_array();
                                $no = 1;
                                foreach ($data as $row) {
                                ?>

                                 <tr>
                                     <td>
                                         <?= $no ?>
                                     </td>
                                     <td>
                                         <?= $row['nik'] ?>
                                     </td>
                                     <td>
                                         <?= $row['nama_lengkap'] ?>
                                     </td>
                                     <td>
                                         <?= $row['ttl'] ?>
                                     </td>
                                     <td>
                                         <?= $row['agama'] ?>
                                     </td>
                                     <td>
                                         <?= $row['jk'] ?>
                                     </td>
                                     <td>
                                         <?= $row['alamat'] ?>
                                     </td>
                                     <td>
                                         <?= $row['nama_ayah'] ?>
                                     </td>
                                     <td>
                                         <?= $row['nama_ibu'] ?>
                                     </td>
                                     <td>
                                         <?= $row['telp'] ?>
                                     </td>
                                     <td>
                                         <?= $row['pas_foto'] ?>
                                     </td>
                                     <td>
                                         <a class="social-media-icon" href="<?= base_url('siswa/'); ?>"><span class="fas fa-pencil-square"></span></a>
                                         <a class="social-media-icon" href="<?= base_url('siswa/hapusdatapaud'); ?>"><span class="fas fa-trash"></span></a>
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
             <div class="modal fade" id="ModalPaud" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="staticBackdropLabel">Pendaftaran PAUD</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <form action="<?= base_url('siswa/paud'); ?>" method="post">
                             <div class="modal-body">
                                 <div class="form-group">
                                     <label>Nik</label>
                                     <input type="text" name="nik" id="nik" placeholder="Masukkan Nik" class="form-control form-control-user">
                                 </div>
                                 <div class="form-group">
                                     <label>Nama Lengkap</label>
                                     <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" class="form-control form-control-user">
                                 </div>
                                 <div class="form-group">
                                     <label>Tempat Tanggal Lahir</label>
                                     <input type="text" name="ttl" id="ttl" placeholder="Masukkan Tempat Tanggal Lahir" class="form-control form-control-user">
                                 </div>
                                 <div class="form-group">
                                     <label>Agama</label>
                                     <select class="form-select" name="agama" aria-label="">
                                         <option selected>--- Pilih Agama ---</option>
                                         <option value="islam">Islam</option>
                                         <option value="Kristen">Kristen</option>
                                         <option value="Katholik">Katholik</option>
                                         <option value="Hindu">Hindu</option>
                                         <option value="Budha">Budha</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label>Jenis Kelamin</label>
                                     <div class="form-check">
                                         <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                                         <label class="form-check-label" for="flexRadioDefault1">
                                             Perempuan
                                         </label>
                                     </div>
                                     <div class="form-check">
                                         <input class="form-check-input" type="radio" name="jk" id="Laki-laki">
                                         <label class="form-check-label" for="flexRadioDefault2">
                                             Laki-laki
                                         </label>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label>Alamat</label>
                                     <textarea name="alamat" class="form-control" style="height: 70px" placeholder="Masukkan alamat lengkap"></textarea>
                                 </div>
                                 <div class="form-group">
                                     <label>Nama Ayah</label>
                                     <input type="text" name="nama_ayah"  placeholder="Masukkan Nama Lengkap Ayah" class="form-control form-control-user">
                                 </div>
                                 <div class="form-group">
                                     <label>Nama Ibu</label>
                                     <input type="text" name="nama_ibu"  placeholder="Masukkan Nama Lengkap Ibu" class="form-control form-control-user">
                                 </div>
                                 <div class="form-group">
                                     <label>No. Telp</label>
                                     <input type="text" name="telp"  placeholder="Masukkan Nomor Telepon" class="form-control form-control-user">
                                 </div>
                                 <div class="form-group">
                                     <label>Pas Foto</label>
                                     <input type="file" name="pas_foto" class="form-control form-control-user">
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