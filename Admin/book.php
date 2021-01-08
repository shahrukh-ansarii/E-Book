<?php
  include "includes/header.php";
?>



<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">INSERT BOOK</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Book Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Book ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Book Title</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Book Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Drop Down</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Book Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Book Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Book Author</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Book Author">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Book Price</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Book Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Book Edition</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Book Edition">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Book Pdf</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


<?php
  include "includes/footer.php";
?>
