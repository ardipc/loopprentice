<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Loopprentice</title>
    <link rel="shortcut icon" href="libs/home_register/img/LogoLoop.png" type="libs/home_register/image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="libs/dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="libs/dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="libs/dashboard/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="libs/dashboard/css/sb-admin.css" rel="stylesheet">

    <!-- tinymce -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=j18ccoizrbdzpcunfqk7dugx72d7u9kfwls7xlpxg7m21mb5"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    
    <a class="navbar-brand" href="?page=home_prentice&action=index">Loopprentice</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="?page=privatearea_prentice&action=index">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Excel">
        <a class="nav-link" data-toggle="modal" data-target="#salesModal">
<!--          <a class="nav-link" href="?page=privatearea_prentice&action=addsales">-->
            <i class="fa fa-fw fa-upload"></i>
            <span class="nav-link-text">Upload Excel</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Posting">
          <a class="nav-link" href="?page=privatearea_posting&action=index">
            <i class="fa fa-fw fa-pencil-square"></i>
            <span class="nav-link-text">Posting</span>
          </a>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Loopprentice</a>
        </li>
        <li class="breadcrumb-item active">Posting </li>
      </ol>

      
   

      <!-- jumbotron -->
       <div class="row justify-content-center ">
       
        <div class="col-lg-12" >
          <!-- style="background-color: #E9ECEF; border-radius: 10px;  -->
          <form method="post" action="?page=privatearea_posting&action=editpost" enctype="multipart/form-data">
          	<input type="hidden" name="idblog" value="<?php echo $data[0]->id_posting;?>">
              <div class="form-group">
                <label for="judul">Judul Posting</label>
                <input value="<?php echo $data[0]->post_title;?>" required type="text" class="form-control" name="judul" placeholder="enter judul post...">
              </div>

              <div class="form-group">
                <label for="judul">Tag</label>
                <input value="<?php echo $data[0]->post_tag;?>" required type="text" class="form-control" name="tag" placeholder="tag1, tag2, tag3, ...">
              </div>

              <div class="form-group">
                <label for="judul">Cover Post</label>
                <input type="file" class="form-control" name="cover" >
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori</label>
                <?php $kategori = array('Artikel'=>'Artikel','Blog'=>'Blog','Vlog'=>'Vlog','Photo'=>'Photo','Lainnya'=>'Lainnya'); ?>
                <select required name="kategori" class="form-control">
                	<?php foreach ($kategori as $key => $value) { ?>
                		<option <?php echo ($key == $data[0]->post_kategori) ? "selected":"";?> value="<?php echo $key;?>"><?php echo $value;?></option>	
                	<?php } ?>
                </select>
              </div>

              <div class="form-group">
                <textarea name="konten" class="form-control" class="konten" id="konten" placeholder="..."><?php echo $data[0]->post_content;?></textarea>
              </div>

              <!-- summernote -->
              <!-- <div id="summernote"></div> -->
              
              <input class="btn btn-success btn-md " name="upload_posting" type="submit" value="Upload Post" /><br><br>

          </form>
        </div>
      </div>

     
      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>copyright 2017 by Youth and Comunity Jawa Bali Nusra</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Yakin Ingin Keluar?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="?page=logout_prentice&action=destroy">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- sales Modal-->
    <div class="modal fade" id="salesModal" tabindex="-1" role="dialog" aria-labelledby="salesModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <form id="bv-sales" method="post" action="?page=privatearea_sales_prentice&action=add" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Excel</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label class="text-info" style="margin-bottom: 0;margin-top: 5px">Ketentuan:</label>
                    <ol class="text-info">
                        <li>MSISDN harus nomor telkomsel dengan format:
                            <ul>
                                <li>62811xxx (kartu halo)</li>
                                <li>62812xxx, 62821xxx, 62822xxx (simpati)</li>
                                <li>62823xxx (loop)</li>
                                <li>62851xxx, 62852xxx, 62853xxx (kartu as)</li>
                            </ul>
                        </li>
                        <li>File upload harus ber ekstensi .xls atau .xlsx</li>
                        <li>Jika masih menemukan kendala upload, silahkan hubungi PIC Telkomsel magang kamu.</li>
                    </ol>
                    <label for="username" style="margin-bottom: 0;margin-top: 5px">Team name:</label>
                    <input readonly type="text" class="form-control" id="teamname" name="teamname" value=<?php echo $teamname ?>>

                    <label for="username" style="margin-bottom: 0;margin-top: 5px">User name:</label>
                    <input readonly type="text" class="form-control" id="username" name="username" value=<?php echo $username ?>>

                    <label for="sales" style="margin-bottom: 0;margin-top: 5px">Upload file Excel:</label>
                    <input type="file" accept=".xls,.xlsx" class="form-control f1" id="sales" name="sales" onchange="checkName(this, 'fname', 'sales-submit')">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit" id="sales-submit" name="sales-submit" disabled="disabled">Upload</button>
                    <?php
                    $message_sales = '{}';

                    if(isset($_SESSION['message_sales'])) {
                        $message_sales = $_SESSION['message_sales'];
                        unset($_SESSION['message_sales']);
                    }

                    $message = json_decode($message_sales);
                    if($message_sales != '{}') {
                        echo $message->message;
                    }
                    ?>
                </div>
            </div>
            </form>
        </div>
    </div>
  </div>

	<script type="text/javascript">
	  tinymce.init({ 
	    selector:'#konten',
	    height: 500,
	    plugins: [
	      'advlist autolink lists link image charmap print preview anchor',
	      'searchreplace visualblocks advcode fullscreen',
	      'insertdatetime media table contextmenu powerpaste tinymcespellchecker a11ychecker linkchecker mediaembed',
	      'wordcount'
	    ],
	    toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | advcode spellchecker  a11ycheck code',
	  });
	</script>
  <!-- Bootstrap core JavaScript-->
  <script src="libs/dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="libs/dashboard/vendor/popper/popper.min.js"></script>
  <script src="libs/dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="libs/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Page level plugin JavaScript-->
  <script src="libs/dashboard/vendor/chart.js/Chart.min.js"></script>
  <script src="libs/dashboard/vendor/datatables/jquery.dataTables.js"></script>
  <script src="libs/dashboard/vendor/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="libs/dashboard/js/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
  <script src="libs/dashboard/js/sb-admin-datatables.min.js"></script>
  <script src="libs/dashboard/js/sb-admin-charts.min.js"></script>

