<?php include('top.php'); ?>

<!-- Begin page content -->
<div class="page-header">
	<p class="lead">Contact Us
  </p>
</div>
<div class="container">

        <div class="container team">
          <div class="row">
          	<div class="col-lg-12">
<!--               <div class="col-lg-6 col-sm-6">
              </div>
          		<div class="col-lg-6 col-sm-6"> -->
          			<h2 style="text-align:center; text-transform: uppercase; font-family: Oswald;">Questions?</h2>
          			<h2 style="text-align:center; font-family: Oswald;"><a style="color:black;" href="mailto:rds@wayne.edu">rds@wayne.edu</a></h2><br/>
          		<!-- </div> -->
<!--               <div class="col-lg-4 col-sm-4">
              </div>
          		<div class="col-lg-6 col-sm-6">
          		</div> -->
          	</div>
          </div> <!-- row -->
          	<hr/>

          	<div class="row">
            <div class="col-lg-4 col-sm-4"> 
              <img class="img-circle hide" src="holder.js/140x140" alt="">
              <h5>Katherine Akers, Ph.D.</h5>
              <p>Biomedical Research Data Specialist<br/>
			  <a href="mailto:katherine.akers@wayne.edu">katherine.akers@wayne.edu</a><br/>
			  (313) 577-9593</p>
            </div>
            <div class="col-lg-4 col-sm-4">
              <img class="img-circle hide" src="holder.js/140x140" alt="">
              <h5>Cole Hudson, MA/MLIS</h5>
              <p>Digital Publishing Librarian<br/>
              <a href="mailto:cole.hudson@wayne.edu">cole.hudson@wayne.edu</a><br/>
              (313) 577-2659</p>
            </div>
            <div class="col-lg-4 col-sm-4">
              <img class="img-circle hide" src="holder.js/140x140" alt="">
              <h5>Jim Van Loon, MSME/MLIS</h5>
              <p>Science Librarian<br/>
              <a href="mailto:jevanloon@wayne.edu">jevanloon@wayne.edu</a><br/>
              (313) 577-6446</p>
            </div>
          </div>
        </div>   
</br/>
<hr class="container">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-left">
	  	<form method="post" action="contactengine.php">
		    <fieldset>
		      	<div class="form-group">
			        <label for="Name" class="pull-left">Name</label>
			        <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter your name">
		      	</div>
		      	<div class="form-group">
		        	<label for="Email" class="pull-left">Email</label>
		        	<input type="email" class="form-control" name="Email" id="Email" placeholder="Enter your email">
		      	</div>
		      	<div class="form-group">
		        	<label for="Tel" class="pull-left">Phone</label>
		        	<input type="tel" class="form-control" name="Tel" id="Tel" placeholder="Enter your phone number">
		      	</div>
                <input id="Website" name="Website" type="text" value=""  />              
			</div>  
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-right">
		      	<div class="form-group">
		        	<label for="Message" class="pull-left">Message</label>
		        	<textarea name="Message" id="Message" class="form-control" rows="9" placeholder="Enter your message"></textarea>
		      	</div>
		      	<button type="submit" class="btn btn-default pull-right">Submit</button>
		    </fieldset>
		</form>
	</div>
</div>

<?php include('bottom.php'); ?>