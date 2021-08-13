<!DOCTYPE html>

    <html>
        <head>
            <title>Insert Staff</title>           

        </head>

        <body>

            <div class="row"><!--row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <ol class="breadcrumb"><!--breadcrumb starts-->

                        <li class="active">
                            <i class="fa fa-dashboard"></i>Staff/Add Staff
                        </li>

                    </ol><!--breadcrumb Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--row Ends-->

            <div class="row"><!--2 row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <div class="panel panel-default"><!--panel panel-default starts-->

                        <div class="panel-heading"><!--panel-heading starts-->

                            <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Add Staff

                            </h3>

                        </div><!--panel-heading Ends-->

                        <div class="panel-body"><!--panel-body starts-->

                            <form id="insert_form" class="form-horizontal" method="POST" ><!-- form-horizantal starts-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">First Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Sfirstname" id="donarname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->


                                </div><!--form-group Ends-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Last Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Slastname" id="donarname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Name with Initials</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Sname_with_init" id="donarname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Birth Date </label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="date" name="bdate" id="bdate" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">NIC</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Snic" id="donarname" class="form-control" required>

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

                                          <input type="text" name="contactNo" id="contactNo" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Address</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="address" id="address" class="form-control" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Email Address</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="email" id="email" class="form-control" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Post</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <select name="post" id="post" class="form-control">  
                                            <option value="Admin">Admin</option>  
                                            <option value="Principal">Principal</option>  
                                            <option value="Matron">Matron</option>  
                                        </select>      
                                        
                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                 <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">UserName</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="username" id="username" class="form-control" required >

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

                                                 <input type="submit" class="btn btn-primary form-control" name="addStaff" value="Insert">
                                        
                                             </div>

                                     </div><!-- form-group Ends -->                       

                            </form><!-- form-horizantal Ends-->

                        </div><!--panel-body Ends-->

                    </div><!--panel panel-default Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--2 row Ends-->
            
            
            
             <?php
    if (isset($_POST['addStaff'])) {

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

        $insert_staff = "insert into staff (firstname,lastname,name_with_init,bdate,snic,gender,ContactNo,Address,email,post,username,password)"
                . " values ('$firstname','$lastname','$name_with_init','$bdate','$snic','$gender','$contact','$address','$email','$post','$username','$password')";

        $run_staff = mysqli_query($Con, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('User Added successfully ')</script>";
            echo "<script> window.open('index.php?viewStaff ','_self')</script>";
        }
    }
    ?>
