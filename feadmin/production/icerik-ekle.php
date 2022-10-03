<?php


 include 'header.php';


 include '../netting/baglan.php';


$ayarsor=$db->prepare("select * from ayar where ayar_id=?");

$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


 ?>

 <head>
  
  <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

</head>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>İçeril İşlemleri</h3>
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
                    <h2>İçerik İşlemleri  <small>

   <?php 
                    if (isset($_GET['durum']) && $_GET['durum']=='ok') { ?>

                    <b style="color:green;">Güncelleme Başarılı</b>

                    <?php } elseif (isset($_GET['durum']) && $_GET['durum']=='no') {?>

                    <b style="color:red;">Güncelleme Yapılamadı...</b>


                  <?php } ?></small> </h2>


                    <ul class="nav navbar-right panel_toolbox">
                     
                    
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="file" id="first-name" required="required" name="icerik_resimyol" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Zaman <span class="required">*</span>
                        </label>
                        
 

                          <div class="col-md-4">
                            <input type="date" id="first-name" required="required" value="<?php echo date('Y-m-d') ?>" name="icerik_tarih" class="form-control col-md-7 col-xs-12">



                          </div>


                          <div class="col-md-4">
                            <input type="time" id="first-name" <?php echo date("H:i:s"); ?> required="required" name="icerik_saat" class="form-control col-md-7 col-xs-12">


                            
                          </div>



                          

                        
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Ad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="icerik_ad" placeholder="İçerik Adınız Giriniz"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                          <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> İçerik <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">


    <textarea class="ckeditor" id="edito1" name="icerik_detay"></textarea>
                      

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

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Keyword <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="icerik_keyword" placeholder="Anahtar kelime giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                  
<!--
            
                           <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Durum <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="İçerik_durum" placeholder"İçerik Adınız Giriniz"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                    -->
                  

                          <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Durum <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <select id="heard" class="form-control" name="icerik_durum" required>
                            <option value="1">Aktif..</option>
                            <option value="0">Pasif</option>
                           
                          </select>
                        </div>
                      </div>
                   


  
                        

                        <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                          <button type="submit" name="icerikkaydet" class="btn btn-success">Kaydet</button>
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