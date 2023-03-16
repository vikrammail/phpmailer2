<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Responsive Header</title>
    <style>

0*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
nav {
    background: black;
    width: 100%;
}

label.logo {
    padding: 0px 25px;
    font-size: 30px;
    line-height: 70px;
    color: #fff;
}

nav ul {
    float: right;
    list-style: none;
    padding: 0px 10px 0px 0px;
}

nav ul li {
    display: inline-block;
    padding: 31px 14px;
}

nav ul li a {
    padding: 10px 25px;
    text-decoration: none;
    color: #fff;
    transition: all 0.3s;
  }
  
  nav ul li a:hover{
    /* background: rgb(93, 133, 252); */
    background-color: #ddd;
    color:red;
    /* border-style: solid; */
}

label.checkbtn {
    font-size: 22px;
    color: #fff;
    cursor: pointer;
    float: right;
    margin-right: 65px;
    line-height: 70px;
    transition: all 0.5s;
    display: none;
}

input#check {
    display: none;
}


@media screen and (max-width: 1020px){
    nav{
        /* min-height: 100vh; */
        width: 100%;
    }
    nav ul{
        background: black;
        width: 100%;
        min-height: 100vh !important;
        padding: 0;
        position: fixed;
        left: -100%;
        transition: all 0.5s;
    }

    nav ul li{
        display: block;
        width: 100%;
        margin: auto;
        text-align: center;
    }
    nav ul li a {
        padding: 10px 10px;
    }
    label.checkbtn{
        display: block;
    }
    input#check:checked ~ ul{
        left: 0;
    }
    label.logo {
    
    font-size: 20px;
    line-height: 70px;
    color: #fff;
}
}
      </style>
</head>
<body>
    <nav header="nav">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
       <label for="" class="logo">web-hub</label>
       <ul>
       <li><a class="navbar-brand" href="index "><i class="fa-solid fa-house"></i></a></li>
      <li><a class="nav-link" href="about ">about us</a></li>
      <li><a class="nav-link" href="privacypolicy ">privacy policy</a></li>
      <li><a class="nav-link" href="items ">items</a></li>
      <li><a class="nav-link" href="alllinks ">all links</a></li>
      <!-- <li><a class="nav-link" href="curentaffairs ">letest current affairs</a></li> -->
    </ul>
    </nav>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat laudantium accusantium amet unde nisi, eaque nam? Incidunt dolorem odio voluptas repellendus, libero perspiciatis. Nulla esse reprehenderit sit accusantium dolores quisquam.</p>
    </section>
</body>
</html>