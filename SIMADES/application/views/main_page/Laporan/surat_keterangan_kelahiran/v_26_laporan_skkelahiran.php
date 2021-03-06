<style type="text/css">
     .jaraktabel{
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
     }
</style>         
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Laporan Surat Keterangan Kelahiran</h3>
            </div>
            <div class="module-body">
                <div class="module-body table">
                    <table cellpadding="0" id="example" 
                        width="100%">
                        <thead>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">RT</th>
                                <th class="jaraktabel">RW</th>
                                <th class="jaraktabel">Nama Ibu Kandung</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Pekerjaan</th>
                                <th class="jaraktabel">Alamat</th>
                                <th class="jaraktabel">Nama Anak</th>
                                <th class="jaraktabel">Jenis Kelamin Anak</th>
                                <th class="jaraktabel">Lahir</th>
                                <th class="jaraktabel">Panjang</th>
                                <th class="jaraktabel">Berat</th>
                                <th class="jaraktabel">Anak Ke</th>
                                <th class="jaraktabel">Tanggal Surat</th>
                                <th class="jaraktabel">Penanda Tangan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">RT</th>
                                <th class="jaraktabel">RW</th>
                                <th class="jaraktabel">Nama Ibu Kandung</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Pekerjaan</th>
                                <th class="jaraktabel">Alamat</th>
                                <th class="jaraktabel">Nama Anak</th>
                                <th class="jaraktabel">Jenis Kelamin Anak</th>
                                <th class="jaraktabel">Lahir</th>
                                <th class="jaraktabel">Panjang</th>
                                <th class="jaraktabel">Berat</th>
                                <th class="jaraktabel">Anak Ke</th>
                                <th class="jaraktabel">Tanggal Surat</th>
                                <th class="jaraktabel">Penanda Tangan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                                <?php
                                    $a=0;
                                     foreach ($ambildatasurat as $rowsurat) {
                                        $id=$rowsurat->id;
                                        $a++;
                                ?>

                                    <tr onClick="ambildata('<?php echo $a;?>')">
                                        <?php
                                            echo 
                                                "
                                                <td id='nomor".$a."' class='jaraktabel'>".$a."</td>
                                                <td class='jaraktabel'>".$rowsurat->nomor_surat."</td>
                                                <td class='jaraktabel'>".$rowsurat->rt."</td>
                                                <td class='jaraktabel'>".$rowsurat->rw."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama_ibu_kandung."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama."</td>
                                                <td class='jaraktabel'>".$rowsurat->pekerjaan."</td>
                                                <td class='jaraktabel'>".$rowsurat->alamat."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama_anak."</td>
                                                <td class='jaraktabel'>".$rowsurat->jenis_kelamin."</td>
                                                <td class='jaraktabel'>".$rowsurat->lahir."</td>
                                                <td class='jaraktabel'>".$rowsurat->panjang."</td>
                                                <td class='jaraktabel'>".$rowsurat->berat."</td>
                                                <td class='jaraktabel'>".$rowsurat->anak_ke."</td>
                                                <td class='jaraktabel'>".$rowsurat->tanggal."</td>
                                                <td class='jaraktabel'>".$rowsurat->penanda_tangan."</td>
                                                ";
                                        ?>
                                    </tr>      
                                <?php
                                }
                                ?>    
                        </tbody>
                    </table>
                </div>      
            </div>
        </div>    
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
    $('#example').DataTable();
    } );

</script>