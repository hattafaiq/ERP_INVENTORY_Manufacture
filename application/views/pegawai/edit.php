<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Edit Pegawai
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('pegawai') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id_pegawai' => $pegawai['id_pegawai']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama_supplier">Nama Pegawai</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('nama_pegawair', $pegawai['nama_pegawai']); ?>" name="nama_pegawai" id="nama_pegawai" type="text" class="form-control" placeholder="Nama Pegawai...">
                        </div>
                        <?= form_error('nama_pegawai', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="no_telp_pegawai">Nomor Telepon</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                            </div>
                            <input value="<?= set_value('no_telp_pegawai', $pegawai['no_telp_pegawai']); ?>" name="no_telp_pegawai" id="no_telp_pegawai" type="text" class="form-control" placeholder="Nomor Telepon...">
                        </div>
                        <?= form_error('no_telp_pegawai', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat_pegawai">Alamat</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="alamat_pegawai" id="alamat_pegawai" class="form-control" rows="4" placeholder="Alamat..."><?= set_value('alamat_pegawai', $pegawai['alamat_pegawai']); ?></textarea>
                        </div>
                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="posisi_pegawai">Posisi</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="posisi_pegawai" id="posisi_pegawai" class="form-control" rows="4" placeholder="Posisi.."><?= set_value('posisi_pegawai', $pegawai['posisi_pegawai']); ?></textarea>
                        </div>
                        <?= form_error('posisi_pegawai', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="gaji_pegawai">Gaji</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="gaji_pegawai" id="gaji_pegawai" class="form-control" rows="4" placeholder="Gaji.."><?= set_value('gaji_pegawai', $pegawai['gaji_pegawai']); ?></textarea>
                        </div>
                        <?= form_error('gaji_pegawai', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>