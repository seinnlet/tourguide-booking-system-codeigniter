<?php  
  foreach ($edittourtype as $e_tourtype)
  {
    $edittourtypeid = $e_tourtype->tourtypeid;
    $edittourtypename = $e_tourtype->name;
  } 
?>

<!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-suitcase"></i> Tour Type</h1>
    <p class="mb-4 mt-3">
      <a href="<?php echo base_url(); ?>index.php/Tourtype" class="btn btn-info"><i class="fas fa-angle-left"></i> Back</a>
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Edit Tour Type</h6>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url(); ?>index.php/Tourtype/update" >

          <input type="hidden" name="editid" value="<?= $edittourtypeid ?>">

          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Tour Type Name: </label>
            <div class="col-sm-10">
              <input type="text" name="editname" class="form-control" id="editname" placeholder="Enter Tour Type Name" required autofocus value="<?= $edittourtypename?>" >
            </div>
          </div>

           <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="submit" name="btnsave" value="Update" class="btn btn-info">
            </div>
          </div>

        </form>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
