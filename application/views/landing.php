<!DOCTYPE html>
<html>
<head>
    <title>Student Day - Fakultas Teknik</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="headback">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/img/TEKNIK.png" alt="logo"/></a>
                </div>
                <div class="col-md-8 col-sm-6 hidden-xs allcenter">
                    <h1 class="logo-text">Student Day Fakultas Teknik</h1>
                    <h2 class="logo-textsub">2016</h2>
                    <hr class="style-two"/>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/img/TEKNIK.png" alt="logo"/></a>
                </div>
                <div class="col-xs-12 visible-xs allcenter">
                    <h1 class="logo-text">Student Day<br/>Fakultas Teknik</h1>
                    <h2 class="logo-textsub">2016</h2>
                    <hr class="style-two"/>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 hidden-xs">
            </div>
            <div class="col-lg-6">
                <?php echo form_open('nametag', 'class="form-horizontal" enctype="multipart/form-data"'); ?>
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            <?php echo validation_errors(); ?><br>
                            <h3>Form Data Diri</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">NIM</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Masukan NIM disini !" name="nim" required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Nama Lengkap</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Masukan nama lengkap disini !" name="fullname" required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Nama Panggilan</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Masukan nama panggilan disini !" name="callname" required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Tempat / Tanggal Lahir</label>
                                <div class="col-md-4">
                                    <input class="form-control" placeholder="Tempat Lahir" name="born_place" required="required" type="text">
                                </div>
                                <div class="col-md-5">
                                    <input class="form-control" placeholder="Tanggal Lahir" name="birth_day" required="required" type="date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Alamat</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Masukan alamat anda disini !" name="address"  required="required" type="text">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-md-3">E-mail</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Masukan e-mail anda disini !" name="email"  required="required" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Jurusan</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="department">
                                        <option>Pilih Jurusan Anda !</option>
                                        <option value="TI">Teknologi Informasi</option>
                                        <option value="TA">Teknik Arsitektur</option>
                                        <option value="TM">Teknik Mesin</option>
                                        <option value="TS">Teknik Sipil</option>
                                        <option value="TE">Teknik Elektro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Hobi</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Masukan hobi anda disini !" name="hobbies"  required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Motto</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Masukan motto hidup anda disini !" name="motto"  required="required" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Foto</label>
                                <div class="col-md-9">
                                    <input name="photo" type="file" class="form-control" accept="image/*">
                                    <small>*<i>File <b>tidak boleh</b> lebih dari 250kb, foto yang digunakan <b>3x4</b></i></small>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <input class="btn btn-block btn-success" type="submit" value="Buat Nametag"/>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3 hidden-xs">
            </div>
        </div>
    </div>
    <div class="footback" align="center">
        <h5 class="allcenter"><i>Dibuat dan diberdayakan oleh</i><h5>
        <h5><i><b>Study Group Technology Artisan</b></i><h5>
        <h6><i>2016</i><h6>
    </div>
</body>
</html>
