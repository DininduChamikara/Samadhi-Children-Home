


<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->
 
<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / View Staff

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Staff

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
 <th>NO</th>   
<th>Name with Initials</th>
<th>Contact</th>
<th>Address</th>
<th>Username</th>
<th>Picture</th>
<th>Edit</th>
<th>Delete</th>
</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_pro = "select * from staff";

$run_pro = mysqli_query($Con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$name = $row_pro['name_with_init'];
$contact = $row_pro['ContactNo'];
$address = $row_pro['Address'];
$images = $row_pro['image_url'];
$username = $row_pro['username'];
$id = $row_pro['staffId'];
$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $name; ?></td>
<td><?php echo $contact; ?></td>
<td><?php echo $address; ?></td>
<td><?php echo $username; ?></td>

<td width=120px; >
<img class="center_image" width=100px height=100px src="uploads/<?=$images?>">
</td>

<td>

<a href="index.php?editStaff=<?php echo $id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>
<td>

<a href="index.php?deleteStaff=<?php echo $id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>



</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


