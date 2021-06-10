@extends('admin.admin-master')
@section('admin')
<script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
<div class="container-full">

    <!-- Main content -->
    <section class="content">

        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             <h4 class="box-title">Admin Change Password</h4>
            </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
                   <form method="POST" action="{{ route('update.change.password' )}}">
                    @csrf
                     <div class="row">
                       <div class="col-12">
                           
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Password <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="oldpassword" id="current_password" class="form-control" required=""
                                        value=""> <div class="help-block"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>New Password <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password" id="password" class="form-control" required=""
                                        value=""> <div class="help-block"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Confirm Password <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required=""
                                        value=""> <div class="help-block"></div>
                                    </div>
                                </div>
                            </div><!-- end_cole_md_6 -->
                        </div><!-- end_row -->

     

                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Update</button>
                            </div>
                       
                       </div>
                     </div>
                   </form>

               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->

       </section>
    <!-- /.content -->
  </div>


  @endsection