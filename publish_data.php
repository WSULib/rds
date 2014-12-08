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
    <p class="lead">Publishing Your Data</p>
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
                <p>Good descriptive metadata is key to the discovery and comprehensibility of research datasets. Both <a href="http://www.dcc.ac.uk/resources/metadata-standards">general metadata standards and specific disciplinary metadata standards</a> exist for describing research datasets.</p>
            </ul>
          </div>
        </div>
          <div class="col-6 col-md-6 col-lg-6">
          <div class="service">
            <h2>Data Citation</h2>
            <hr>
            <p><a href="data_citation.php">Research datasets can be cited</a> in much the same way as scholarly manuscripts, and for many of the same reasons: to assign credit for the work, to help readers access the material, and to track the impact of a researcher's output.</p>
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
                <li>Subject-specific Repositories</li>
                <p><a href="http://www.re3data.org/browse/by-subject/">Subject-specific data repositories</a> can provide long-term storage of and access to your data, code, and other research materials.</p>
                <li>DigitalCommons@WayneState</li>
                <p><a href="http://digitalcommons.wayne.edu">DigitalCommons@WayneState</a> provides perpetual access to the intellectual output of WSU,  including text, spreadsheets, images, audio files, and video files.</p>
            </ul>
          </div>
        </div>

        <div class="col-6 col-md-6 col-lg-6">
          <div class="service data_journals">
            <h2>Data Journals</h2>
            <hr>
            <p>Rather than forming arguments or drawing conclusions from data, the purpose of peer-reviewed data papers is to highlight and describe research datasets that may be useful to other researchers.</p>
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