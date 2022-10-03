<?php


include 'header.php';


include '../netting/baglan.php';


$iceriksor=$db->prepare("SELECT * from icerik WHERE icerik_id=:icerik_id");
$iceriksor->execute(array(
  'icerik_id' => $_GET['icerik_id']
));

$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);


?>

<head>

  <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

</head>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ayarlar</h3>
      </div>
<!--
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar Kelimeniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara!</button>
                    </span>
                  </div>
                </div>
              </div>
            -->


          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title"> 

                   <div align="left" class="col-md-6">

                    <h2>İçerik İşlemleri <small>

                     <?php 
                     if (isset($_GET['durum']) && $_GET['durum']=='ok') { ?>

                      <b style="color:green;">İşlem Başarılı</b>

                    <?php } elseif (isset($_GET['durum']) && $_GET['durum']=='no') {?>

                      <b style="color:red;">İşlem Başarısız..</b>


                      <?php } ?></small></h2><br>
                    </div>
                    <div align="right" class="col-md-6">

                     <a href="icerik-ekle.php"><button class="btn btn-warning btn-xs"><i class="fa fa-undo" aria-hidden"true"></i>Geri Dön</button></a>

                   </div>
                   <div class="clearfix"></div>
                 </div>

                 <div class="x_content">

                  <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <input type="hidden" name="icerik_id" value="<?php echo $icerikcek['icerik_id']; ?>">
                    <input type="hidden" name="icerik_resimyol" value="<?php echo $icerikcek['icerik_resimyol']; ?>">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <img width="200" height="100" src="../../<?php echo $icerikcek['icerik_resimyol']; ?>">
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="resim_upload">Resim Seç 
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="resim_upload" name="icerik_resimyol" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">icerik Ad 
                        <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="icerik_ad" value="<?php echo $icerikcek['icerik_ad']; ?>"  class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>



<!--
     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Link <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="slider_link"  value="<?php /* echo $icerikcek['icerik_link']; */ ?>"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                    -->

                    <!--  BAŞLANGIÇ KISMI  0000000000000000000000000000000000000000000000000000000 -->

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> İçerik <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">


                        <textarea class="ckeditor" id="edito1" name="icerik_detay">
                          <?=$icerikcek['icerik_detay']?>
                        </textarea>


                      </div>
                    </div>

                    <script type="text/javascript">

                      CKEDITOR.replace('editor1',
                      {
                        filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html_type=Images',
                        filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl : 'ckfinder/ckfinder.html?type=Flash',
                        filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl :'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                        forcePasteAsPlainText: true


                      }


                      );


                    </script>









                    <!--  BİTİŞ KISMI  0000000000000000000000000000000000000000000000000000000 -->









                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İcerik zaman  <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="icerik_zaman"  value="<?php echo $icerikcek['icerik_zaman']; ?>"  class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>






                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Durum <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <select id="heard" class="form-control" name="icerik_durum" required>

                        <?php 

                        if ($icerikcek['icerik_durum']==1) {?>

                         <option value="1">Aktif..</option>
                         <option value="0">Pasif</option>

                       <?php } else {?>
                         <option value="0">Pasif</option>
                         <option value="1">Aktif..</option>





                       <?php    }  ?>



                     </select>
                   </div>
                 </div>






                 <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="icerikduzenle" class="btn btn-success">Kaydet</button>
                </div>

              </form>


            </div>
          </div>
        </div>  

      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>