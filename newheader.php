<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Vincent</title>

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,700" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic"
    rel="stylesheet" />

  <!-- custom CSS -->
  <link rel="stylesheet" href="./assets/style.css">

  <style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  font-family: 'PT Sans Narrow', sans-serif;
  color: #dce4e8;
  font-size: 14px;
}

header {
  background: #121618;
  padding: 50px 90px;
}

.header-top {
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 50px;
}

.schedule {
  display: flex;
  justify-content: center;
  align-items: center;
}

.schedule img {
  max-width: 25px;
  margin-right: 25px;
}

.schedule-right .phone,
.cart-left .amount {
  font-size: 15px;
  font-weight: bold;
  letter-spacing: 3px;
  margin-bottom: 10px;
}

.schedule-right .time,
.cart-left .items {
  color: #dce4e8;
  letter-spacing: 2px;
  opacity: 0.5;
  transition: 0.25s;
}

.logo img {
  max-width: 180px;
}

.cart {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row-reverse;
  text-align: right;
  cursor: pointer;
  transition: 0.25s;
}

.cart img {
  max-width: 35px;
  margin-left: 25px;
  transition: 0.10s;
}

.cart::after {
  content: '0';
  position: absolute;
  top: 0;
  right: -5px;
  width: 20px;
  height: 20px;
  background: #ffc851;
  color: #121618;
  border-radius: 50%;
  font-size: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.cart:hover .items {
  color: #ffc851;
  opacity: 1;
}

.cart:active img {
  transform: scale(0.9);
}

.nav {
  display: flex;
  justify-content: center;
  align-items: center;
}

.nav li {
  list-style: none;
  margin: 0 20px;
}

.nav li a {
  position: relative;
  display: inline-block;
  text-decoration: none;
  color: #dce4e8;
  letter-spacing: 3px;
  transition: 0.25s;
}

.nav li a:hover {
  color: red;
}

.nav li a.active::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 10px;
  height: 1px;
  background: #dce4e8;
}

.menu-btn {
  position: absolute;
  top: 45px;
  right: 20px;
  cursor: pointer;
  display: none;
}

.menu-btn.active span:nth-child(1) {
  transform: rotate(45deg) translateY(5px);
}

.menu-btn.active span:nth-child(2) {
  display: none;
}

.menu-btn.active span:nth-child(3) {
  transform: rotate(-45deg) translateY(-5px);
}

.menu-btn span {
  display: block;
  width: 20px;
  height: 2px;
  background: #dce4e8;
  margin: 5px;
}

.hero {
  min-height: 100vh;
  background: url(./images/slide_1.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 90px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-direction: row-reverse;
}

.imgBx img {
  max-width: 600px;
  filter: drop-shadow(5px 15px 20px #000000);
}

.contentBx {
  max-width: 700px;
  margin-right: 50px;
}

.contentBx h1 {
  font-size: 60px;
  letter-spacing: 10px;
  font-weight: 100;
}

.contentBx h2 {
  font-size: 30px;
  font-weight: 100;
  letter-spacing: 5px;
  border-bottom: 3px solid #dce4e8;
  padding-bottom: 10px;
  margin-bottom: 40px;
}

.contentBx p {
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: 100;
  letter-spacing: 3px;
  margin-bottom: 20px;
}

.contentBx .btn {
  padding: 10px 20px;
  background: #ffc851;
  display: inline-block;
  color: #121618;
  letter-spacing: 2px;
  border: 2px solid #ffc851;
  cursor: pointer;
  transition: 0.25s;
}

.contentBx .btn:hover {
  background: transparent;
  color: #ffc851;
}

@media screen and (max-width: 1200px) {
  header {
    padding: 50px 50px;
  }
  .nav li {
    margin: 0 10px;
  }
  .imgBx img {
    max-width: 400px;
  }
}

@media screen and (max-width: 1024px) {

  header {
    padding: 30px 50px;
  }

  .header-top {
    justify-content: center;
  }

  .schedule,
  .cart {
    /* display: none; */
  }

  .hero {
    flex-direction: column;
    justify-content: center;
  }

  .imgBx {
    margin-bottom: 30px;
  }

  .contentBx {
    margin-right: 0;
    text-align: center;
  }
}

@media screen and (max-width: 786px) {
  header {
    padding: 60px 20px;
    padding-bottom: 20px;
  }

  .nav {
    display: none;
  }

  .nav.active {
    margin-top: 60px;
    padding-top: 10px;
    border-top: 1px solid #ffffff50;
    display: block;
  }
  .nav li {
    margin: 15px 0;
  }
  .nav li a.active::after {
    display: none;
  }
  .menu-btn {
    display: block;
  }
  .hero {
    padding: 90px 20px;
  }
}

@media screen and (max-width: 550px) {
  .imgBx img {
    max-width: 300px;
  }
  .contentBx h1 {
    font-size: 40px;
  }
  .contentBx h2 {
    font-size: 25px;
  }
}
      </style>
      </head>

<body>

  <header>
    <div class="header-top">
      <div class="schedule">
        <!-- <img src="./assets/images/icon_phone.png" alt=""> -->
        <div class="schedule-right">
          <div class="phone"><h2>web-hub</h2></div>
          <!-- <div class="time">8:00 am – 11:30 pm</div> -->
        </div>
      </div>

      <!-- <div class="logo"><img src="./assets/images/logo.png" alt=""></div> -->

      <!-- <div class="cart">
        <img src="/assets/images/icon_cart.png" alt="">
        <div class="cart-left">
          <div class="amount">$0.00</div>
          <div class="items">0 items - View Cart</div>
        </div>
      </div> -->

      <div class="menu-btn active">
        <span></span>
        <span></span>
        <span></span>
      </div>

    </div>

    <ul class="nav active">
      <li><a class="nav-link" href="about ">about us</a></li>
      <li><a class="nav-link" href="privacypolicy ">privacy policy</a></li>
      <li><a class="nav-link" href="items ">items</a></li>
      <li><a class="nav-link" href="alllinks ">all links</a></li>
      <li><a class="nav-link" href="curentaffairs ">letest current affairs</a></li>
      
    </ul>
  </header>

  <!-- <main>

    <div class="hero">
      <div class="imgBx">
        <img src="./assets/images/pizza_2.png" alt="">
      </div>

      <div class="contentBx">
        <h1>VINCENT PIZZA.</h1>
        <h2>MAKING PEOPLE HAPPY</h2>
        <p>Italian Pizza With Cherry Tomatoes and Green Basil</p>
        <div class="btn">VIEW MENU</div>
      </div>
    </div>

  </main> -->


  <script>

    const menuBtn = document.querySelector('.menu-btn');
    const nav = document.querySelector('.nav');

    menuBtn.addEventListener('click', function () {
      this.classList.toggle('active');
      nav.classList.toggle('active');
    });

  </script>

</body>

</html>