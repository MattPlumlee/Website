<?php
session_start();
?>

<?php include 'header.php';?>

<?php
$_GET['library']=1;
require_once('bibtexbrowserv2.php');
global $db;
$db = new BibDataBase();
$db->load('software.bib');
?>

<script>
    setSelectedPageNav();
</script>

<h3>software packages</h3>

These are notable software packages in various stages of deveolpment intended
for outside users of various levels.  All code for papers is submitted to the
journal whenever possible and retained by myself.  Please reach out if you would
like more information.
<ul class="list-group">
<?php
$query = array('software'=>'1');
$entries=$db->multisearch($query);
uasort($entries, 'compare_bib_entries');

foreach ($entries as $bibentry) {
  echo "\n<li class=\"list-group-item\">".$bibentry->toHTML()."</li>\n";
}
?>
</ul>



<?php include 'footer.php';?>
