<section class="content-header">
      <h1>data barang</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">data barang</li>
      </ol>
    </section>

    <section class="content">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">data barang</h3>
          <div class="pull-right">
            <a href="<?=site_url('barang/add')?>" class="btn btn-primary btn-flat">
              <i class="fa fa-plus-circle"></i>
              <span>Tambah</span>
            </a>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>#</td>
                <td>Nama Barang</td>
                <td>Harga</td>
                <td>Stok</td>
                <td>Keterangan</td>
                <td>Actions</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach($row->result() as $key => $data) { ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data->nama_brg?></td>
                    <td><?=$data->harga?></td>
                    <td><?=$data->stok?></td>
                    <td><?=$data->keterangan?></td>
                    <td class="text-center" width="180px">
                        <a href="<?=site_url('barang/del/'.$data->nama_brg)?>" onclick=" return confirm('yakin menghapus data?')" class="btn btn-danger">
                          <i class="fa fa-trash "></i>
                          <span>Hapus</span>
                        </a>
                        <a href="<?=site_url('barang/edit/'.$data->nama_brg)?>" class="btn btn-success">
                          <i class="fa fa-trash "></i>
                          <span>Edit</span>
                        </a>
                    </td>
                </tr>
                <?php
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>