<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Kelas</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal"
                data-target="#tambah_kelas">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Kelas</span>
            </a>

            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Nama Walikelas</th>
                    <th colspan="1"> AKSI</th>
                </tr>
                <?php
                $no = 1;
                foreach ($list as $list_kls) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td>
                        <?php if ($list_kls->id_kelas == '1') {
                                echo 'Pegon Bacaan';
                            } elseif ($list_kls->id_kelas == '2') {
                                echo 'Lambatan';
                            } elseif ($list_kls->id_kelas == '3') {
                                echo 'Cepatan';
                            } 
                            ?>
                    </td>
                    <td><?= $list_kls->nama ?></td>
                    <td align="center" style="width: 50">
                        <a href="#" class="btn btn-sm btn-primary btn-icon-split mb-3" data-toggle="modal"
                            data-target="#edit_kelas">
                            <span class="icon text-white-50">
                                <i class="fas fa-pen"></i>
                            </span>
                        </a>
                    </td>
                    <?php endforeach; ?>
                </tr>
            </table>
        </div>
    </div>

    <!-- Modal Tambah Kelas -->
    <div class=" modal fade" id="tambah_kelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class=" modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'admin/data_kelas/tambah_kelas'; ?>" method="post"
                        enctype="multipart/form-data">

                        <form class="row g-3">
                            <div class="col-mb-6">
                                <label for="kelas" class="form-label">Kelas
                                </label>
                                <select class="form-control" aria-label=".form-select-sm example" name="id_kelas">
                                    <?php foreach($list_kelas as $kls) :?>
                                    <option>
                                        <?php if ($kls->id_kelas == '1')
                                                    {echo'Pegon Bacaan';}
                                                elseif ($kls->id_kelas == '2')
                                                    {echo'Lambatan';} 
                                                elseif ($kls->id_kelas == '3')
                                                    {echo'Cepatan';}
                                                elseif ($kls->id_kelas =='4')
                                                    {echo 'Screening Test';}?>
                                        <?php endforeach; ?>
                                    </option>
                                </select>
                            </div>
                            <div class="col-mb-6">
                                <label for="nama_walikelas" class="form-label">Nama Walikelas</label>
                                <select class="form-control" aria-label=".form-select-sm example" name="id_user">
                                    <?php foreach($list_walikelas as $wkl) : ?>
                                    <option value="<?php echo $wkl->nama?>">
                                        <?php echo $wkl->nama ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <br>
                </div>

                <div class=" modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
                </form>
            </div>
        </div>