@extends('layouts.master')
@section('content')
<!-- /.row -->
<section class="content">
		<p class="pull-right">
			<a href="{{route('user.create')}}" class="btn btn-sm btn-success">Add Company</a>
	  	</p>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Companies</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
           
              <table class="table table-hover table-bordered">
                <tr>
                  <th>Sr.No.</th>
                  <th>Name</th>
                  <th>User Name</th>
                  <th>Email</th>
                 
                  
                  <th>Action</th>
                </tr>
               @foreach($user as $us)
               
                <tr>
                  <td>{{$us->id}}</td>
                  <td>{{$us->name}}</td>
                  <td>{{$us->username}}</td>
                  <td>{{$us->email}}</td>
                  
                  <td>
                  	<label class="switch">
          					  <input type="checkbox" class="update-status"  data-id="" data-url="" >
          					  <span class="slider round"></span>
          					</label>
                  </td>
                    
                  <td> 
                    <form action="{{route('user.destroy',$us->id)}}" method="post" role="form">
                      @csrf

                  			<a href="{{route('user.show',$us->id)}}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></a>

                            <a href="{{route('user.edit',$us->id)}}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span></button></a>
                              <input type="hidden" name="_method" value="DELETE"> 
                            <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="glyphicon glyphicon-trash"></span></button>
                  </td></form>
                </tr>
                @endforeach
               
              </table>
             
	            <div><h2></h2></div>
	          
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </section>
      @endsection