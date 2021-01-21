<?php
  include "includes/header.php";
?>



<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">INSERT BOOKS CATEGORY</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form>
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Category Name</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Category Name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Category Description</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Category Description">
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Category Image</label>
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
        <button type="submit" class="btn btn-primary">INSERT</button>
      </div>
  </form>
</div>


<?php
  include "includes/footer.php";
?>
