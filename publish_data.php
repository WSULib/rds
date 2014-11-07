<?php include('top.php'); ?>

<script>
$( document ).ready(function() {
    $(".data_journals ul ul li").hide();    
    $(".data_journals ul a li").click(function() {
        $(".data_journals ul ul li").toggle();
    })
});
</script>

<!-- Begin page content -->
<div class="page-header">
	<h1>Publishing Your Data</h1>
</div>
<div data-spy="scroll" class="container" data-target="dmp">
 	<div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="service">
            <h2>We can help:</h2>
            <hr>
            <ul>
                <li>Identify appropriate repositories and journals for publishing your research data</li>
                <li>Describe your data so that they can be understood and reused by others</li>
                <li>Provide training or information about data publication to researchers</li>
            </ul>
          </div>
        </div>
    </div> <!-- row -->
    <br />
    <br />
    <div class="row">
        <div class="col-6 col-md-6 col-lg-6">
          <div class="service">
            <h2>Data Description</h2>
            <hr>
                <p>Good descriptive metadata (i.e., structured information that describes content) is key for the effective discovery and access/retrieval of datasets. Some research disciplines rely on general metadata standards (e.g., Dublin Core) whereas other disciplines have developed specialized metadata standards for <a href="http://www.dcc.ac.uk/resources/metadata-standards">describing research datasets</a>.</p>
            </ul>
          </div>
        </div>
          <div class="col-6 col-md-6 col-lg-6">
          <div class="service">
            <h2>Data Citation</h2>
            <hr>
                <p>Research datasets can be cited in much the same way as scholarly manuscripts, and for many of the same reasons: to assign due credit for the work, to aid readers in accessing the material, and to track the impact of a researcher's output. Our <a href="data_citation.php">data citation page</a> contains further information on elements of a data citation, use of formal identifiers for data, and examples of data citations.</p>
          </div>
        </div>
    </div> <!-- /row -->
    <br />
    <div class="row">
        <div class="col-6 col-md-6 col-lg-6">
          <div class="service">
            <h2>Data Repositories</h2>
            <hr>
                <p>Choosing a repository for your data</p>
            <ul>
                <li>Subject Repositories</li>
                <p>Hundreds of subject-specific data repositories can provide long-term storage and access to your data, code, and other research materials. Lists of these repositories can be browsed or searched at <a href="http://databib.org/">DataBib</a> and <a href="http://www.re3data.org/">re3data</a>. If no existing subject-specific data repositories are a good fit for your data, <a href="http://figshare.com/">Figshare</a> is a general-purpose repository for any type of research output.</p>
                <li>DigitalCommons@WayneState</li>
                <p><a href="http://digitalcommons.wayne.edu">DigitalCommons@WayneState</a> is a repository that provides perpetual access to the intellectual output of WSU. It accepts a wide range of digital formats including text, spreadsheets, images, audio, and video files.</p>
            </ul>
          </div>
        </div>

        <div class="col-6 col-md-6 col-lg-6">
          <div class="service data_journals">
            <h2>Data Journals</h2>
            <hr>
            <p>A growing number of journals publish peer-reviewed data papers. Rather than forming arguments or drawing conclusions from data, the purpose of data papers is to highlight and describe research datasets that may be useful to other researchers. Many journals also publish database and software papers.</p>
            <ul>
                <a><li>List of Data Journals (by Subject)</li></a>
                <ul>
                    <li><a href="data_journals.php#general_sci">General science journals</a></li>
                    <li><a href="data_journals.php#agriculture">Agricultural journals</a></li>
                    <li><a href="data_journals.php#archeology">Archeology journals</a></li>
                    <li><a href="data_journals.php#astronomy">Astronomy journals</a></li>
                    <li><a href="data_journals.php#biomedical">Biomedical journals</a></li>
                    <li><a href="data_journals.php#chemistry">Chemistry journals</a></li>
                    <li><a href="data_journals.php#ecology">Ecology and evolutionary biology journals</a></li>
                    <li><a href="data_journals.php#geoscience">Geoscience journals</a></li>
                    <li><a href="data_journals.php#physics">Physics journals</a></li>
                    <li><a href="data_journals.php#psychology">Psychology journals</a></li>
                    <li><a href="data_journals.php#public_health">Public health journals</a></li>
                    <li><a href="data_journals.php#robotics">Robotics journals</a></li>
                    <li><a href="data_journals.php#statistics">Statistics journals</a></li>
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