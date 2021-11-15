<section class="content-header">
<h1>tambah barang</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">tambah barang</li>
</ol>
</section>

<section class="content">
<div class="box box-success">
    <div class="box-header with-border">
    <h3 class="box-title"> <?=ucfirst($page)?> Barang</h3>
    <div class="pull-right">
        <a href="<?=site_url('barang')?>" class="btn btn-primary btn-flat">
        <i class="fa fa-undo"></i>
        <span>Kembali</span>
        </a>
    </div>
    </div>
            <div class="box-body">
                <form action="<?=site_url('barang/process')?>" method="POST" role="form">
                    <div class="from-group">
                        <label>Nama Barang</label>
                        <input type="hidden" name="id" value="<?=$row->nama_brg?>">
                        <input type="text" name="nama_brg" value="<?=$row->nama_brg?>" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label>Harga</label>
                        <input type="number" name="harga" value="<?=$row->harga?>" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label>Stok</label>
                        <input type="number" name="stok" value="<?=$row->stok?>" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" value="<?=$row->keterangan?>" class="form-control">
                    </div>
                    <div class="box-footer">
                        <button type="submit" name="<?=$page?>" class="btn btn-success">
                            <i class="fa fa-paper-plane"></i>
                            <span>Save</span>
                        </button>
                        <button type="reset" class="btn btn-danger btn-flat">
                            <i class=" fa fa-refresh"></i> 
                            <span>Reset</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>