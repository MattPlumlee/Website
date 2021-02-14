<?php
session_start();
?>

<?php include 'header.php';?>

<p>I work and teach on the interface between data, technology and science.
My research covers experimental and computational methods for combining observations and simulation models for descriptive, predictive and prescriptive purposes in large-data environments.
 The major tools used are machine learning and statistical analysis, large-scale optimization and designed experimentation including sequential design.</p>

<h3>education</h3>

<p>Doctor of Philosophy, Industrial Engineering, Georgia Institute of Technology, 2015. <br>
  Master of Science, Statistics, Georgia Institute of Technology, 2011. <br>
  Bachelor of Science, Mechanical Engineering, Purdue University, 2010.</p>


<?php
$_GET['library']=1;
require_once('bibtexbrowserv2.php');
global $db;
$db = new BibDataBase();
$db->load('plumleebib.bib');
?>

<h3>research

<h4>select theory/methodology pubs </h4>
<ul class="list-group">
<?php
$query = array('highlightmethod'=>'1');
$entries=$db->multisearch($query);
uasort($entries, 'compare_bib_entries');

foreach ($entries as $bibentry) {
  echo "<li class=\"list-group-item\">".$bibentry->toHTML()."</li>";
}
?>
</ul>

<h4>select  application pubs </h4>
<ul class="list-group">
<?php
$query = array('highlightappl'=>'1');
$entries=$db->multisearch($query);
uasort($entries, 'compare_bib_entries');

foreach ($entries as $bibentry) {
  echo "<li class=\list-group-item\">".$bibentry->toHTML()."</li>";
}
?>
</ul>

<h3>teaching</h3>
<ul style="list-style-type:none;">
<li> IEMS 490, Principals of Uncertainty Quantification, Northwestern University:  Winter 2021 </li>
<li> IEMS 401, Applied Mathematical Statistics, Northwestern University:  Fall 2019, Fall 2018 </li>
<li>IEMS 303,  Statistics, Northwestern University: Winter 2021, Winter 2020, Fall 2019, Winter 2019, Fall 2018, Winter 2018, Fall 2017  </li>
<li>IOE 465, Design and Analysis of Experiments, University of Michigan: Winter 2017, Winter 2016  </li>
<li>IOE 591, Bayesian Data Analysis, University of Michigan: Fall 2016. </li>
<li>ISYE 3039, Methods for Quality Improvement, Georgia Institute of Technology: Fall 2014.  </li>
</ul>
<h3> funding </h3>
<ul style="list-style-type:none;">
<li> Frameworks: Bayesian Analysis of Nuclear Dynamics. National Science Foundation, OAC 2004601</li>
 &nbsp;&nbsp;  Senior Personnel (11 PI, co-PI and Senior Personnel),  07/2020-07/2025
<li> Inducing and Exploiting Grid Structures for Fast, Adaptive, and Accurate Estimation. National Science Foundation, DMS 1953111 </li>
 &nbsp;&nbsp; PI,  08/2020-08/2023
<li> Collaborative Research: Variational Inference Approach to Computer Model Calibration, Uncertainty Quantification, Scalability, and Robustness. National Science Foundation, DMS 1952897 </li>
 &nbsp;&nbsp; co-PI,  08/2020-08/2023
<li> EAGER/Collaborative Research: Exploring the Theoretical Framework of Engineering Knowledge Transfer in Cybermanufacturing Systems. National Science Foundation, CMMI 1744186 </li>
 &nbsp;&nbsp;  Local PI,  06/2017-06/2018
</ul>


<?php include 'footer.php';?>
