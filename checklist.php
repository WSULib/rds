<?php 
//EXPECTED VARIABLES: 

// factor1 : checkbox array
// factor2 : checkbox array
// factor3 : checkbox array
// factor4 : checkbox array
// submit: submit {Evaluate Fair Use}

if (isset($_POST['submit']) ) {
	
	//FUNCTION TO DETERMINE THE TILT OF A FACTOR
	function factor_tilt($factor) {
		$pro_count = count($factor["favor"]);
		$con_count = count($factor["against"]);
		if ((empty($pro_count)) && (empty($con_count))) { $pro_count = $con_count = 1; } // 0/0
		if ((empty($con_count)) && ($pro_count >= 1)) { $pro_count++; $con_count = 1; } // N/0
		$ratio = $pro_count/$con_count;
		if ($ratio > 1) {
			$tilt = "favor"; }
		else if ($ratio == 1) {
			$tilt = "even"; }
		else {
			$tilt = "against"; }
		return $tilt;		
	}
	
	//REGISTER THE TILTS OF EACH FACTOR
	$factor[1]["favor"] = $_POST["fac1favor"];
	$factor[1]["against"] = $_POST["fac1against"];
	$total_tilt[] = $factor[1]["tilt"] = factor_tilt($factor[1]);
	
	$factor[2]["favor"] = $_POST["fac2favor"];
	$factor[2]["against"] = $_POST["fac2against"];
	$total_tilt[] = $factor[2]["tilt"] = factor_tilt($factor[2]);
	
	$factor[3]["favor"] = $_POST["fac3favor"];
	$factor[3]["against"] = $_POST["fac3against"];
	$total_tilt[] = $factor[3]["tilt"] = factor_tilt($factor[3]);
	
	$factor[4]["favor"] = $_POST["fac4favor"];
	$factor[4]["against"] = $_POST["fac4against"];
	$total_tilt[] = $factor[4]["tilt"] = factor_tilt($factor[4]);
	
	//DETERMINE THE RATIO OF FAVOR vs. AGAINST
	$pro_count = $tie_count = $con_count = 0;
	
	foreach ($total_tilt as $value) {
		if ($value == "favor") { $pro_count++; }
		if ($value == "even") { $tie_count++; }
		if ($value == "against") { $con_count++; }
	}
	
	if ((empty($pro_count)) && (empty($con_count))) { $pro_count = $con_count = 1; } // 0/0
	if ((empty($con_count)) && ($pro_count >= 1)) { $pro_count++; $con_count = 1; } // N/0
	$ratio = $pro_count/$con_count;
	
	//FIGURE OUT THE ULTIMATE DECISION OVER THE FOUR FACTORS
	if (empty($tie_count)) {
		if ($ratio > 1) { $decision = "favor"; $dtxt = "toward"; } else
		if ($ratio < 1) { $decision = "against"; $dtxt = "away from"; } else {
		$decision = "even"; $dtxt = "neither toward nor away from"; }
	} else {
		if ($tie_count > 2) { $decision = "even"; $dtxt = "neither toward nor away from"; } else
		if ($tie_count == 2 && $ratio == 1) { $decision = "even"; $dtxt = "neither toward nor away from"; } else
		if ($tie_count < 2) {
			if ($ratio > 1) { $decision = "favor"; $dtxt = "toward"; } else
			if ($ratio < 1) { $decision = "against"; $dtxt = "away from"; } else {
			$decision = "even"; $dtxt = "neither toward nor away from"; }
		}
	}
	if ($decision == "favor") { $decisionh2 = "Your material appears to favor Fair Use"; } else
        if ($decision == "against") { $decisionh2 = "Your material appears not to favor Fair Use"; }
        else { $decisionh2 = "There isn't enough evidence to decide on this material"; }
 
} // END IF (isset($_POST['submit']))

?>

<?php include('top.php'); ?>

<!-- Begin page content -->
<div class="page-header">
	<h1>Research Data Checklist</h1>
</div>
<div class="container">

<?php
// if (isset($_POST['submit']) ) {
       
//         for ($i=1;$i<=4;$i++) {
//            if ($factor[$i]['tilt'] == "favor") {
//               $factor[$i]['message'] = "Favors Fair Use"; } else
//            if ($factor[$i]['tilt'] == "even") {
//               $factor[$i]['message'] = "Neither For Nor Against Fair Use"; }
//            else { $factor[$i]['message'] = "Against Fair Use"; }
//         }
 	
	
// 	echo("{$decisionh2}</h2>\r\n\r\n");
//     echo("<div id=\"decision\">\r\n");
//         echo "<p>At a glance it appears the material you are evaluating <span class=\"{$decision}\">leans {$dtxt} fair use</span>, though this simple checklist cannot by itself determine if material falls under fair use. We suggest you contact your <a href=\"/info/staff/liaison.php\">liaison librarian</a> for further assistance.</p>";

