@extends('admin.admin_master')
@section('main_content')

			<div class="content-wrapper">
            <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Catagory Table</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Catagory Form</li>
            </ol>
          </div>
          
        </div>
        <div class="row">
          <div class="col-8" style="margin:auto;">
         
            <?php 
             $message = Session::get('success');
             if(!empty($message)){ ?>
            <h6 class="text-center alert alert-success" style="width:300px;"><?php 
            echo $message = Session::get('success');
            Session::put('success',''); ?></h6>
          <?php } ?>
        </div>
      
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <div class="col-8" style="margin:auto;">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Ctegory Datas</h3>
              <h3 class="card-title float-right"> <a class="btn btn-primary" href="{{url('add-category')}}">  Create Category </a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Category Name</th>
                  <th>Publication Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($datas as $data){?>
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$data->name}}
                  </td>
                  <td><?php if($data->status=='1'){ ?>
                    Active
                    <?php } else{ ?>
                    Inactive
                    <?php } ?>
                  </td>
                  <td><a href="edit-category/<?php echo $data->id; ?>" class="btn btn-primary">Edit</a> <a onclick="return confirm('Are you sure delete')" href="catagory/delete/{{$data->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php } ?>  
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

          </div>

      </div>
          @endsection