<!--  validasi-->
  <script src="libs/js/bloodhound.js"></script>
  <script src="libs/js/typeahead.bundle.min.js"></script>
  <script src="libs/js/typeahead.jquery.js"></script>
  <script src="libs/js/slick.js"></script>
  <script src="libs/vendor/popper/popper.min.js"></script>
  <script src="libs/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="libs/vendor/bootstrap/js/bootstrap-validator/bootstrapValidator.min.js"></script>
  <script src="libs/vendor/bootstrap/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="libs/vendor/bootstrap/js/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
  <script src="libs/vendor/bootstrap/js/bootbox/bootbox.min.js"></script>
  <script type="text/javascript">
      var ar_ext = ['xls', 'xlsx'];        // array with allowed extensions

      function checkName(el, to, sbm) {
          // get the file name and split it to separe the extension
          var name = el.value;
          var ar_name = name.split('.');

          // for IE - separe dir paths (\) from name
          var ar_nm = ar_name[0].split('\\');
          for(var i=0; i<ar_nm.length; i++) var nm = ar_nm[i];

          // add the name in 'to'
//          document.getElementById(to).value = nm;

          // check the file extension
          var re = 0;
          for(var i=0; i<ar_ext.length; i++) {
              if(ar_ext[i] == ar_name[1]) {
                  re = 1;
                  break;
              }
          }

          // if re is 1, the extension is in the allowed list
          if(re==1) {
              // enable submit
              document.getElementById(sbm).disabled = false;
          }
          else {
              // delete the file name, disable Submit, Alert message
              el.value = '';
              document.getElementById(sbm).disabled = true;
              alert('Upload file Excel');
          }
      }
    </script>
    </body>
</html>

