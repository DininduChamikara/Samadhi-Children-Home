<?php


if(isset($_GET['editLabors'])){

$edit_id = $_GET['editLabors'];

$get_pro = "select * from labor where laborId='$edit_id'";

$run_pro = mysqli_query($Con,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);

$name_with_init = $row_pro['name_with_init'];
$fullname = $row_pro['fullname'];
$name = $row_pro['name'];
$contact = $row_pro['contact'];
$address = $row_pro['address'];
$gender = $row_pro['gender'];
$salary = $row_pro['salary'];
$company = $row_pro['company'];
$id = $row_pro['laborId'];


}

?>




<!DOCTYPE html>

    <html>
        <head>
            <title>Edit Labor</title>           

        </head>

        <body>

            <div class="row"><!--row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <ol class="breadcrumb"><!--breadcrumb starts-->

                        <li class="active">
                            <i class="fa fa-dashboard"></i>Labor/Edit Labor
                        </li>

                    </ol><!--breadcrumb Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--row Ends-->

            <div class="row"><!--2 row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <div class="panel panel-default"><!--panel panel-default starts-->

                        <div class="panel-heading"><!--panel-heading starts-->

                            <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Edit Labor

                            </h3>

                        </div><!--panel-heading Ends-->

                        <div class="panel-body"><!--panel-body starts-->

                            <form id="insert_form" class="form-horizontal" method="POST" ><!-- form-horizantal starts-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Name with Initials</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Sname_with_init" id="donarname" class="form-control"  value="<?php echo $name_with_init ?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Full Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Sfullname" id="donarname" class="form-control"  value="<?php echo $fullname ?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">First Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Sname" id="donarname" class="form-control"  value="<?php echo $name ?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Contact No</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                          <input type="text" name="contactNo" id="contactNo" class="form-control" value="<?php echo $contact ?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Address</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="address" id="address" class="form-control" value="<?php echo $address ?>" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Gender</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <select name="gender" id="gender" class="form-control">
                                            
                                            <option value="Male">Male</option>  
                                            <option value="Female">Female</option>  
                                        </select>      
                                        
                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->



                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Salary</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="salary" id="salary" class="form-control" value="<?php echo $salary ?>" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->



                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Name of the hiring company</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <select name="company" id="company" class="form-control">
                                            
                                            <option value="Sunshine">Sunshine</option>  
                                            <option value="Moonlight">Moonlight</option>  
                                        </select>      
                                        
                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->
                                
                                 

                                    
                                
                                
                                    
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" ></label>

                                             <div class="col-md-6" >

                                                 <input type="submit" class="btn btn-primary form-control" name="addStaff" value="update">
                                        
                                             </div>

                                     </div><!-- form-group Ends -->                       

                            </form><!-- form-horizantal Ends-->

                        </div><!--panel-body Ends-->

                    </div><!--panel panel-default Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--2 row Ends-->
            
            
            
             <?php
    if (isset($_POST['addStaff'])) {

     $name_with_init = $_POST['Sname_with_init'];
     $fullname = $_POST['Sfullname'];
     $name = $_POST['Sname'];
     $contact = $_POST['contactNo'];
     $address  =$_POST['address'];
     $gender =$_POST['gender'];
     $salary = $_POST['salary'];
     $company = $_POST['company'];
    

        $insert_staff = "update labor set name_with_init='$name_with_init', fullname='$fullname', name='$name', contact='$contact', address='$address' ,gender='$gender',salary='$salary', company='$company'  where laborId='$id'";

        $run_staff = mysqli_query($Con, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('labor updated successfully ')</script>";
            echo "<script> window.open('index.php?viewLabors ','_self')</script>";
        }
    }
    ?>
