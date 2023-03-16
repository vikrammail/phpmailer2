<!DOCTYPE html>
<html>

    <title>practice</title>
    <head>
        
    <style>.welcome{
        color: rgb(12, 159, 175);
        text-align: center;
        
    }
    body{
        background-color: bisque;
        color: hsl(240, 82%, 39%);
        background-image: url(https://lh3.googleusercontent.com/x71-0PGF6gcDn3iwIVuTZb_mdyGdH5grPwHvwBglnmAD2618FEoQ03ZQ_738sX862mRbIilB0bxwf0SjHeKVx84mR6aOCB_2teJYujgUIgKPvwS1O4ldMuDoh4DczU9XuBFHP2ILhzbx_vf_Fr_6SaHHk3Q7lkHlSbWY9HIgrhmM8LZuYzouNIn0OAtokg66ph_elPZ3Q8ETveWUVh4lSgrUJ0Puq43_v28mXYKkWhOszHSK3NqtIOzRqV4rgFAxtnJZ2s1Wg_U4pFfw2mQ-3Tp7z_PSGIHS28OXMTPDRxzxzUN6OWK6psF-Zrx7EbgjC1x5KYbp2lRW_wPSmpUBVNFbIRuQZRwpmSq8-xwp_PnrgmKSiiBpM3i7ej1M4JBt3v_OEMkSQ5HUUrwUgvTPYvMULTElUpOytfO5hH6CaU-FyHANuBBzmlL1PxFtepZPuDUUECs28aUSYhevvyqKw6QaxgigYcASxL0mjodM5GiDG4kwF-XueOP9T743kXh8Glpm9OZLUnx44KbS1TUyZ0zGITXppCEuvIWN2if3U19DppT8rWRA7kzQEkNifhMwERheKztJfGkksN7mXQuFN36O2YlmNJ32LF4xSNS5oRKI_nQ8sUqvARAThJ-FlwMsb-WERoYtzscvEuNwea72f070jLynPQlYRS_3XmUfQJpNKPscrE5J3ChQMlyJsJ7sZ7PKs8djkfJT1u5Ti4nYi9ZXQymYLg4RMc-vHXaIaVUiCyYcwnDEXY7iJUVrWA=w1399-h933-no?authuser=0);    
    
    }
    form{
        
    
    
    
    margin-left: 20%;
    box-sizing: 0px;
    }
    fieldset{
        margin-left: 30%;
        padding-left: 30%;
        color: rgb(42, 44, 165);
        
        box-shadow: 20px 20px 50px rgb(136, 122, 122);
        
    }
    span{
        color: red;
    
    }
    .inputgroup span i{
    color: blue;
    }
    h2{
text-align: center;
background-color: #f7dddd;
text-shadow: 3px 2px 2px  rgb(95, 26, 26);

    
}
h2:hover{
    text-shadow: 3px 2px 2px  rgb(170, 241, 46);

}    
    </style>
    
    </head>
    <body onload="setTimeout(closefunction(), 5000);">
    
    <h1 class="welcome">welcome</h1>
    
    
    <!-- <fieldset><legend>insert imformation</legend>-->
    
    
    <div  id="foo"><section><fieldset class="foto"><legend><i>insert imformation</legend></i>
    <form  name="googlesheet" method="post" autocomplete="on" action="http://surl.li/cbckc">
    
    <div class="inputgroup"><label>NAME: </label> <input type="text" placeholder="enter your full name" id="contact-name" name="name"  onkeyup="validatename()"  >
    <span id="name-error"></span>
    
    </div><br>
    <div class="inputgroup"><label>EMAIL: </label> <input type="email" placeholder="enter your email address" name="emailaddress" id="emailaddress" onkeyup="mysecoundfunction()">
        <span id="email-error"></span>   
        
    </div><br>
    
    <div class="inputgroup"><label>CONFIRM EMAIL: </label> <input type="email" placeholder="confirm email address" name="confirmemail" id="confirm email">
        <span id="confirmemail-error"></span> 
        
    </div><br>
    <div class="inputgroup"><label>MOB NO:</label>     <input type="tel" placeholder="enter your mob number" name="mobilenumber" id="contact-phone"  onkeyup="validatephone()" >
        <span id="contact-error"></span><br>
       your favorite color: <input type="color" name="color"> 
        
    </div><br>
    <div class="inputgroupp"><input type="submit" name="submit" id="submit" onclick=" validateform()"></div>
    <span id="button"></span>
    
    
    
    
    
    
    
    
    </form>
    </section>
    </div>
    
    </fieldset>






    <footer class="footer">
      <i> <b> <h2 class="vkr">develop by :</b> VKR</h2></i>

<p id="secounds-counter"></p>
<button  onclick="setTimeout(myfunction1(), 20000);">button</button>




    </footer>
    
    
    <script>
        function mysecoundfunction(){
            document.forms[0].confirmemail.value = document.forms[0].emailaddress.value;
        }
        function closefunction(){
            alert('page is ready');
          window.close();
        }
        
    
        
    
    
    
    var nameerror = document.getElementById('name-error');
    function validatename(){
        var name = document.getElementById('contact-name').value;
    
        if(name.length == 0){
            nameerror.innerHTML = 'name is required';
            return false;
        }
            if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
                nameerror.innerHTML = 'write full name';
                return false; 
            }
    nameerror.innerHTML = '';
    return true;
        
    }
    var contacterror = document.getElementById('contact-error');
    function validatephone(){
        var phone = document.getElementById('contact-phone').value;
        
        if(phone.length == 10){
            contacterror.innerHTML = ''
        }
        if(phone.length !== 10){
            contacterror.innerHTML = 'error';
            return false;
        }
        if(phone.length == 0){
            contacterror.innerHTML = 'insert phone no';
            return false;
        }
        if(!phone.match(/^[0-9]{10}$/)){
            contacterror.innerHTML = 'only can insert digit';
            return false;
        }
        
    }
    function validateform(){
        if(validatename() || validatephone()){
            
           // button.innerHTML = '';
            
     
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzyXg9NuIZe-TMCq4N_G94jQIc775ILL77WfFfCUZ8t4kqdapFbMPAUgpmoveLM0xrv/exec'
                const form = document.forms['googlesheet']
              
                form.addEventListener('submit', e => {
                  e.preventDefault()
                  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                    .then(response => alert("successful"))
                    .catch(error => console.error('Error!', error.message))
                })
            }
    }
    
    
              // Function to generate OTP
function generateOTP() {
          
          // Declare a digits variable 
          // which stores all digits
          var digits = '0123456789';
          let OTP = '';
          for (let i = 0; i < 4; i++ ) {
              OTP += digits[Math.floor(Math.random() * 10)];
          }
          return OTP;
      }
        
      document.write("OTP of 4 digits: <br>")
      document.write( generateOTP() );

     var clo = document.write('clock');
    

     function myfunction1(){
        window.close();
       // alert('hkj')
     }

    
    
    </script>
    <!--<script src="techjs.js"></script>-->
    
    </body>
    </html>