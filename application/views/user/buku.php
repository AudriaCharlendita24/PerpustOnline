
<?= $this->session->flashdata('pesan'); ?> 
    <div style="padding: 25px;"> 
        <div class="x_panel"> 
            <div class="x_content"> 
                <!-- Tampilkan semua produk --> 
                <div class="row"> 
                    <!-- looping products --> 
                    <?php foreach ($buku as $b) { ?> 
                        <div class="col-md-2 col-md-3"> 
                            <div class="card-body"> 
                                <img src="<?php echo base_url(); ?>asset/upload/<?= $b->gambar; ?>" style="max-width:100%; max-height: 100%; height: 200px; width: 180px"> 
                                   
                                       <p><?= $b->pengarang; ?></p>
                                       
                                        </div>   
                                    </div> <?php } ?> 
                                <!-- end looping --> 
                            </div> 
                        </div> 
                    </div> 
                </div>