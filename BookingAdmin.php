<?php
session_start();
if (isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo/coffee1.png">
<link rel="icon" type="image/jpeg" href="assets/img/logo/coffee1.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>CoffeeHOUSE</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Kaushan+Script|Pacifico|Major+Mono+Display|Days+One" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<!-- CSS Files -->
<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="./assets/css/now-ui-kit.css" rel="stylesheet" />
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<!-- CSS Just for demo purpose, don't include it in your project -->
<style type="text/css">
	body {
          margin:0px;
          background-size: 100% 110%;
          }
    table{
   		margin-top: 100px;
		}
		#ako{
			padding-top: 90px;
			padding-bottom: : 100px;
		}
	td, th, tr {
		background-color: #060A12;
		color: #fff;
		font-size: 12px;
		text-align: center;
	}

	.fg-toolbar {
		background-color: #000000;
		border: 2px solid #fff;
	}	

	#tableData_info {
		color: #fff;
		font-size: 10px;
	}

	label {
		color: #fff;
		font-size: 12px;
	}

	.sorting {
		background-color: #04080E;
	}

	#tableData {
		border-left: 2px solid #fff;
		border-right: 2px solid #fff;
	}
	.hidden{
	    display:none;
	}

	/*loading*/
	.ajax_loader i {
	    left: 50%;
	    bottom: 20%;
	    position: absolute;
	    z-index: 1;
	}

	.overlay {
	    background-color:#EFEFEF;
	    position: fixed;
	    width: 100%;
	    height: 100%;
	    z-index: 1000;
	    top: 0px;
	    left: 0px;
	    opacity: .5; /* in FireFox */ 
	    filter: alpha(opacity=50); /* in IE */
	}
</style>
</head>
<body>
 <?php include 'navbar.php';?>
 <div class="section section-head" style="background-image: url('assets/img/bg/menu.jpg');">
 	<div class="container" id="ako">
 	<div class="ajax_loader hidden"><i class="fa fa-spinner fa-spin fa-5x" aria-hidden="true"></i></div>
 	<table id="tableData" class="table table-striped table-bordered nowrap" style="width:100%" cellspacing="0" width="100%">
	  <thead>
	    <tr class="tblheader text-center">
	      <th scope="col"><h6>#</h6></th>
	      <th scope="col"><h6>FULL NAME</h6></th>
	      <th scope="col"><h6>EMAIL</h6></th>
	      <th scope="col"><h6>PHONE</h6></th>
	      <th scope="col"><h6>DATE</h6></th>
	      <th scope="col"><h6>TIME</h6></th>
	      <th scope="col"><h6>PAX</h6></th>
	      <th scope="col"><h6>MESSAGE</h6></th>
	      <th scope="col"><h6>STATUS</h6></th>      
	      <th scope="col"><h6>ACTION</h6></th>
	    </tr>
	  </thead>
	  <tbody>

	<?php
        $conn = mysqli_connect("localhost", "root", "", "COFFEE_DB");
                    /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
          
        $sql = "SELECT * FROM booking";
        $result = mysqli_query($conn,$sql);

        if ($result->num_rows > 0) {
			// output data of each row
			$counter = 1;
		    while($row = $result->fetch_assoc()) {
		    	$buttonConfirm = "<input class=\"btn-success\" id =".$row["id"]." onclick=\"return updateBooking(this);\" type=\"button\" value=\"confirm\"/>";
				$buttonCancel = "<input class=\"btn-warning\" id =".$row["id"]."  onclick=\"return updateBooking(this);\" type=\"button\" value=\"cancel\"/>";
				$time = date("g:i A", strtotime($row["book_time"]));
		    	echo "
		    		<tr>
				    <th scope=\"row\">".$counter++."</th>
				    <td>".$row["full_name"]."</td>
				    <td>".$row["email"]."</td>
				    <td>".$row["contact_no"]."</td>
				    <td>".$row["book_date"]."</td>
				    <td>".$time."</td>
				    <td>".$row["no_pax"]."</td>
				    <td>".$row["message"]."</td>
				    <td>".$row["status"]."</td>";

				    if($row["status"] == "PEND"){
				    	echo "<td>".$buttonConfirm,$buttonCancel."</td>";
				    }else{
				    	echo "<td></td>";
				    }
				   echo "</tr>";
		    }
		}
      
  ?>

</tbody>
</table>
</div></div>
<?php require 'footer.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   	<?php
      if (isset($_SESSION['success']) && $_SESSION['success'] == true) {
      		$_SESSION['success'] = false;
      	?>
      	const Toast = Swal.mixin({
		  toast: true,
		  position: 'top-end',
		  showConfirmButton: false,
		  timer: 3000
		});

		Toast.fire({
		  type: 'success',
		  title: 'Signed in successfully'
		})
     <?php } ?>

     var table = $('#tableData').DataTable( {
        responsive: true
    } );
    new $.fn.dataTable.FixedHeader( table );
});
  function updateBooking(data){
  	var id = data.id;
	var action = data.value;

	Swal.fire({
		  title: "Are you sure you want to "+action+" the booking?",
		  type: 'question',
		  showCancelButton: true,
		  confirmButtonText: 'OK',
		  cancelButtonText: 'NO',
		  reverseButtons: true
		})
		.then((result) => {
		  if (result.value) {
		  	$(".hidden").show();
		  	var div= document.createElement("div");
		    div.className += "overlay";
		    document.body.appendChild(div);
		 	$('body').on('click.myDisable', 'a', function(e) { e.preventDefault(); });
			   	 $.ajax({
			        url: 'dbUpdate.php',
			        type: 'GET',
			        data: {
			            id: id,
			            action: action
			        },
			        cache:false,
			        success: function(response) {
			          Swal.fire({
			                title: "DONE!",
			                text: response,
			                type: 'success',
			                showCancelButton: false,
		  					confirmButtonText: 'OK',
			              })
			          .then((result) => {
		  					 if (result.value) {
		  						setTimeout(location.reload.bind(location),500);
		  					}
		  				 });
			          $(".hidden").hide();
			           document.body.removeChild(div);
			           $('body').off('click.myDisable');
			          }
			      })
		  } 
	  });
      return false;
  }
</script>

</body>
</html>

<?php
}else{
 echo "<script> location.href='index.php'; </script>";
 exit();
}
?>
