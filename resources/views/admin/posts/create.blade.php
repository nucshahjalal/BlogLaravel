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

<div class="col-md-12" >
<div class="card card-primary">
<div class="card-header">
  <h3 class="card-title">Create Post</h3>
  <h3 class="card-title float-right"> <a class="btn btn-success" href="{{url('manage-category')}}">  Manage Post </a></h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<form role="form" action="{{url('save-post')}}" enctype='multipart/form-data' method="POST">
  @csrf
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Post Name</label>
      <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Category Name" required="" oninvalid="this.setCustomValidity('Please Enter Category Name')" oninput="setCustomValidity('')">
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Choose Category</label>
          <select name="category" class="form-control" required="" oninvalid="this.setCustomValidity('Please Choose Category Status')" oninput="setCustomValidity('')">
            <option value="">Choose</option>
          @foreach($categories as $categorie)
            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
          @endforeach
          </select>
      </div>
     </div>

      <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputFile">Upload Image</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="post_image" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text" id="">Upload</span>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Post Description
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad" style="padding:0px;">
              <div class="mb-3">
                <textarea name="description" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Publication Status</label>
          <select name="status" class="form-control" required="" oninvalid="this.setCustomValidity('Please Choose Category Status')" oninput="setCustomValidity('')">
            <option value="">choose</option>
            <option value="1">Publish</option>
            <option value="0">Unpublish</option>
          </select>
        </div>
       </div>
     </div>
    
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Save Post</button>
  </div>
</form>
</div>
<!-- /.card -->

</div>

</div>
</section>

</div>

@endsection