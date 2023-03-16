<!DOCTYPE html>
<!-- Created By Codingby diya  -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Footer Section | Coding by diya</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  /* color: #d9d9d9; */
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
a{
    text-decoration:none;
}
.content1{
  position: relative;
  margin: 130px auto;
  text-align: center;
  padding: 0 20px;
}
.content1 .text{
  font-size: 2.5rem;
  font-weight: 600;
  color: #202020;
}
.content1 .p{
  font-size: 2.1875rem;
  font-weight: 600;
  /* color: #202020; */
}
footer{
  /* position: fixed; */
  bottom: 0px;
  width: 100%;
  background: #111;
}
.main-content{
  display: flex;
  color:white;
}
.main-content .box{
  flex-basis: 50%;
  padding: 10px 20px;
}
.box h2{
  font-size: 1.125rem;
  font-weight: 600;
  text-transform: uppercase;
}
.box .content{
  margin: 20px 0 0 0;
  position: relative;
}
.box .content:before{
  position: absolute;
  content: '';
  top: -10px;
  height: 2px;
  width: 100%;
  background: #1a1a1a;
}
.box .content:after{
  position: absolute;
  content: '';
  height: 2px;
  width: 15%;
  background: #f12020;
  top: -10px;
}
.left .content p{
  text-align: justify;
}
.left .content .social{
  margin: 20px 0 0 0;
}
.left .content .social a{
  padding: 0 2px;
}
.left .content .social a span{
  height: 40px;
  width: 40px;
  background: #1a1a1a;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  border-radius: 5px;
  transition: 0.3s;
}
.left .content .social a span:hover{
  background: #f12020;
}
.center .content .fas{
  font-size: 1.4375rem;
  background: #1a1a1a;
  height: 45px;
  width: 45px;
  line-height: 45px;
  text-align: center;
  border-radius: 50%;
  transition: 0.3s;
  cursor: pointer;
}
.center .content .fas:hover{
  background: #f12020;
}
.center .content .text{
  font-size: 1.0625rem;
  font-weight: 500;
  padding-left: 10px;
}
.center .content .phone{
  margin: 15px 0;
}
.right form .text{
  font-size: 1.0625rem;
  margin-bottom: 2px;
  color: #656565;
}
.right form .msg{
  margin-top: 10px;
}
.right form input, .right form .msgForm{
  width: 100%;
  font-size: 1.0625rem;
  background: #151515;
  padding-left: 10px;
  border: 1px solid #222222;
}
.right form input:focus,
.right form .msgForm:focus{
  outline-color: #3498db;
}
.right form input{
  height: 35px;
}
.right form .btn{
  margin-top: 10px;
}
.right form .btn button{
  height: 40px;
  width: 100%;
  border: none;
  outline: none;
  background: #f12020;
  font-size: 1.0625rem;
  font-weight: 500;
  cursor: pointer;
  transition: .3s;
}
.right form .btn button:hover{
  background: #000;
}
.bottom center{
  padding: 5px;
  font-size: 0.9375rem;
  background: #151515;
}
.bottom center span{
  color: #656565;
}
.bottom center a{
  color: #f12020;
  text-decoration: none;
}
.bottom center a:hover{
  text-decoration: underline;
}
@media screen and (max-width: 900px) {
  footer{
    position: relative;
    bottom: 0px;
  }
  .main-content{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .main-content .box{
    margin: 5px 0;
  }
}
.main-content h2, p{
  /* color:white; */
}
        </style>
  </head>
  <body>
</div>
</div>
</div>
    
<footer>
      <div class="main-content">
        <div class="left box">
          <h2>
About us</h2>
<div class="content">
<p>     Many services have been provided to you in this website, under which it has been provided usefull links, educational links, entertainment links.         </p>
<p>     We are engaged in the work of making this webstite more better and convenient.         </p>
<p>     If there is any other complaint from our website, you can <a href="contact" type="button" class="btn btn-outline-primary">contact</a> us, and we will try to fix it as soon as possible.

Thanks.         </p><div class="social">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
</div>
</div>
<div class="center box">
          <h2>
Links</h2>
<div class="content">
            <div class="place">
              <!-- <span class="fas fa-map-marker-alt"></span> -->
              <span class="text"><a href="usefulllinks ">usefull links</a></span>
            </div>
<div class="phone">
              <!-- <span class="fas fa-phone-alt"></span> -->
              <span class="text"><a href="amazinglinks ">amazing links</a></span>
            </div>
<div class="email">
              <!-- <span class="fas fa-envelope"></span> -->
              <span class="text"><a href="educationallink ">educational links</a></span>
            </div>
</div>
</div>
<div class="center box">
          <h2>
Questions</h2>
<div class="content">
            <div class="place">
              <!-- <span class="fas fa-map-marker-alt"></span> -->
              <span class="text"><a href="englishgrammargk ">english grammar mcq</a></span>
            </div>
<div class="phone">
              <!-- <span class="fas fa-phone-alt"></span> -->
              <span class="text"><a href="englishgrammarquiz ">english grammar quiz</a></span>
            </div>
<!-- <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text"><a href="educationallink ">educational links</a></span>
            </div> -->
</div>
<div class="bottom">
<center>
          <span class="credit">developed By <a href="#">vk, rk & kk</a> | </span>
          <span class="far fa-copyright"></span> <p>2023 All rights reserved.</p>
        </center>
</div>
</footer>

<script>

// $('input[type=checkbox]').on('change',function(){
// if($(this).is(':checked')){
// var co = $(this).val();

// document.body.style.backgroundColor = co;
// }
// if(co == 'grey'){
  
//   //$("h1, h2, p").addClass("blue");
//   $("p,h1,h2,h3,h4,h5").css("color", "white");
// }
// else{
  //   $("p,h1,h2,h3,h4,h5").css("color", "black");
  //   document.body.style.backgroundColor = 'white';
  // }
  
  
  
  // });
  
  
    // document.body.style.backgroundColor = 'gray';
    // $("p,h1,h2,h3,h4,h5").css("color", "black");



</script>