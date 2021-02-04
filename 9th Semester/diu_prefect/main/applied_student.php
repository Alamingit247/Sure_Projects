<?php
require "dashboard/header.php"
?>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Student ID</th>
                            <th>E-mail</th>
                            <th>Batch</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>ALamin Hossain</td>
                            <td>171-15-8795</td>
                            <td>alamin15-8795@diu.edu.bd</td>
                            <td>46</td>
                            <td>CSE321</td>
                            <td>
                              <label class="badge badge-warning">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">Select</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Nasrin Akter</td>
                            <td>171-15-8818</td>
                            <td>nasrin15-8818@diu.edu.bd</td>
                            <td>46</td>
                            <td>CSE321</td>
                            <td>
                              <label class="badge badge-warning">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">Select</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Masudur Rahman</td>
                            <td>171-15-8851</td>
                            <td>masudur15-8795@diu.edu.bd</td>
                            <td>46</td>
                            <td>CSE321</td>
                            <td>
                              <label class="badge badge-warning">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">Select</button>
                            </td>
                        </tr>
                      </tbody>
                    </table>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
					<!-- partial:../../partials/_footer.html -->
					<footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2017 . All rights reserved.</span>
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
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
