<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Matthew Plumlee</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"  href="stylesheets/bibtexbrowser.css">
<link rel="stylesheet" type="text/css"  href="stylesheets/app.css">
<link rel="canonical" href="/">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>


<link rel="icon" type="image/png" href="http://users.iems.northwestern.edu/~mplumlee/myicon.png" />
<body>

<div class="container-sm"></div>

<div class="container-lg mt-3">
  <div class="row"><br>
    <div class="col-sm">
      <img class="img-responsive" src="images/matthew_plumlee.jpg"  max-width="400px" width="300px">
    </div>

     <div class="col-sm">
        <h3>Matthew Plumlee</h3>
        <p><b>Assistant Professor </b><br>
        <a href="https://www.mccormick.northwestern.edu/industrial/"> Industrial Engineering and Management Sciences </a> <br>
          Northwestern University<br>
          Member, <a href="https://www.naise.northwestern.edu"> NAISE </a> <br>

          <script type="text/javascript" language="javascript">
          <!--
          // Email obfuscator script 2.1 by Tim Williams, University of Arizona
          // Random encryption key feature coded by Andrew Moulden
          // This code is freeware provided these four comment lines remain intact
          // A wizard to generate this code is at http://www.jottings.com/obfuscator/
          { coded = "Y68FY8QQ@acHkuBQDkQHa.Q0F"
            key = "kOQZ0CTAhsIG9pNn7R8fqirzo3LwgKVJMuDmXt6ead5vyx4HbcEjB2WlPUFSY1"
            shift=coded.length
            link=""
            for (i=0; i<coded.length; i++) {
              if (key.indexOf(coded.charAt(i))==-1) {
                ltr = coded.charAt(i)
                link += (ltr)
              }
              else {
                ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
                link += (key.charAt(ltr))
              }
            }
          document.write("<a href='mailto:"+link+"'>mplumlee at northwestern dot edu</a>")
          }
          //-->
          </script><noscript>Sorry, you need Javascript on to email me.</noscript>
    </div>
</div>


<nav class="navbar navbar-expand-sm bg-transparent justify-content-center navbar-light">
  <button class="navbar-toggler navbar-light float-sm-left" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon" ></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" data-tab="#home">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="papers.php" data-tab="#papers">papers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="software.php" data-tab="#software">software</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="projects.php" data-tab="#projects">projects</a>
      </li>
    </ul>
  </div>
</nav>

<script id="add-active-to-current-page-nav-link" type="text/javascript">
    function setSelectedPageNav() {
        $("nav ul li").removeClass("active");
        var pathName = document.location.href;
        var getLastItem = pathName.substring(pathName.lastIndexOf('/') + 1)
        if ($("nav ul li a") != null) {
            var currentLink = $("nav ul li a[href='" + getLastItem + "']");
            currentLink.addClass("active");
        }
        if (getLastItem === "") {
            var currentLink = $("nav ul li a[href='index.php']");
            currentLink.addClass("active");
        }
    }
</script>
