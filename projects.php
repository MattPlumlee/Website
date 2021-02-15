<?php
session_start();
?>

<?php include 'header.php';?>


<script type="text/javascript">
$(document).ready(function(){
   $(".active").removeClass("active");
   $("#projects").addClass("active");
});
</script>


<h3>projects</h3>

This a non-exhausitive, often intertwined collection of around 3 projects
of current interest.   Generally I am excited by the interface of computational
models and statistical inference such as emulation, calibration and uncertainty
quantification.

<ul class="list-group">
<li class="list-group-item">
<div class="flex-container">
<div class="float-child">
 <a href="https://surmise.readthedocs.io/en/latest/">
<img class="img-responsive" src="https://avatars.githubusercontent.com/u/77858356?s=200&v=4"  max-width="200px" width="100px"> </a>
</div>
<div class="float-child">
Are you sick of redesigning interfaces every time you write code for a new emulator?  The surmise seeks to solve
that problem by automating the interface between surrogates, or emulators, and calibration, uncetainity quanitficaiton,
and hopefully more to come.  The goal of this project is a one-stop-shop for
researchers interested in using emulation and calibration tools and researchers
who design emulation and calibration tools.
</div>
</div>
</li>
<li class="list-group-item">
<img class="img-responsive" src="images/indexsetillus.png"  max-width="400px" width="300px"> <br>
Scaling up Gaussian processes have typically meant approximations.  Not anymore!
This project is about scaling Gaussian process inference into very high demensions
using grid-based structures.  These are much more flexible compared to simple
Cartesian products.
</li>
<li class="list-group-item">
<div class="flex-container">
<div class="float-child">
<a href="https://bandframework.github.io/">
<img class="img-responsive" src="https://bandframework.github.io/images/logopic/BAND_logo_v2.png"  max-width="400px" width="300px"> </a>
</div>
<div class="float-child">
The Bayesian Analysis of Nuclear Dynamics (BAND) Framework will use advanced statistical methods to produce forecasts
for as-yet-unexplored situations that combine nuclear-physics models in an optimal way.  This is a large collaboration that is
spread across 4 institutions.
</div>
</li>
<ul>






<?php include 'footer.php';?>
