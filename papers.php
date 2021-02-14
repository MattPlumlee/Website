<?php
session_start();
?>

<?php include 'header.php';?>

<?php
$_GET['library']=1;
require_once('bibtexbrowserv2.php');
global $db;
$db = new BibDataBase();
$db->load('plumleebib.bib');
?>

<h3>papers   <a href="http://scholar.google.com/citations?hl=en&user=sSQeiUwAAAAJ" >[google scholar page] </a>  </h3>

<h4>List of publications</h4>

There is a chance of odd entries as this is automatically generated, let me know if there are any issues figuring out how to access a paper.

<ul>
<?php
$query = array('year'=>'.*');
$entries=$db->multisearch($query);
uasort($entries, 'compare_bib_entries');

foreach ($entries as $bibentry) {
  echo "<li>".$bibentry->toHTML()."</li>";
}
?>
</ul>



<?php include 'footer.php';?>
