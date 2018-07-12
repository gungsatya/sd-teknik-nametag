<!DOCTYPE html>
<html>
    <head>
        <title>Print Nametag</title>
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body onload="window.print();">
        <div class="container">
            
            <img class="print-background img-responsive" src="<?php echo base_url();?>assets/img/TEKNIK.png" alt="background" />
            <div class="print-area">
                <div class="head">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-2">
                                <a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/img/TEKNIK.png" alt="logo"/></a>
                            </div>
                            <div class="col-xs-8 allcenter">
                                <h1 class="logo-textprint">Student Day 2016</h1>
                                <h2 class="logo-textsubprint1">Fakultas Teknik</h2>
                                <h2 class="logo-textsubprint2">Universitas Udayana</h2>
                            </div>
                            <div class="col-xs-2">
                                <a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/img/TEKNIK.png" alt="logo"/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-1">
                        </div>
                        <div class="col-xs-10">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading" align="center"><h3 class="bio-head">BIODATA MAHASISWA BARU</h3></div>
                                    <div class="panel-body">
                                        <div class="row bio-row">
                                            <div class="col-xs-5">
                                                <div class="row">
                                                    <div class="col-xs-10">NIM</div>
                                                    <div class="col-xs-2">:</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6"><?php echo $nim;?></div>
                                        </div>
                                        <div class="row bio-row">
                                            <div class="col-xs-5">
                                                <div class="row">
                                                    <div class="col-xs-10">NAMA LENGKAP</div>
                                                    <div class="col-xs-2">:</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6"><?php echo $fullname;?></div>
                                        </div>
                                        <div class="row bio-row">
                                            <div class="col-xs-5">
                                                <div class="row">
                                                    <div class="col-xs-10">NAMA PANGGILAN</div>
                                                    <div class="col-xs-2">:</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6"><?php echo $callname;?></div>
                                        </div>
                                        <div class="row bio-row">
                                            <div class="col-xs-5">
                                                <div class="row">
                                                    <div class="col-xs-10">TEMPAT/TANGGAL LAHIR</div>
                                                    <div class="col-xs-2">:</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <?php echo $born_place;?>,  
                                                <?php 
                                                $month = array('', 'JANUARI', 'FEBRUARI', 'MARET', 'APRIL', 'MEI', 'JUNI', 'JULI', 'AGUSTUS', 'SEPTEMBER', 'OKTOBER', 'NOVEMBER', 'DESEMBER' );

                                                echo date('d', strtotime($birth_day)).' '.$month[date('n', strtotime($birth_day))].' '.date('Y', strtotime($birth_day));
                                                ?> 
                                            </div>
                                        </div>
                                        <div class="row bio-row">
                                            <div class="col-xs-5">
                                                <div class="row">
                                                    <div class="col-xs-10">ALAMAT</div>
                                                    <div class="col-xs-2">:</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6"><?php echo $address;?></div>
                                        </div>
                                        <div class="row bio-row">
                                            <div class="col-xs-5">
                                                <div class="row">
                                                    <div class="col-xs-10">JURUSAN</div>
                                                    <div class="col-xs-2">:</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <?php 
                                                    if($department=='TI'){
                                                        echo 'teknologi informasi';
                                                    }
                                                    else if ($department=='TA') {
                                                        echo 'teknik arsitektur';
                                                    }
                                                    else if ($department=='TE') {
                                                        echo 'teknik elektro';
                                                    }
                                                    else if ($department=='TM') {
                                                        echo 'teknik mesin';
                                                    }
                                                    else if ($department=='TS') {
                                                        echo 'teknik sipil';
                                                    }
                                                ?> 
                                            </div>
                                        </div>
                                        <div class="row bio-row">
                                            <div class="col-xs-5">
                                                <div class="row">
                                                    <div class="col-xs-10">HOBI</div>
                                                    <div class="col-xs-2">:</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6"><?php echo $hobbies;?></div>
                                        </div>
                                        <div class="row bio-row">
                                            <div class="col-xs-5">
                                                <div class="row">
                                                    <div class="col-xs-10">MOTTO</div>
                                                    <div class="col-xs-2">:</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6"><?php echo $motto;?></div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <img class="bio-photo" src="<?php echo base_url();?>assets/img/users/<?php echo $photo;?>" alt="studphoto"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
