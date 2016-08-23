
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
                                <h3>Laporan Surat Keterangan Asal Usul</h3>
                            </div>
                            <div class="module-body">
                            
                                <div class="module-body table" style="overflow: scroll;height: 440px">
                                    <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>

                                            <tr>
                                                <th class="jaraktabel">No</th>
                                                <th class="jaraktabel">Nomor Surat</th>
                                                <th class="jaraktabel">RT</th>
                                                <th class="jaraktabel">RW</th>
                                                <th class="jaraktabel">Nama</th>
                                                <th class="jaraktabel">Tempat/Tgl Lahir</th>
                                                <th class="jaraktabel">Kewarganegaraan</th>
                                                <th class="jaraktabel">Agama</th>
                                                <th class="jaraktabel">Pekerjaan</th>
                                                <th class="jaraktabel">Alamat</th>
                                                <th class="jaraktabel">Nama Ayah</th>
                                                <th class="jaraktabel">Tempat/Tgl Lahir Ayah</th>
                                                <th class="jaraktabel">Kewarganegaraan Ayah</th>
                                                <th class="jaraktabel">Agama Ayah</th>
                                                <th class="jaraktabel">Pekerjaan Ayah</th>
                                                <th class="jaraktabel">Alamat Ayah</th>
                                                <th class="jaraktabel">Nama Ibu</th>
                                                <th class="jaraktabel">Tempat/Tgl Lahir Ibu</th>
                                                <th class="jaraktabel">Kewarganegaraan Ibu</th>
                                                <th class="jaraktabel">Agama Ibu</th>
                                                <th class="jaraktabel">Pekerjaan Ibu</th>
                                                <th class="jaraktabel">Alamat Ibu</th>
                                                <th class="jaraktabel">Tanggal Surat</th>
                                                <th class="jaraktabel">Penanda Tangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            
                                                <?php
                                                if(isset($ambildatasuratberdasarkan)){
                                                $a=0;
                                                     foreach ($ambildatasuratberdasarkan as $rowsurat) {
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
                                                            <td class='jaraktabel'>".$rowsurat->nama."</td>
                                                            <td class='jaraktabel'>".$rowsurat->tempat_tanggal_lahir."</td>
                                                            <td class='jaraktabel'>".$rowsurat->kewarganegaraan."</td>
                                                            <td class='jaraktabel'>".$rowsurat->agama."</td>
                                                            <td class='jaraktabel'>".$rowsurat->pekerjaan."</td>
                                                            <td class='jaraktabel'>".$rowsurat->alamat."</td>
                                                            <td class='jaraktabel'>".$rowsurat->nama_pria."</td>
                                                            <td class='jaraktabel'>".$rowsurat->tempat_tanggal_lahir_pria."</td>
                                                            <td class='jaraktabel'>".$rowsurat->kewarganegaraan_pria."</td>
                                                            <td class='jaraktabel'>".$rowsurat->agama_pria."</td>
                                                            <td class='jaraktabel'>".$rowsurat->pekerjaan_pria."</td>
                                                            <td class='jaraktabel'>".$rowsurat->alamat_pria."</td>
                                                            <td class='jaraktabel'>".$rowsurat->nama_wanita."</td>
                                                            <td class='jaraktabel'>".$rowsurat->tempat_tanggal_lahir_wanita."</td>
                                                            <td class='jaraktabel'>".$rowsurat->kewarganegaraan_wanita."</td>
                                                            <td class='jaraktabel'>".$rowsurat->agama_wanita."</td>
                                                            <td class='jaraktabel'>".$rowsurat->pekerjaan_wanita."</td>
                                                            <td class='jaraktabel'>".$rowsurat->alamat_wanita."</td>
                                                            <td class='jaraktabel'>".$rowsurat->tanggal."</td>
                                                            <td class='jaraktabel'>".$rowsurat->penanda_tangan."</td>";
                                                            ?>
                                                            </tr>    
                                                            <?php
                                                            }
                                                    
                                                    }   
                                                    ?>
                                                
                                                </tbody>
                                        </table>
                                        </div>
                                  
                            </div>
                            </div>
                            
                        </div>
                </div>
