<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Saran Pengaduan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Saran dan Pengaduan</th>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2"
                            aria-label="Date Time: activate to sort column descending" aria-sort="ascending">Date Time
                        </th>
                    </tr>
                    <?php 
      $no=1;
      foreach($saran as $sr) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $sr->saran ?></td>
                        <td><?php echo $sr->created ?></td>
                    </tr>

                    <?php endforeach; ?>