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
  </style>  
    <div class="page-header">
      <h1>Research Data Services</h1>          
      <p class="lead">Research Data Support by the Wayne State University Library System</p>
    </div>
 
    <div class="container">
      <div class="row">
        <div class="col-4 col-md-4 col-lg-4">
          <div class="service">
            <h2>Data Management Planning</h2>
            <h3>For grant proposals</h3>
            <hr>
            <p>Get more information about data management plan requirements and data sharing policies of major funding agencies</p>
            <p><a class="" href="dmp.php">View details &raquo;</a></p>
          </div>
        </div>
        <div class="col-4 col-md-4 col-lg-4">
          <div class="service">
            <h2>Publishing Research Data</h2>
            <h3>Venues and how-to’s</h3>
            <hr>
            <p>Discover ways to earn academic credit for disseminating your research data and how to prepare your datasets for publication</p>
            <p><a class="" href="publish_data.php">View details &raquo;</a></p>
          </div>
        </div>
        <div class="col-4 col-md-4 col-lg-4">
          <div class="service">
            <h2>Learning About Data Management</h2>
            <h3>Presentations and training materials</h3>
            <hr>
            <p>Ask us to present on research data management-related topics for groups of faculty or student researchers</p>
            <p><a class="" href="learning_dmp.php">View details &raquo;</a></p>
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

<?php include('bottom.php'); ?>
