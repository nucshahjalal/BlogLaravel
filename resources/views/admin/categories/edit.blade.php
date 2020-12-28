@extends('admin.admin_master')
@section('main_content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" >
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-6" style="margin:auto;">
<div class="card card-primary">
<div class="card-header">
  <h3 class="card-title">Create Category</h3>
  <h3 class="card-title float-right"> <a class="btn btn-success" href="{{url('manage-category')}}">  Manage Category </a></h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<form role="form" action="{{url('update-category')}}" method="POST">
  @csrf
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Category Name</label>
      <input type="hidden" name="category_id" value="<?php echo $category->id; ?>">
      <input type="text" class="form-control" name="category" id="exampleInputEmail1" value="<?php echo $category->name; ?>" placeholder="Enter Category Name" required="" oninvalid="this.setCustomValidity('Please Enter Category Name')" oninput="setCustomValidity('')">
    </div>
    
    <div class="form-group">
        <label>Publication Status</label>
        <select name="status" class="form-control" required="" oninvalid="this.setCustomValidity('Please Choose Category Status')" oninput="setCustomValidity('')">
          <?php $status = $category->status; if($status==1){ ?>
           <option value="1">Active</option>
           <option value="">choose</option>
           <option value="0">In Active</option> 
          <?php }else{?>
           <option value="0">In Active</option>
           <option value="">choose</option>
           <option value="1">Active</option>
          <?php } ?>
        </select>
      </div>

    
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Update Category</button>
  </div>
</form>
</div>
<!-- /.card -->

</div>

</div>
</section>

</div>

@endsection