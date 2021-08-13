<?php

if(isset($_GET['editStaff'])){

$edit_id = $_GET['editStaff'];

$get_pro = "select * from staff where staffId='$edit_id'";

$run_pro = mysqli_query($Con,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);

$firstname = $row_pro['firstname'];
$lastname = $row_pro['lastname'];
$name_with_init = $row_pro['name_with_init'];
$bdate = $row_pro['bdate'];
$snic = $row_pro['snic'];
$gender = $row_pro['gender'];
$contact = $row_pro['ContactNo'];
$address  =$row_pro['Address'];
$email = $row_pro['email'];
$post = $row_pro['post'];
$username =$row_pro['username'];

$id = $row_pro['staffId'];

}

?>



<!DOCTYPE html>

    <html>
        <head>
            <title>Edit Staff</title>           

        </head>

        <body>

            <div class="row"><!--row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <ol class="breadcrumb"><!--breadcrumb starts-->

                        <li class="active">
                            <i class="fa fa-dashboard"></i>Staff/Edit Staff
                        </li>

                    </ol><!--breadcrumb Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--row Ends-->

            <div class="row"><!--2 row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <div class="panel panel-default"><!--panel panel-default starts-->

                        <div class="panel-heading"><!--panel-heading starts-->

                            <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Edit Staff

                            </h3>

                        </div><!--panel-heading Ends-->

                        <div class="panel-body"><!--panel-body starts-->

                            <form id="insert_form" class="form-horizontal" method="POST" ><!-- form-horizantal starts-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">First Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Sfirstname" id="donarname" class="form-control" value="<?php echo $firstname ?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Last Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Slastname" id="donarname" class="form-control" value="<?php echo $lastname ?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Name with Initials</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Sname_with_init" id="donarname" class="form-control" value="<?php echo $name_with_init ?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                
                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Birth Date </label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="date" name="bdate" id="bdate" class="form-control" value="<?php echo $bdate?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">NIC</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Snic" id="donarname" class="form-control" value="<?php echo $snic ?>" required>

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

                                    <label class="col-md-3 control-label">Email</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Post</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <select name="post" id="post" class="form-control" value="<?php echo $post ?>" required>  
                                            <option value="Admin">Admin</option>  
                                            <option value="Principal">Principal</option>  
                                            <option value="Matron">Matron</option>  
                                        </select>      
                                        
                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                 <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">UserName</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="username" id="username" class="form-control" value="<?php echo $username ?>" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->
                                
                                 <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Password</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="password" name="password" id="password" class="form-control" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                    
                                
                                
                                    
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" ></label>

                                             <div class="col-md-6" >

                                                 <input type="submit" class="btn btn-primary form-control" name="editStaff" value="Update">
                                        
                                             </div>

                                     </div><!-- form-group Ends -->                       

                            </form><!-- form-horizantal Ends-->

                        </div><!--panel-body Ends-->

                    </div><!--panel panel-default Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--2 row Ends-->
            
            
            
             <?php
    if (isset($_POST['editStaff'])) {

     $firstname = $_POST['Sfirstname'];
     $lastname = $_POST['Slastname'];
     $name_with_init = $_POST['Sname_with_init'];
     $bdate = $_POST['bdate'];
     $snic = $_POST['Snic'];
     $gender = $_POST['gender'];
     $contact = $_POST['contactNo'];
     $address  =$_POST['address'];
     $email = $_POST['email'];
     $post = $_POST['post'];
     $username =$_POST['username'];
     $password = $_POST['password'];

        $insert_staff = "update  staff set firstname='$firstname',lastname='$lastname',name_with_init='$name_with_init',bdate='$bdate',snic='$snic',gender='$gender',ContactNo='$contact',Address='$address',email='$email',post='$post',username='$username',password='$password' where staffId = '$edit_id'";
               

        $run_staff = mysqli_query($Con, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('User updated successfully ')</script>";
            echo "<script> window.open('index.php?viewStaff ','_self')</script>";
        }
    }
    ?>
