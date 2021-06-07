<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Pegawai
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('pegawai/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Pegawai
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Posisi</th>
                    <th>Gaji</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($pegawai) :
                    $no = 1;
                    foreach ($pegawai as $s) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s['nama_pegawai']; ?></td>
                            <td><?= $s['no_telp_pegawai']; ?></td>
                            <td><?= $s['alamat_pegawai']; ?></td>
                            <td><?= $s[`posisi_pegawai`]; ?></td>
                            <td><?= $s['gaji_pegawai']; ?></td>
                            <th>
                                <a href="<?= base_url('pegawai/edit/') . $s['id_pegawai'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('pegawai/delete/') . $s['id_supplier'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>