//         echo "<p>Please print this page for your records if you feel it would be helpful.</p>";
 
//         for ($i=1;$i<=4;$i++) {	
//           echo ("<div class=\"factor\">\r\n");
//           echo ("<h3>");
//           if ($i==1) { echo ("Factor 1: Purpose and Character of the Use"); } else
//           if ($i==2) { echo ("Factor 2: Nature of Copyrighted Work"); } else
//           if ($i==3) { echo ("Factor 3: Amount and Substantiality of Portion Used"); } else
//           if ($i==4) { echo ("Factor 4: Effect on Market for Original"); }
//           echo ("</h3>\r\n");
//           echo ("<p class=\"{$factor[$i]['tilt']}\">{$factor[$i]['message']}</p>\r\n\r\n");
//           echo ("<div class=\"pro\">\r\n");
//           echo ("<p>Weighs in favor of fair use:</p>\r\n");
//           echo ("<ul>\r\n");
//           foreach ($factor[$i]['favor'] as $value) {
//              echo ("<li>{$value}</li>\r\n");
//           }
//           echo ("</ul>\r\n");
//           echo ("</div>\r\n");
//           echo ("<div class=\"con\">\r\n");
//           echo ("<p>Weighs against fair use:</p>\r\n");
//           echo ("<ul>\r\n");
//           foreach ($factor[$i]['against'] as $value) {
//              echo ("<li>{$value}</li>\r\n");
//           }
//           echo ("</ul>\r\n");
//           echo ("</div>\r\n");
//           echo ("</div><!--.FACTOR-->\r\n");
//         }
		
//           echo ("</div><!--#DECISION-->\r\n\r\n");
// 		  echo ("<h2 class=\"printoff\">Check another work</h2>\r\n\r\n");
// } else {
// 	echo ("</h2>\r\n\r\n");
// } // END SECOND IF (isset($_POST['submit']))

?>

<p class="printoff">The questions below are intended to help determine what steps you have to compelete with your research generated data.</p>

<p class="printoff"><em>The Wayne State University Library System offers this checklist as part of its Research Data Services. The information, however, is not exhaustive, nor is it a guarantee that.....</em></p>

<form id="checklist" method="post" action="checklist.php">

<div id="factor1" class="factor">
	<h3>Types of data</h3>
		<div class="pro">
		<p class="favor">Questions</p>
		<ul class="checklist">
			<li><label for="f11">What kinds of data - survey, interview, observation, machine or instrument collected, physical samples, models, etc. - are you collecting?</label><input class="form-control input-sm" placeholder="enter data types here" id="f11" name="fac1favor[]" /></li><br />
			<li><label for="f12">What formats - paper, digital, image, audio, other - will the data be in?</label><input class="form-control input-sm" placeholder="enter format of data" id="f12" name="fac1favor[]" /></li><br />
			<li><label for="f13">How much data – number of files, size of files, total size if all stored in one computer folder – will you collect?</label><input class="form-control input-sm" placeholder="enter in the size of the data" id="f13" name="fac1favor[]" /></li>
		</ul>
		</div>
		
<!-- 		<div class="con">
		<p class="against">Weighs Against Fair Use</p>
			<ul class="checklist">
			<li><input type="checkbox" value="commercial activity" id="f21" name="fac1against[]" /><label for="f21">Commercial Activity</label></li>
			<li><input type="checkbox" value="profiting from use" id="f22" name="fac1against[]" /><label for="f22">Profiting from use</label></li>
			<li><input type="checkbox" value="entertainment" id="f23" name="fac1against[]" /><label for="f23">Entertainment</label></li>
			<li><input type="checkbox" value="non-transformative" id="f24" name="fac1against[]" /><label for="f24">Non-transformative </label></li>
			<li><input type="checkbox" value="for publication" id="f25" name="fac1against[]" /><label for="f25">For publication</label></li>
			<li><input type="checkbox" value="for public distribution" id="f26" name="fac1against[]" /><label for="f26">For public distribution</label></li>
			<li><input type="checkbox" value="use exceeds intended educational purpose" id="f27" name="fac1against[]" /><label for="f27">Use exceeds intended educational purpose</label></li>
			</ul>
		</div> -->
