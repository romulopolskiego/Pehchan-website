<!DOCTYPE html>
<html>
<head>
	<title>Contact us!</title>


<?php require 'header.php' ?>
</head>
<body>
<?php require 'navbar.php' ?>
<br>
  <div onloadedmetadata="" class="row">


		<div class="col s6">
			<!-- Modal Trigger -->
	 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Register</a>

	 <!-- Modal Structure -->
	 <div id="modal1" class="modal modal-fixed-footer">
		 <div class="modal-content">
			 <h4>Register to connect with us!</h4>
			 <form class="col s12">



				<div class="row">
					<div class="input-field col s12">
		 <select>
			 <option value="1">Vendor</option>
			 <option value="2">Customer</option>
		 </select>
		 <label>Select type of User</label>
	 </div>

					<div class="input-field col s12">
						<input id="first_name" type="text" class="validate">
						<label for="first_name">First Name</label>
					</div>
					<div class="input-field col s12">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Last Name</label>
					</div>

					<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>

					<div class="input-field col s12">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Address</label>
					</div>

					<div class="input-field col s12">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Pincode</label>
					</div>

						<div class="input-field col s12">
							<input id="last_name" type="text" class="validate">
							<label for="last_name">City</label>
						</div>

						<div class="input-field col s12"
						<input id="last_name" type="text" class="validate">
						<label for="last_name">GST No.</label>
						</div>

					<div class="input-field col s12">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Type of Dealer</lab	el>
					</div>

					<div class="input-field col s12">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Bank name</lab	el>
					</div>

					<div class="input-field col s12">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Account number</lab	el>
					</div>

					<div class="input-field col s12">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Bank address</lab	el>
					</div>

					<div class="input-field col s12">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">IFSC number</lab	el>
					</div>
				</div>



				<div class="input-field col s12">
					<textarea id="Message" class="materialize-textarea validate"></textarea>
					 <label for="Message">Message</label>
				</div>
			</form>

		 </div>
		 <div class="modal-footer">
			 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
		 </div>
	 </div>





		</div>








    <form class="col s6 offset-s6">
      <div class="row">
				<h3>FEEDBACK!</h3>
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
			<div class="input-field col s12">
				<textarea id="Message" class="materialize-textarea"></textarea>
				 <label for="Message">Message</label>
			</div>
    </form>
  </div>

  <div class="container">
    <div class="row">
          <div class="col-md-12">
            <div class="contact" style="background-color: white;">
              <div class="row" style="max-height: 70px;">
                <div class="col-md-offset-1 col-md-9">
<br>
   <span class="h3" style="-top: 50px; padding-left: 40%"> Be one of us </span>

<button id="myBtn1" class="btn btn-md" onclick="location.href='https://goo.gl/forms/bKiwLipkJceSJl7V2'">Register</button>


<br>

<!-- The Modal -->
<div id="custModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Form</h2>
    </div>
    <div class="modal-body">
     <form id="form1" action="../functions/general.php" method="post">
        Sign up as:
         <select>
           <option value="customer">Customer</option>
           <option value="vendor">Vendor</option>
         </select><br>
        Name:<br>
       <input type="text" name="name" ><br>
       Address:<br>
       <input type="textarea" name="add1" >
         Pincode:<br>
       <input type="text" name="pincode" >
       GST Registeration no.:<br>
       <input type="text" name="gstno" >
       City:<br>
       <input type="text" name="state" >
       Type of Dealer:
       <input type="text" name="" >
       PAN Number:(incase not registered under GST)<br>
       <input type="text" name="panno">
       Name of the Contact Person:<br>
       <input type="text" name="contactperson">
       Contact No:<br>
       <input type="text" name="contact"><br>
       Email id:<br>
       <input type="email" name="email"><br>
       Bank Name:<br>
       <input type="text" name="bankname"><br>
       Account No.:<br>
       <input type="text" name="accountno."><br>
       Branch Name & Address:<br>
       <input type="textarea" name="bnamenadd"><br>
       IFSC Code:<br>
       <input type="text" name="ifsc"><br>
         </form>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-block" style="padding: 10px; margin: 10px;">Submit</button>


    </div>
  </div>

</div>



  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('custModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  <div class="row">
                <div class="col-md-offset-1 col-md-5">
                  <div class="row">
                   <div class="col-md-offset-2col-md-10">
                   <h4>Book Appointment</h4>
                   <h5> <b>Head Office:</b>
                       <p style="padding-left: 50px;">Room No. 4, Ground Floor,<br>
Behind Dr. Farooqui's (Same Compound)<br>
St. Martin Road, Off Turner Road,<br>
Near Royal China and Union Bank,<br>
Bandra West<br>
Mumbai - 400 050</p>
                        <b>Branch Office:</b><br>
                        <p style="padding-left: 50px;">D-682, Malviya Nagar,<br>
                        Jaipur-71<br></p>
                        <b>Phone No.: </b><br>
                        <p style="padding-left: 50px;">+91 982.031.0177<br>
                        +91 961.961.0177<br>
                         </p>
                        <b>E-mail:</b><br>
                        <p style="padding-left: 50px;">
                        sales@mypehchan.com<br>
                        surbhi@mypehchan.com<br>
                        deep@mypehchan.com<br>
                        </p>
                </h5></div>
                   </div>
                  <div class="row">
                    <div class="col-md-12">

                    </div>

                  </div>


                </div>
                  <div class="col-md-5">
                   <h4>Contact Us!</h4>
                    <form id="vendorform" action="" method="post">
                      Name:
                      <input type="text" name="name" >
                      Email:
                      <input type="Email" name="email" >
                      Subject:
                      <input type="text" name="subject" >
                      Message:
                      <input type="textarea" name="Message" >
                      <button type="submit" id="btn1" class="btn  btn-block" style="margin-top: 10px; padding:10px;">Submit</button>

                    </form>
                  </div>


              </div>

                </div>
              </div>


            </div>
          </div>

        </div>

</div>
<?php require 'footer.php' ?>

</body>
</html>
