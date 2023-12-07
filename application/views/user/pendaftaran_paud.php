<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Formulir Pendaftaran PAUD</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">
                    Silahkan lengkapi data dibawah ini dengan benar
                </li>
            </ol>
            <form action="user/save_pendaftaranpaud" method="post" style="max-width: 600px;">
                <h6>A. DATA SISWA</h6>
                <h7>1. Nama </h7>
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="" placeholder="Masukkan nama lengkap">
                </div>
                <div class="mb-3">
                    <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                    <input type="text" class="form-control" name="nama_panggilan" id="" placeholder="Masukkan nama panggilan">
                </div>
                <div class="mb-3">
                    <label for="ttl" class="form-label">2. Tempat , tanggal lahir</label>
                    <input type="text" class="form-control" name="ttl" id="" placeholder="Masukkan tempat tanggal lahir">
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">3. Agama</label>
                    <select class="form-select" name="agama" aria-label="">
                        <option selected>--- Pilih Agama ---</option>
                        <option value="1">Islam</option>
                        <option value="2">Kristen</option>
                        <option value="3">Katholik</option>
                        <option value="3">Hindu</option>
                        <option value="3">Budha</option>
                    </select>
                </div>
                    <div class="mb-3">
                        <label for="jk" class="form-label">4. Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">5. Nik</label>
                        <input type="text" class="form-control" name="nik" id="" placeholder="Masukkan NIK">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">6. Alamat</label>
                        <div class="form-floating">
                            <textarea class="form-control" name="alamat" placeholder="Masukkan alamat lengkap" style="height: 80px"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">7. Riwayat Pendidikan</label>
                        <div class="form-floating">
                            <textarea class="form-control" name="riwayat_pendidikan" placeholder="Masukkan Riwayat pendidikan" style="height: 80px"></textarea>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" value="submit">Submit</button>
                    <button class="btn btn-danger" value="submit">Reset</button>

            </form>
        </div>
</div>
</main>