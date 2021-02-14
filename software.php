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

<h4>software packages</h4>


<ul>
<?php
$query = array('software'=>'1');
$entries=$db->multisearch($query);
uasort($entries, 'compare_bib_entries');

foreach ($entries as $bibentry) {
  echo "<li>".$bibentry->toHTML()."</li>";
}
?>
</ul>



<?php include 'footer.php';?>
