<div class="card">
    <div class="card-body"> 
        <div class="col-lg-12">
        <div class="rounded h-100 p-4">
                            <h6 class="mb-4">Riwayat Catatan Perjalanan Anda</h6>
                            <table class="table display table-bordered" id="myTable" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th class="bg-light">Tanggal</th>
                                        <th>Jam</th>
                                        <th class="bg-light">Lokasi</th>
                                        <th>Suhu Tubuh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                $data= file('catatan.txt', FILE_IGNORE_NEW_LINES);
                                foreach($data as $value){
                                    $peach = explode('|', $value);
                                    if(isset($peach[0])){
                                ?>
                                <?php
                                if($peach[0] == $_SESSION['nik']){
                                ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <td class="bg-light"><?= $peach['2']; ?></td>
                                        <td><?= $peach['3']; ?></td>
                                        <td class="bg-light"><?= $peach['4']; ?></td>
                                        <td><?= $peach['5']; ?>&deg;C</td>
                                    </tr>
                                <?php }}} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>
    </div>