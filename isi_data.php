<div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                <div class="card col-6">
                        <div class="card-header"> 
                            <h5>Isi Data dengan Tepat</h5>
                        </div>
                        <div class="card-body" > 
                        <form action="simpan_catatan.php" method="post">
                            <div class="form-group mb-2 ">
                                <label>Pilih Tanggal</label>
                                <input name="tanggal" type="date" required class="form-control" placeholder="Masukan Tanggal">
                            </div>
                            <div class="form-group mb-2 mt-2">
                                <label>Pilih Jam</label>
                                <input name="jam" type="time" required class="form-control" placeholder="Masukan Jam">
                            </div>
                            <div class="form-group mb-2 mt-2">
                                <label>Pilih Lokasi</label>
                                <input name="lokasi" type="text" required class="form-control" placeholder="Masukan Lokasi">
                            </div>
                            <div class="form-group mb-2 mt-2">
                                <label>Suhu Tubuh</label>
                                <input name="suhu" type="number" required class="form-control" placeholder="Masukan Suhu Tubuh">
                            </div>
                            <div class="form-group mb-2 mt-2">
                                <button type="submit" class="btn btn-primary"> SIMPAN </button>
                                <button type="reset" class="btn btn-warning"> HAPUS </button>
                                
                            </div>
                        </form>
                        </div>
                    </div>
                </div>