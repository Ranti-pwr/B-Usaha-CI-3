<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="row mt-5">
			<div class="col-lg-12 mt-2">
				<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
				<div class="row">
					<div class="col-md-8">
						<a href="<?= base_url()?>keuangan/tambah_penjualan" class="btn btn-primary mt-1 mb-3">
							Tambah Penjualan Produk
						</a>
					</div>
					<div class="col-md-4">
						<form action="<?= base_url() ?>keuangan/cariPenjualan" method="POST">
							<div class="form-row">
								<div class="form-group col-md-5">
									<select class="form-control" id="bulan" name="bulan">
										<?php
										//buat array bulan
                                        $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                        if ($this->session->userdata('bulanJual')) { //jika nilai bulan yang didapat dari inputan
                                            $bln = $this->session->userdata('bulanJual') - 1; //maka di kurangi satu dari array yang urutan dimulai dari 0
                                            $temp = $this->session->userdata('bulanJual');// setelahnya disimpan unt penggunaan sementara
                                        } else {
                                            $bln = date('n') - 1; //ambil bulan saat ini, kuranngi 1 dari array yang dimulai dari 0
                                            $temp = date('n'); //simpan nilai sementara
                                        }
                                        echo "<option value=$temp> $bulan[$bln] </option>"; 

                                        $nilai = count($bulan); // Mendapatkan jumlah bulan dalam array
                                        for ($i = 0; $i < $nilai; $i += 1) {// Loop untuk membuat opsi dropdown untuk bulan lainnya, kecuali bulan yang diproses
                                            $j = $i + 1; // Menambahkan 1 karena nilai bulan dimulai dari 1, sedangkan array dimulai dari 0
                                            if ($bulan[$i] != $bulan[$bln]) { //periksa apakah bulan yang diperoses sama dengan yang di tampilkan
                                                echo "<option value=$j> $bulan[$i] </option>"; //tampilkan bulan yang tidak di proses
                                            }
                                        }
										/*
										Logika lanjut :by chatGPT
										1.Mendefinisikan Array Bulan: Program dimulai dengan mendefinisikan array $bulan.
										2. Memeriksa Sesuai Pengguna (User Session): Program kemudian memeriksa apakah bulan penjualan sudah tersimpan dalam sesi pengguna.
											Jika ya, maka nilai bulan tersebut diambil. Jika tidak, maka digunakan bulan saat ini.
										3. Menampilkan Opsi Dropdown untuk Bulan yang Dipilih: Program menampilkan opsi dropdown untuk bulan yang sedang diproses,
											baik itu bulan penjualan yang sudah disimpan dalam sesi pengguna atau bulan saat ini.
										4. Looping untuk Membuat Opsi Dropdown untuk Bulan Lainnya: Program menggunakan looping for untuk membuat opsi dropdown untuk bulan-bulan lainnya,
											kecuali bulan yang sedang diproses.
										*/
                                        ?>
									</select>
								</div>
								<div class="form-group col-md-5">
									<select class="form-control" id="tahun" name="tahun" title="Pilih Tahun">

										<?php
                                         // Memeriksa apakah sesi pengguna (user session) memiliki nilai tahun yang tersimpan
											if ($this->session->userdata('tahun')) {
												// Jika ya, maka ambil nilai tahun dari sesi pengguna
												$j = $this->session->userdata('tahun');
											} else {
												// Jika tidak, maka gunakan tahun saat ini
												$j = date('Y');
											}

											// Menampilkan opsi dropdown untuk tahun yang sedang diproses (tahun dari sesi pengguna atau tahun saat ini)
											echo "<option value=$j> $j </option>";

											// Looping untuk membuat opsi dropdown untuk tahun-tahun lainnya
											for ($i = 2021; $i <= date('Y') + 10; $i += 1) {
												// Menampilkan opsi dropdown untuk tahun lainnya, kecuali tahun yang sedang diproses
												if ($i != $j) {
													echo "<option value='$i'> $i </option>";
												}
										
											}
                                        ?>
									</select>
								</div>
								<div class="form-group col-md-2 mt-1">
									<button type="submit" class="btn btn-primary">Cari</button>
								</div>
							</div>
						</form>
					</div>
				</div>


				<table class="table table-bordered table-light shadow-sm p-3 mb-5 bg-white rounded dt-responsive nowrap"
					id="tabel-keuangan" width="100%">
					<thead>
						<tr>
							<th scope="col" class="text-center">Nama Produk</th>
							<th scope="col" width="5%" class="text-center">Unit</th>
							<th scope="col" width="18%" class="text-center">Keuntungan (Rp)</th>
							<th scope="col" width="15%" class="text-center">Tanggal Terjual</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($penjualan as $pj) : ?>
						<tr>
							<td class="text-capitalize"><?= $pj['produk_name']; ?>
								<span class="badge badge-light float-right"><?= $pj['input'] ?>x Penjualan</span>
							</td>
							<td class="text-center"><?= $pj['unit']; ?></td>
							<td class="text-center"><?= number_format($pj['total_untung'], 0, ',', '.') ?></td>
							<td class="text-center font-weight-bolder"><?= $pj['tanggal_jual']; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<a class="btn btn-primary btn-lg text-light font-weight-bolder"
					href="<?= base_url()  ?>keuangan/penjualanToPdf">PDF FILE</a>
			</div>
		</div>
	</section>
</div>