</div>

<div id="factor2" class="factor">
	<h3>Data formats and standards</h3>
		<div class="pro">
		<p class="favor">Questions</p>
			<ul class="checklist">
			<li><input type="checkbox" value="published work" id="f31" name="fac2favor[]" /><label for="f31">Do you have coding sheets, data dictionaries or other documentation to explain terms, variable names, codes and abbreviations used?</label></li>
			<li><input type="checkbox" value="factual or nonfiction work" id="f32" name="fac2favor[]" /><label for="f32">Have you provided documentation describing how the data were collected or created?</label></li>
			<li><input type="checkbox" value=" important to educational objectives" id="f33" name="fac2favor[]" /><label for="f33">Have you used standard collection methods, standard data formats, and standard file format choices (if these exist for your research field)?</label></li>
			</ul>
		</div>
		
<!-- 		<div class="con">
		<p class="against">Weighs Against Fair Use</p>
			<ul class="checklist">
			<li><input type="checkbox" value="unpublished work" id="f41" name="fac2against[]" /><label for="f41">Unpublished work</label></li>
			<li><input type="checkbox" value="Highly creative work (art, music, novels, films, plays, poetry, fiction)" id="f42" name="fac2against[]" /><label for="f42">Highly creative work (art, music, novels, films, plays, poetry, fiction)</label></li>
			<li><input type="checkbox" value="consumable work (workbook, test)" id="f43" name="fac2against[]" /><label for="f43">Consumable work (workbook, test)</label></li>
			</ul>
		</div> -->
</div>

<div id="factor3" class="factor">
	<h3>Data access policies</h3>
		<div class="pro">
		<p class="favor">Questions</p>
			<ul class="checklist">
			<li><input type="checkbox" value="small portion of work used" id="f51" name="fac3favor[]" /><label for="f51">Have you removed personal or sensitive information from your data to ensure privacy protection?</label></li>
			<li><input type="checkbox" value="portion used is not central or significant to entire work as a whole" id="f52" name="fac3favor[]" /><label for="f52">Have you established who owns the copyright of your data?</label></li>
			<li><input type="checkbox" value="amount taken is narrowly tailored to educational purpose such as criticism, comment, research, or subject being taught" id="f53" name="fac3favor[]" /><label for="f53">Do you have documentation on how institutional and personal credit should be acknowledged for your data?</label></li>
			<li><input type="checkbox" value="small portion of work used" id="f51" name="fac3favor[]" /><label for="f51">Are your data, records, and files labeled and logically organized?</label></li>
			<li><input type="checkbox" value="portion used is not central or significant to entire work as a whole" id="f52" name="fac3favor[]" /><label for="f52">Have you used consistent and easy to understand file names?</label></li>
			</ul>
		</div>
		
<!-- 		<div class="con">
		<p class="against">Weighs Against Fair Use</p>
			<ul class="checklist">
			<li><input type="checkbox" value="large portion or entire work used" id="f61" name="fac3against[]" /><label for="f61">Large portion or entire work used </label></li>
			<li><input type="checkbox" value="portion used is central or heart of work" id="f62" name="fac3against[]" /><label for="f62">Portion used is central or "heart of work"</label></li>
			<li><input type="checkbox" value="amount taken is more than necessary for criticism, comment, research, or subject being taught" id="f63" name="fac3against[]" /><label for="f63">Amount taken is more than necessary for criticism, comment, research, or subject being taught</label></li>
		</ul>
		</div> -->
</div>

<div id="factor4" class="factor">
	<h3>Data use and distribution</h3>
		<div class="pro">
		<p class="favor">Questions</p>
		<ul class="checklist">
			<li><input type="checkbox" value="no significant effect on market or potential market for copyrighted work" id="f71" name="fac4favor[]" /><label for="f71">How will your data be made available? </label></li>
			<li><input type="checkbox" value="use stimulates market for original work" id="f72" name="fac4favor[]" /><label for="f72">Do you plan to limit or restrict re-use or re-distribution of your data? If so, why and for how long?</label></li>
			<li><input type="checkbox" value="no similar product marketed by copyright holder" id="f73" name="fac4favor[]" /><label for="f73">Are you planning to enforce an embargo period during which your research data will not be available outside of your research team?</label></li>
			</ul>
		</div>
		
