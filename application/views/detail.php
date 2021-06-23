<div class="container-fluid">

    <div class="card">
        <div class="card-header">
    Detail barang
    </div>
        <div class="card-body">
            <?php foreach($barang as $brg): ?>
            <div class="row">
                <div class="col-md-4">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar?>" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $brg->nama_barang?></strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $brg->deskripsi?></strong></td>
                        </tr>

                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $brg->categories?></strong></td>
                        </tr>

                        <tr>
                            <td>Stok barang </td>
                            <td><strong><?php echo $brg->stok_barang?></strong></td>
                        </tr>

                        <tr>
                            <td>Harga </td>
                            <td><strong> <div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga_barang, 0,',','.') ?></div></strong></td>
                        </tr>

                    </table>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_barang,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                    <?php echo anchor('dashboard/index/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                </div>
            </div>
            <?php endforeach;?>
        </div>

    </div>
  
  </div>
</div>
</div>