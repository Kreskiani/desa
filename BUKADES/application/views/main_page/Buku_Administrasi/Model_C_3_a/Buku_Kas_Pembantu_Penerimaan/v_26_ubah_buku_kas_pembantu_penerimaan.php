
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Ubah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            <?php
                                foreach ($ambildata as $row) {
                                 
                            ?>
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_C_3_a/Buku_Kas_Pembantu_Penerimaan/c_26_buku_kas_pembantu_penerimaan/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor BKU Penerimaan</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorbkupenerimaan" maxlength="255"  autofocus value="<?php echo $row->nomor_bku_penerimaan?>" placeholder="Diisi dengan nomor bku penerimaan    ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Setor</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalsetor" maxlength="255"  autofocus value="<?php echo $row->tanggal_setor?>" placeholder="Diisi Tanggal Penerimaan STS / Bukti Penerimaan lainnya..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor STS / Bukti Penerimaan Lainnya</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorsts" maxlength="255"  value="<?php echo $row->nomor_sts?>" autofocus placeholder="Diisi nomor sts atau bukti penerimaan lainnya..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah (Rp)</label>
                                    <div class="controls">
                                        : <input type="text" name="jumlah" maxlength="255"  autofocus value="<?php echo $row->jumlah?>" placeholder="Diisi Saldo buku kas bendahara..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_a/Buku_Kas_Pembantu_Penerimaan/c_26_buku_kas_pembantu_penerimaan/" class="tombolhapus" style="float: left;">Kembali</a>
                                    <div class="controls">
                                    <input type="submit" value="Ubah Data" name="ubahdata" class="tombolsimpanubah" onclick="return konfirmasiubahdata()"></input>
                                    </div>
                                </div>
                            </form>
                            <?php
                        }
                            ?>
                            </div>
                            </div>
                            
                        </div>
                </div>
<script type="text/javascript">
    function konfirmasisimpan () {
         return confirm('Apakah Anda Akan Menyimpan Data ?');
    }
    function konfirmasiubahdata () {
         return confirm('Apakah Anda Akan Mengubah Data ?');
    }
</script>