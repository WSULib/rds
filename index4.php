<?php include('top.php'); ?>

<!-- Begin page content -->
  <style>
  .lead {
     color: #CCA500;
  }
  .service {
    background: #DAD6BD;
  }
  .blog {
    background: #DAD6BD;    
  }
  a.navbar-brand img {
    /*display: none;*/
  }  
  h2 {
    vertical-align: bottom;
  }
  .container_img {
    /*large*/
    /*background-image: url("https://farm7.staticflickr.com/6219/6876694340_acbd192e1f_k.jpg");*/
    /*original*/
    background-image: url("/images/research.jpg");
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-color: transparent;
    margin-top: -30px;
  }
  </style>  
    <div class="page-header">
      <h1>Research Data Services</h1>          
      <p class="lead">Research Data Support by the Wayne State University Library System</p>
    </div>
    <div class="page-header container_img" style="height:45%;">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">        
        <div class="service" style="height:100%;">
        <div class="col-4 col-md-4 col-lg-4">
            <h2><a href="dmp.php">Data Management Planning</a></h2>
<!--             <h3>For grant proposals</h3>
            <hr>
            <p>Get more information about data management plan requirements and data sharing policies of major funding agencies</p>
            <p><a class="" href="dmp.php">View details &raquo;</a></p> -->
        </div>
        <div class="col-4 col-md-4 col-lg-4">
          <i class="icon-publish icons"></i>
            <h2><a href="publish_data.php">Publishing Research Data</a></h2>
<!--             <h3>Venues and how-to’s</h3>
            <hr>
            <p>Discover ways to earn academic credit for disseminating your research data and how to prepare your datasets for publication</p>
            <p><a class="" href="publish_data.php">View details &raquo;</a></p> -->
        </div>
        <!-- <div class="col-4 col-md-4 col-lg-4"> -->
            <h2><a href="learning_dmp.php">Learning About Data Management</a></h2>
<!--             <h3>Presentations and training materials</h3>
            <hr>
            <p>Ask us to present on research data management-related topics for groups of faculty or student researchers</p> -->
            <!-- <p><a class="" href="learning_dmp.php">View details &raquo;</a></p> -->
        <!-- </div> -->
      </div>
    </div>
      </div> <!-- row -->
    </div> <!-- container -->

      <div class="container">
        <div class="row">
          <h2 class="news-header"><span><a href="http://blogs.wayne.edu/rdslib/" target="_blank">Latest News from Our Blog &raquo;</a></span></h2>
          <script>
          var rss = $.ajax({
            type: "POST",
            url: "rss.php",
            timeout: 3000,
            dataType: "html"
        });

        rss.done(function(response) {
           // console.log("success");
           $(".news-header").after(response);
        });

        rss.fail(function(jqXHR, textStatus) {
          if (jqXHR.status === 0)
          {
              // console.log('Cannot connect.\nVerify Network.');
          }
          else if (jqXHR.status == 404)
          {
              // console.log('Requested page not found. [404]');
          }
          else if (jqXHR.status == 500)
          {
              // console.log('Internal Server Error [500].');
          }
          else if (exception === 'parsererror')
          {
              // console.log('Requested JSON parse failed.');
          }
          else if (exception === 'timeout')
          {
              // console.log('Time out error.');
          }
          else if (exception === 'abort')
          {
              // console.log('Ajax request aborted.');
          }
          else
          {
              // console.log('Uncaught Error.n' + jqXHR.responseText);
          }
        });

      </script>
        
      </div>
    </div>
    <br />

<div class="container">

        <div class="container team">
          <div class="row">
          <h2 class="contact-header"><span><a href="http://blogs.wayne.edu/rdslib/" target="_blank">Contact Us</a></span></h2>
            <div class="col-lg-12">
              <div class="col-lg-4 col-sm-4">
              </div>
              <div class="col-lg-4 col-sm-4"><br/>
                <h2 style="text-align: center; font-family: "Oswald"; font-size:20px;"><a href="mailto:rds@wayne.edu">rds@wayne.edu</a></h2><br/>
              </div>
              <div class="col-lg-4 col-sm-4">
              </div>
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
