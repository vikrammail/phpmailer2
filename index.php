<?php
include 'booststrap.php';
include 'conn.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>web-hub</title>
  <meta name="description" content="here are most usefull links,educational links,amazing links ,quiz and other many services provided">
  <meta charset="utf-8">
  <meta name="keywords" content="web-hub,web,usefull links,amazing links,educational links,quiz ,questionns">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "technicalvkr",
  "url": "",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://technicalvkr.live{search_term_string}usefull links",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1559084139599025"
     crossorigin="anonymous"></script>
<style>
.he{
  color:black;
}
  </style>
</head>
<body>



<h1 id="button">welcome</h1>
<br>
<h3 class="he">here are most useful website in the internet</h3>

<p>The internet has become an essential part of our daily lives, offering a wealth of information and resources at our fingertips. There are millions of websites available online, each serving a unique purpose, but not all of them are created equal. In this article, we will explore some of the most useful websites on the internet, covering everything from education to entertainment.</p>


    <!-- <div class="row">
        <div class="col-sm-4">
    <div class="col-sm-4">
   
        </div><iframe width="" height="315" src="https://www.youtube.com/embed/UTtRCu56v7Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-sm-4">
        <iframe width="" height="315" src="https://www.youtube.com/embed/ZYKGWgensd8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-sm-4">
        <iframe width="" height="315" src="https://www.youtube.com/embed/sy7ICC9F7A8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </div> -->
  <?php
include 'conn.php';

$sql = 'SELECT * FROM links ORDER BY index1 DESC limit 10';


$data=mysqli_query($con,$sql);
?>
<?php while($result = mysqli_fetch_assoc($data)  ){ ?>
  <div class="col-sm-10 mb-3 mt-3">
  
  <a class="nav-link" href="<?php echo $result['link'];  ?>"><h4><?php echo $result['links_name'];  ?></h4></a>
      <p class="he"><?php echo $result['discription'];  ?></p>
      <img src="<?php echo $result['image'];  ?>" class="img-thumbnail" alt="Cinque Terre"><br><br><br><br>
  </div>
  <?php } ?>
  <script >
            let title = document.getElementById("button");
            // title.innerHTML = 'dfd';
            let name = "most usefull links";
            let index = 1;

            const typwriter = () => {
                let newtitle = name.slice(0,index);
                title.innerText = newtitle;

                index > name.length ? index = 1 : index++;

                setTimeout(typwriter, 200);
            }
            typwriter();
        </script>

</body>
</html>
<?php  include 'example.php'; ?>