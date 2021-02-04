<?php
require "dashboard/header.php"
?>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row mb-3">
            
            <div class="col-md-10 m-auto  grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title text-center">Student Registration Form</h3>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Registration Successfull !</strong> Please wait for admin verification.After complitiong veriffication you will notify through email.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Full Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName2">Student ID</label>
                      <input type="text" class="form-control" id="exampleInputName12" placeholder="ID">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">DIU Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label>Upload Profile Picture</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <div class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>                          
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Choose a Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Re-type Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 float-right">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
            
          </div>
					<!-- partial:../../partials/_footer.html -->
					<footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 . All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
					<!-- partial -->
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/icheck/icheck.min.js"></script>
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/iCheck.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Nov 2019 06:12:10 GMT -->
</html>
