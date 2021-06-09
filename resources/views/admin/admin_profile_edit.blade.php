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
             <h4 class="box-title">Admin profile edit</h4>
            </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
                   <form novalidate="">
                     <div class="row">
                       <div class="col-12">
                           
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Admin User Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control" required=""
                                        value="{{ $editData->name }}"> <div class="help-block"></div>
                                    </div>
                                </div>
                            </div><!-- end_cole_md_6 -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Admin User Email <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email" class="form-control" required="" 
                                        value="{{ $editData->email }}"> <div class="help-block"></div>
                                    </div>
                                </div>
                            </div><!-- end_cole_md_6 -->
                        </div><!-- end_row -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Profile Image <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="profile_photo_path" class="form-control" required="" id="image">
                                    </div>
                                </div>     
                            </div><!-- end_cole_md_6 -->
                            <div class="col-md-6">
                                <img class="avatar avatar-xxl avatar-bordered" src="
                                {{ (!empty( $adminData->profile_photo_path )) ? 
                                    url('upload/admin_images/' . $adminData->profile_photo_path ) :
                                    url('upload/no_image.jpg')                         
                                 }}" style="width:100px; height: auto;" alt="" id="showImage">
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
  @endsection