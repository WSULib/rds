<?php include('top.php'); ?>

<script>
var current = null;
$(".dropDown").click(function(){
    $(this).children(".content").slideToggle();
    if(current != this){ $(current).children(".content").slideToggle();
       current = this;}    
    else current = null;
    });


</script>

<!-- Begin page content -->
<div class="page-header">
	<h1>Publishing Your Data</h1>
</div>
<div data-spy="scroll" class="container" data-target="dmp">
 	<div class="row">
        <div class="col-6 col-md-6 col-lg-6">
          <div class="service">
            <h2>We can help:</h2>
            <hr>
            <ul>
                <li>Formulate and write data management plans for grant proposals</li>
                <li>Identify appropriate repositories/archives for your research data</li>
                <li>Provide training or information about data management planning to faculty members</li>
            </ul>
          </div>
        </div>


        <div class="col-6 col-md-6 col-lg-6">
          <div class="service">
            <h2>Data Repositories</h2>
            <hr>
            	<p>Choosing a repository for your data</p>
            <ul>
            	<li><a href="dmp_examples.php">Subject Repositories</a></li>
                <p>Hundreds of subject-specific data repositories can provide long-term storage and access to your data, code, and other research materials. Lists of these repositories can be browsed or searched at <a href="http://databib.org/">DataBib</a> and <a href="http://www.re3data.org/">re3data</a>. If no existing subject-specific data repositories are a good fit for your data, <a href="http://figshare.com/">Figshare</a> is a general-purpose repository for any type of research output.</p>
            	<li><a href="http://digitalcommons.wayne.edu">DigitalCommons@WayneState</a></li>
            	<p>DigitalCommons@WayneState is a repository that provides perpetual access to the intellectual output of WSU. It accepts a wide range of digital formats including text, spreadsheets, images, audio, and video files.</p>
            </ul>
          </div>
        </div>
    </div> <!-- /row -->
    <br />
    <div class="row">
        <div class="col-6 col-md-6 col-lg-6">
          <div class="service">
            <h2>Documenting your data</h2>
            <hr>
            <ul>
            	<li><a href="data_citation.php">Data Citation</a></li>
            	   <p>Research data is cited in much the same way as research publications, and for many of the same reasons: to assign due credit for the scholarship, to aid readers in accessing the material, and to help track the impact of a researcher's output. Our <a href="data_citation.php">Data Citation page</a> contains further information on elements of a data citation, use of formal identifiers for data, and examples. </p>
            	<li>Data Description</li>
            	   <p>As with other digital information sources, good descriptive metadata (structured information that describes content) is key to effective discovery and access/retrieval. While many research disciplines rely on general standards (such as Dublin Core) for describing digital objects, others disciplines have developed specialized metadata standards for describing their research data. The Digital Curation Center (DCC) maintains a page of disciplinary metadata standards, which can be accessed <a href="http://www.dcc.ac.uk/resources/metadata-standards">here</a>.</p>
                   <p>If you are depositing your data in a disciplinary repository, the repository administrators may require the description of your data using a disciplinary metadata standard prior to deposit. RDS@Wayne can also provide guidance to WSU researchers in the choice of metadata best suited to their research data.</p>
 	        </ul>
          </div>
        </div>


        <div class="col-6 col-md-6 col-lg-6">
          <div class="service">
            <h2>Data Journals</h2>
            <hr>
            <p>A growing number of journals publish peer-reviewed data papers. Rather than forming arguments or drawing conclusions from data, the purpose of data papers is to highlight and describe research datasets that may be useful to other researchers. Many journals also publish database and software papers.</p>
            <ul>
                <li>List of Data Journals (by Subject)</li>
                <ul>
                    <li>General science journals [link to relevant section]</li>
                    <li>Agricultural journals [link to relevant section]</li>
                    <li>Archeology journals [link to relevant section]</li>
                    <li>Astronomy journals [link to relevant section]</li>
                    <li>Biomedical journals [link to relevant section]</li>
                    <li>Chemistry journals [link to relevant section]</li>
                    <li>Ecology and evolutionary biology journals [link to relevant section]</li>
                    <li>Geoscience journals [link to relevant section]</li>
                    <li>Physics journals [link to relevant section]</li>
                    <li>Psychology journals [link to relevant section]</li>
                    <li>Public health journals [link to relevant section]</li>
                    <li>Robotics journals [link to relevant section]</li>
                    <li>Statistics journals [link to relevant section]</li>
                </ul>
            </ul>
<!--             <ul>
            	<li><a href="http://rds.wayne.edu/data_journals.php">What are they?</a></li>
            	<li><a href="http://rds.wayne.edu/data_journals.php">Benefits</a></li>
            </ul> -->
          </div>
        </div>

    </div> <!-- /row -->

<br />
<br />


</div> <!-- /container -->







<?php include('bottom.php'); ?>