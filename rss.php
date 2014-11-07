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



              // echo   '<div class="col-4 col-md-4 col-lg-4">
              //           <div class="blog">
              //             <div class="date">November 24, 2014</div>        
              //             <h5><a href="http://library.wayne.edu" title="Test" target="_blank">Test</a></h5>
              //             <hr>
              //             <p>Here is a cool description.
              //             <p class="more"><a href="http://library.wayne.edu" title="Test" target="_blank">View post &raquo;</a></p>
              //           </div>
              //         </div>';
          ?>