<!-- 		<div class="con">
		<p class="against">Weighs Against Fair Use</p>
		<ul class="checklist">
			<li><input type="checkbox" value="impairs market" id="f81" name="fac4against[]" /><label for="f81">Significantly impairs market or potential market for copyrighted work or derivative </label></li>
			<li><input type="checkbox" value="Licensing or permission reasonably available" id="f82" name="fac4against[]" /><label for="f82">Licensing or permission reasonably available</label></li>
			<li><input type="checkbox" value="numerous copies made or distributed" id="f83" name="fac4against[]" /><label for="f83">Numerous copies made or distributed</label></li>
			<li><input type="checkbox" value="repeated or long term use that demonstrably affects the market for the work" id="f84" name="fac4against[]" /><label for="f84">Repeated or long term use that demonstrably affects the market for the work</label></li>
			<li><input type="checkbox" value="transformative" id="f85" name="fac4against[]" /><label for="f85">Required classroom reading</label></li>
			<li><input type="checkbox" value="user does not own lawfully acquired or purchased copy or original work" id="f86" name="fac4against[]" /><label for="f86">User does not own lawfully acquired or purchased copy of original work</label></li>
			<li><input type="checkbox" value="unrestricted access on the web or other public forum" id="f87" name="fac4against[]" /><label for="f87">Unrestricted access on the web or other public forum</label></li>
			</ul>
		</div> -->
</div>

<div id="factor5" class="factor">
	<h3>Data preservation and archiving</h3>
		<div class="pro">
		<p class="favor">Questions</p>
		<ul class="checklist">
			<li><input type="checkbox" value="no significant effect on market or potential market for copyrighted work" id="f71" name="fac5favor[]" /><label for="f71">Have you identified a Digital Repository or other infrastructure that will make your research data accessible to view and download? </label></li>
			<li><input type="checkbox" value="no significant effect on market or potential market for copyrighted work" id="f71" name="fac5favor[]" /><label for="f71">Have you made arrangements for the long-term storage and preservation of your data (both physical and digital collection items)? </label></li>
			<li><input type="checkbox" value="no significant effect on market or potential market for copyrighted work" id="f71" name="fac5favor[]" /><label for="f71">Do you have data security plans in place to ensure that copies of your data are stored and backed up on a regular basis? </label></li>
			<li><input type="checkbox" value="no significant effect on market or potential market for copyrighted work" id="f71" name="fac5favor[]" /><label for="f71">If there are costs associated with depositing your data in a Digital Repository, or otherwise ensuring their long-term preservation, do you have funding to cover those costs? </label></li>
			<li><input type="checkbox" value="no significant effect on market or potential market for copyrighted work" id="f71" name="fac5favor[]" /><label for="f71">Are you using data formats and software that enable sharing and ensure long-term validity of data, such as non-proprietary software and software based on open standards? </label></li>
			<li><input type="checkbox" value="no significant effect on market or potential market for copyrighted work" id="f71" name="fac5favor[]" /><label for="f71">When converting from one format to another, have you checked that no data are lost or changed in the process? </label></li>
			</ul>
		</div>
		
<!-- 		<div class="con">
		<p class="against">Weighs Against Fair Use</p>
		<ul class="checklist">
			<li><input type="checkbox" value="impairs market" id="f81" name="fac4against[]" /><label for="f81">Significantly impairs market or potential market for copyrighted work or derivative </label></li>
			<li><input type="checkbox" value="Licensing or permission reasonably available" id="f82" name="fac4against[]" /><label for="f82">Licensing or permission reasonably available</label></li>
			<li><input type="checkbox" value="numerous copies made or distributed" id="f83" name="fac4against[]" /><label for="f83">Numerous copies made or distributed</label></li>
			<li><input type="checkbox" value="repeated or long term use that demonstrably affects the market for the work" id="f84" name="fac4against[]" /><label for="f84">Repeated or long term use that demonstrably affects the market for the work</label></li>
			<li><input type="checkbox" value="transformative" id="f85" name="fac4against[]" /><label for="f85">Required classroom reading</label></li>
			<li><input type="checkbox" value="user does not own lawfully acquired or purchased copy or original work" id="f86" name="fac4against[]" /><label for="f86">User does not own lawfully acquired or purchased copy of original work</label></li>
			<li><input type="checkbox" value="unrestricted access on the web or other public forum" id="f87" name="fac4against[]" /><label for="f87">Unrestricted access on the web or other public forum</label></li>
			</ul>
		</div> -->
</div>

<p class="submitwrap"><input name="submit" class="btn" type="submit" value="Submit Form" /></p>
<p><em>Checklist originally from <a href="https://lib.asu.edu/data/plan">Arizona State University</a>.  We Need to Get Permission.</em></p>

</form>
</div>

<?php include('bottom.php'); ?>