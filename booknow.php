<!-- BOOK NOW -->
<div class="section section-booknow" style="background-image: url('assets/img/bg/rsvp2.jpg');">
 <div class="row">
    <div class="col-sm-4 text-justify">
    </div>    
    
<div class="col-sm-4 text-justify" id="booking-container">
                <h3 class="subtitle text-left text-center">Dine with us</h3>
                <h2 class="title text-left text-center">BOOK A TABLE</h2>
                <p> We’ve got ideal spaces for various gatherings, meetings or just a sweet treat for your families and friends. We also provide strong wifi connection and charging stations for free.</p>
               
                <!-- Trigger the modal with a button -->
                <center><a href="javascript:void(0)" class="btn btn-primary btn-simple btn-lg myBtnBook"> MAKE A RESERVATION NOW</a></center>
            </div>
 <div class="col-sm-12 text-justify">
    </div> 
        </div>
   
        <!-- 1ST COLUMN -->
        
            <div>
                
                </ul></h6>
                </div>
                
        </div>
<br><br><br>
        <!-- 2ND COLUMN -->
        <div class="map text-center">
            <h3 class="card-title title-up">We are located here.</h3>
            <p><i class="fas fa-map-marker-alt"></i>&nbsp 622-632 Shaw Boulevard, Mandaluyong City</p>
            <div id="googleMap" style="width:100%; height:290px;"></div>  
            <script>
                function myMap() {
                var mapProp= {
                  center:new google.maps.LatLng(14.583104, 121.051307),
                  zoom:18,
                  };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
            </script>  
        </div>
    </div>
</div>
<!-- END OF BOOKNOW -->

<!-- MODAL FORM -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <button type="submit text-center" class="btn btn-primary btn-sm" data-dismiss="modal"><i class="far fa-arrow-alt-circle-left"></i> Back</button>
                <div class="card card-signup" data-background-color="black">
                    <div class="card-header text-center">
                        <h3 class="subtitle">Dine with us</h3>
                        <h2 class="title">BOOK A TABLE</h2>
                        <form method="post" id="bookingId">

                            <div class="input-container">
                                <i class="fa fa-circle icon"></i>
                                <select class="input-field" type="text" id="title" class="form-control" name="salutation" placeholder="Title" >
                                    <option value="Ms">Ms</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mr">Mrs</option>
                                </select>
                            </div>
                            <div class="input-container">
                                <i class="fa fa-user icon"></i>
                                <input class="input-field" type="text" id="name" class="form-control"  name="fullname" autofocus placeholder="Full name">
                            </div>
                            <div class="input-container">
                                <i class="fa fa-envelope icon"></i>
                                <input class="input-field" type="email" id="emailAdd" class="form-control" name="emailAdd" placeholder="Email address">
                            </div>
                            <div class="input-container">
                                <i class="fa fa-mobile-alt icon"></i>
                                <input class="input-field" type="number" id="contactNo" class="form-control" name="contactNo" placeholder="Contact number">
                            </div>
                            <div class="input-container">
                                <i class="fa fa-calendar-alt icon"></i>
                                <input class="input-field" type="date" id="bookdate" class="form-control" name="bookdate" value="" placeholder="Date">
                            </div>
                            <div class="input-container">
                                <i class="fa fa-clock icon"></i>
                                <input class="input-field" type="Time" id="booktime" class="form-control" name="booktime" placeholder="Time">
                        
                                <i class="fa fa-users icon"></i>
                                <input class="input-field" type="number" id="noPax" class="form-control" name="noPax" placeholder="No. of Pax">
                            </div>  

                            <div class="input-group no-border">
                                <textarea rows="3" cols="10" id="message" class="form-control" name="message" placeholder="MESSAGE / Special Request :"></textarea>
                            </div>

                            <div class="form-footer text-center">
                                <button type="submit" onclick="return clickButton();" name="save" class="btn btn-primary btn-round">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- END OF MODAL -->

<script type="text/javascript">
  function clickButton(){
    var salutation=document.getElementById('title').value;
    var fullname=document.getElementById('name').value;
    var emailAdd=document.getElementById('emailAdd').value;
    var contactNo=document.getElementById('contactNo').value;
    var bookdate=document.getElementById('bookdate').value;
    var booktime=document.getElementById('booktime').value;
    var noPax=document.getElementById('noPax').value;
    var message=document.getElementById('message').value;
    $.ajax({
        url: 'dbConfig.php',
        type: 'POST',
        data: {
            salutation: salutation,
            fullname: fullname,
            emailAdd: emailAdd,
            contactNo: contactNo,
            bookdate:bookdate,
            booktime: booktime,
            noPax: noPax,
            message: message
        },
        cache:true,
        success: function(response) {
            if(response == "Booking request has been sent!")
            {  
              Swal.fire({
                title: "DONE!",
                text: response,
                type: 'success',
              });
              document.getElementById("bookingId").reset();
            }else{
              Swal.fire({
                text: response,
                type: 'error',
             });
            }
          }              
      });
      return false;
      }
</script>