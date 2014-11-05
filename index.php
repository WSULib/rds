<?php include('top.php'); ?>

<!-- Begin page content -->
    
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
            <h2>Learning to Manage Your Data</h2>
            <h3>We can help you learn more about these topics</h3>
            <hr>
            <p><br/><br/><br/></p>
            <p><a class="" href="#">View details &raquo;</a></p>
          </div>
        </div>
<!--         <div class="col-3 col-md-3 col-lg-3">
          <div class="service">
            <h2><a href="checklist.php">Research Data Checklist</a></h2>
            <h3>Interactive tool</h3>
            <hr>
            <p>Use this interactive checklist to what steps you need to take with your research data.<br/><br/><br/></p>
            <p><a class="" href="checklist.php">View details &raquo;</a></p>
          </div>
        </div> -->        
        <div class="col-4 col-md-4 col-lg-4">
          <div class="service">
            <h2>Publishing Your Data</h2>
            <h3>Guidelines</h3>
            <hr>
            <p><br/><br/><br/></p>
            <p><a class="" href="publish_data.php">View details &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>

      <div class="container">
        <div class="row">
          <h2 class="news-header"><span><a href="http://blogs.wayne.edu/rdslib/" target="_blank">Latest News from Our Blog</a></span></h2>
        <?php
            $rss = new DOMDocument();
            $rss->load('http://blogs.wayne.edu/rdslib/feed/');
            $feed = array();
                foreach ($rss->getElementsByTagName('item') as $node) {
                  $item = array ( 
                    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                    );
                  array_push($feed, $item);
                }
                $limit = 3;
                for($x=0;$x<$limit;$x++) {
                  $title = str_replace(' & ', ' &amp; ', substr($feed[$x]['title'], 0, 45)."...");
                  $link = $feed[$x]['link'];
                  $description = substr($feed[$x]['desc'], 0, 190)."...";
                  date_default_timezone_set('America/Detroit');
                  $date = date('M d, Y', strtotime($feed[$x]['date']));

                  if ($date !== "Dec 31, 1969") {
              echo   '<div class="col-4 col-md-4 col-lg-4">
                        <div class="blog">
                          <div class="date">'.$date.'</div>        
                          <h5><a href="'.$link.'" title="'.$title.'" target="_blank">'.$title.'</a></h5>
                          <hr>
                          <p>' . $description .'
                          <p class="more"><a href="'.$link.'" title="'.$title.'" target="_blank">View post &raquo;</a></p>
                        </div>
                      </div>';
                }
              }
          ?>
      </div>
    </div>

<?php include('bottom.php'); ?>
