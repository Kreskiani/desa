<style type="text/css">
                 .font{
                    font-size: 18px;
                    text-transform: uppercase;
                 }
                 #tengah{
                            text-align: center;
                            font-size: 13px;
                            padding: 5px;
                        }
                .pading{
                    padding-left: 20px;   
                }
                .fontbawah{
                    text-transform: uppercase;
                    font-size: 14px;
                }
                           
                 </style> 
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <div style="border-bottom: solid;">
                                                    
                                    <table width="100%" border="0">
                                    <tr>
                                    <td>
                                        <center>
                                            <p class="font"><b>ADMINISTRASI BPD</b></p>
                                            <p class="font"><b>MODEL E. 1 : BUKU Anggota BPD</b></p>
                                            <p class="font"><b>Tahun <?php echo date('Y')?></b></p>
                                        </center>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                        </td>
                                    </tr>
                                    </table>
                                </div><br>
                                <div style="height: 410px; overflow: scroll;">
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th id="tengah" rowspan="2">No</th>
                                                <th id="tengah" rowspan="2">Nama Lengkap</th>
                                                <th id="tengah" rowspan="2">L / P</th>
                                                <th id="tengah" colspan="2">Tempat dan Tanggal Lahir</th>
                                                <th id="tengah" rowspan="2">Agama</th>
                                                <th id="tengah" rowspan="2">Jabatan</th>
                                                <th id="tengah" rowspan="2">Pendidikan terakhir</th>
                                                <th id="tengah" colspan="2">Keputusan Pengangkatan</th>
                                                <th id="tengah" colspan="2">Keputusan Pemberhentian</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Tempat</th>
                                                <th id="tengah">Tanggal</th>
                                                <th id="tengah">Tanggal</th>
                                                <th id="tengah">Nomor</th>
                                                <th id="tengah">Tanggal</th>
                                                <th id="tengah">Nomor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                                <?php
                                                $a=0;
                                                    foreach ($ambildata as $row) {
                                                        $a++;
                                                        ?>
                                                        <tr>
                                                        <?php
                                                        $id = $row->id;
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$a."</td>
                                                        <td id='tengah'>".$row->nama_lengkap."</td>
                                                        <td id='tengah'>".$row->jenis_kelamin."</td>
                                                        <td id='tengah'>".$row->tempat_lahir."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->tanggal_lahir)."</td>
                                                        <td id='tengah'>".$row->agama."</td>
                                                        <td id='tengah'>".$row->jabatan."</td>
                                                        <td id='tengah'>".$row->pendidikan_terakhir."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->keputusan_pengangkatan_tanggal)."</td>
                                                        <td id='tengah'>".$row->keputusan_pengangkatan_nomor."</td>
                                                        <td id='tengah'>".TanggalIndodua($row->keputusan_pemberhentian_tanggal)."</td>
                                                        <td id='tengah'>".$row->keputusan_pemberhentian_nomor."</td>
                                                        <td id='tengah'>".$row->keterangan."</td>
                                                        ";
                                                        ?>
                                                    </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                                </tbody>
                                                <tfoot>
                                                    
                                                </tfoot>
                                        </table>
                                        </div>
                                            <?php
                                        foreach ($ambilperangkatdesa as $rowperangkat) {
                                            foreach ($ambilpenandatangan as $rowpenanda) {
                                             
                                    ?>
                                         <table width="100%">
                                            <tr>
                                                <td width="50%" style="text-align: right;">
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                                <?php echo $rowperangkat->nama_kabupaten ?>, 
                                                                <?php
                                                                   echo TanggalIndo(date("d-m-Y"));
                                                                ?>
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p class="fontbawah" style="text-transform: capitalize;">Kepala Desa <?php echo $rowperangkat->nama_desa;?></p></td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="text-transform: uppercase;padding-top: 50px">
                                                            <?php
                                                               echo $rowperangkat->nama_kepala_desa."<br>NIP. ".$rowpenanda->nip_kades;
                                                            ?>
                                                                
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        </div> <!-- #bawah -->
                                        <?php
                                    }
                                }
                                ?>  
                                    </div>

                            </div>
                            </div>
                            </div>
                            </div>
<?php
    function TanggalIndo($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, -4);
        $bulan = substr($date, 3, 2);
        $tgl   = substr($date, 0, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }

    function TanggalIndodua($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 3);
        $tgl   = substr($date, 8, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }
?>