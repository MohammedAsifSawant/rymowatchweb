<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    echo "
<!DOCTYPE html>
<html lang='en'>
<head>
<head>
  <meta charset='UTF-8' />
  <meta http-equiv='X-UA-Compatible' content='IE=edge' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <title>Buy</title>

    <!-- custom css file link  -->
    <!-- <link rel='stylesheet' href='paying2.css'> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; 
  padding:0;
  box-sizing: border-box;
  outline: none; 
  border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  display : flex;
  flex-direction : row;
  /* background: linear-gradient(90deg, #2ecc71 60%, #27ae60 40.1%); */
}

.details{
  background-color: #ffffff;
    width: 350px;
    height: 705px;
    margin: -1% 0px 0px -250px;
    margin-left: 0px;
    margin-right: 30px;
}




.frame{
  background-color: #ffffff;
  margin: 25px;
  height: 320px;
}


.container form{
  padding:20px;
  width:700px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #fa0000;
  color:#ffffff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background: #c8c7fb;
  color:#000000;
}

h5{
    text-align: center;

}

h4{
    text-align: center;
}

.btn{
    color:  rgb(66, 66, 255);;
}



    </style>

</head>
<body>
    <!-- Navbar -->

  

<div class='container'>
    <div class='details'>
        <div class='frame text-center col-lg-3 col-md-4 col-12'>
            <h3>Your Choice</h3>
";    
           if(isset($_POST['a1']))
           {
            $name="Sport Watch";
            $price="₹2230";
            echo "
                  <img class='img-fluid mb-3 ' src='images/featured/1.jpg'>
                  <h5 class='p-name'>Sport Watch </h5>
                  <h4 class='p-price'>₹2230</h4>
            ";
           }
           elseif(isset($_POST['a2']))
           {
            $name="Formal Wear";
            $price="₹3499";
        
            echo "
                  <img class='img-fluid mb-3' src='images/featured/2.jpg'>
                  <h5 class='p-name'>Formal Wear </h5>
                  <h4 class='p-price'>₹3499</h4>
            ";
           }
           elseif(isset($_POST['a3']))
           {
            $name="Smart Watch";
            $price="₹4500";
        
             echo "
                  <img class='img-fluid mb-3 ' src='images/featured/3.jpg'>
                  <h5 class='p-name'>Smart Watch </h5>
                  <h4 class='p-price'>₹4500</h4>
            ";
           }
           elseif(isset($_POST['a4']))
           {
            $name="Curren";
            $price="₹1500";
        
            echo "
                  <img class='img-fluid mb-3 ' src='images/featured/4.jpg'>
                  <h5 class='p-name'>Curren </h5>
                  <h4 class='p-price'>₹1500</h4>
            ";
        
           }
        
            // b
        
            elseif(isset($_POST['b1']))
            {
            $name="Perfomance Gear ";
            $price="₹4899";
        
            echo "
            <img class='img-fluid mb-3' src='images/wwatch/1.jpg'>
                  <h5 class='p-name'>Perfomance Gear </h5>
                  <h4 class='p-price'>₹4899</h4>
            ";
        
            }
            elseif(isset($_POST['b2']))
            {
            $name="Gentle Wear ";
            $price="₹3499";
        
            echo "
            <img class='img-fluid mb-3' src='images/wwatch/2.jpg'>
            <h5 class='p-name'>Gentle Wear </h5>
            <h4 class='p-price'>₹3499</h4>
        ";
        
            }
            elseif(isset($_POST['b3']))
            {
            $name="Aura";
            $price="₹2999";
        
            echo "
            <img class='img-fluid mb-3' src='images/wwatch/3.jpg'>
            <h5 class='p-name'>Aura</h5>
            <h4 class='p-price'>₹2999</h4>
        ";  
            }
            elseif(isset($_POST['b4']))
            {
            $name="Rolex";
            $price="₹45000";
        
            echo "
            <img class='img-fluid mb-3' src='images/wwatch/4.jpg'>
            <h5 class='p-name'>Rolex </h5>
            <h4 class='p-price'>₹45000</h4>
        ";
            }
        
            // c
        
            elseif(isset($_POST['c1']))
            {
            $name="MTG-B3000";
            $price="₹8990";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/gshock/1.jpg'>
            <h5 class='p-name'>MTG-B3000 </h5>
            <h4 class='p-price'>₹8990</h4>
        ";
            }
            elseif(isset($_POST['c2']))
            {
            $name="MTG-B3000";
            $price="₹11000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/gshock/2.jpg'>
            <h5 class='p-name'>MTG-B3000 </h5>
            <h4 class='p-price'>₹11000</h4>
        ";
            }
            elseif(isset($_POST['c3']))
            {
            $name="GA-2100SRS";
            $price="₹7899";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/gshock/3.jpg'>
            <h5 class='p-name'>GA-2100SRS</h5>
            <h4 class='p-price'>₹7899</h4>
        ";
        
            }
            elseif(isset($_POST['c4']))
            {
            $name="GA-700BNR";
            $price="₹14999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/gshock/4.jpg'>
            <h5 class='p-name'>GA-700BNR Wear </h5>
            <h4 class='p-price'>₹14999</h4>
        ";
        
            }
        
            //d
        
            elseif(isset($_POST['d1']))
            {
            $name="Rolex";
            $price="₹39999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/premium/1.jpg'>
            <h5 class='p-name'>Rolex </h5>
            <h4 class='p-price'>₹39999</h4>
        ";
            }
        
            elseif(isset($_POST['d2']))
            {
            $name="Rado";
            $price="₹28999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/premium/2.jpg'>
            <h5 class='p-name'>Rado</h5>
            <h4 class='p-price'>₹28999</h4>
        ";
            }
            elseif(isset($_POST['d3']))
            {
            $name="TAG Heuer";
            $price="₹49999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/premium/3.jpg'>
            <h5 class='p-name'>TAG Heuer</h5>
            <h4 class='p-price'>₹49999</h4>
        ";
            }
            elseif(isset($_POST['d4']))
            {
            $name="Patek Philippe";
            $price="₹25000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/premium/4.jpg'>
            <h5 class='p-name'>Patek Philippe </h5>
            <h4 class='p-price'>₹25000</h4>
        ";
            }
        
            //e
        
            elseif(isset($_POST['e1']))
            {
            $name="Deepsea Challenge";
            $price="₹69999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/rolex/1.jpg'>
            <h5 class='p-name'>Deepsea Challenge </h5>
            <h4 class='p-price'>₹69999</h4>
        ";
            }
            elseif(isset($_POST['e2']))
            {
            $name="Sea-Dweller";
            $price="₹78999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/rolex/2.jpg'>
            <h5 class='p-name'>Sea-Dwelle</h5>
            <h4 class='p-price'>₹78999</h4>
        ";
            }
            elseif(isset($_POST['e3']))
            {
            $name="Air-King ";
            $price="₹50000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/rolex/3.jpg'>
            <h5 class='p-name'>Air-King </h5>
            <h4 class='p-price'>₹50000</h4>
        ";
            }
            elseif(isset($_POST['e4']))
            {
            $name="night jewl";
            $price="₹100000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/rolex/4.jpg'>
            <h5 class='p-name'>night jewl </h5>
            <h4 class='p-price'>₹100000</h4>
        ";
            }
        
        
            // f 
        
            elseif(isset($_POST['f1']))
            {
            $name="Centrix";
            $price="₹44999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/rado/1.jpg'>
            <h5 class='p-name'>Centrix </h5>
            <h4 class='p-price'>₹44999</h4>
        ";
            }
            elseif(isset($_POST['f2']))
            {
            $name="High-Tech Ceramic Limited Edition ";
            $price="₹33999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/rado/2.jpg'>
            <h5 class='p-name'>High-Tech Ceramic Limited Edition </h5>
            <h4 class='p-price'>₹33999</h4>
        ";
            }
            elseif(isset($_POST['f3']))
            {
            $name="DiaStar Original";
            $price="₹22399";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/rado/3.jpg'>
            <h5 class='p-name'>DiaStar Original</h5>
            <h4 class='p-price'>₹22399</h4>
        ";
            }
            elseif(isset($_POST['f4']))
            {
            $name="True Square";
            $price="₹45000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/rado/4.jpg'>
            <h5 class='p-name'>True Square </h5>
            <h4 class='p-price'>₹45000</h4>
        ";
            }
        
            // g 
        
            elseif(isset($_POST['g1']))
            {
            $name="Trésor Quartz ";
            $price="₹18999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/omega/1.jpg'>
            <h5 class='p-name'>Trésor Quartz </h5>
            <h4 class='p-price'>₹18999</h4>
        ";
            }
            elseif(isset($_POST['g2']))
            {
            $name="Moonwatch Professional ";
            $price="₹65000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/omega/2.jpg'>
            <h5 class='p-name'>Moonwatch Professional </h5>
            <h4 class='p-price'>₹65000</h4>
        ";
            }
            elseif(isset($_POST['g3']))
            {
            $name="Diver 300M Sea-Master";
            $price="₹82000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/omega/3.jpg'>
            <h5 class='p-name'>Diver 300M Sea-Master </h5>
            <h4 class='p-price'>₹82000</h4>
        ";
            }
            elseif(isset($_POST['g4']))
            {
            $name="Moonwatch Professional";
            $price="₹35000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/omega/4.jpg'>
            <h5 class='p-name'>Moonwatch Professional </h5>
            <h4 class='p-price'>₹35000</h4>
        ";
            }
        
            // h 
        
            elseif(isset($_POST['h1']))
            {
            $name="Citizen Eco-Drive Gents Watch";
            $price="₹16000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/citizen/1.jpg'>
            <h5 class='p-name'>Citizen Eco-Drive Gents Watch</h5>
            <h4 class='p-price'>₹16000</h4>
        ";
            }
            elseif(isset($_POST['h2']))
            {
            $name="Citizen Automatic Gents Watch";
            $price="₹19999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/citizen/2.jpg'>
            <h5 class='p-name'>Citizen Automatic Gents Watch </h5>
            <h4 class='p-price'>₹19999</h4>
        ";
            }
            elseif(isset($_POST['h3']))
            {
            $name="Citizen Eco-Drive CA0617-11E";
            $price="₹16000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/citizen/3.jpg'>
            <h5 class='p-name'>Citizen Eco-Drive CA0617-11E </h5>
            <h4 class='p-price'>₹16000</h4>
        ";
            }
            elseif(isset($_POST['h4']))
            {
            $name="Citizen Eco-Drive Gents Watch";
            $price="₹24999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/citizen/4.jpg'>
            <h5 class='p-name'>Citizen Eco-Drive Gents Watch </h5>
            <h4 class='p-price'>₹24999</h4>
        ";
            }
        
            // i 
        
            elseif(isset($_POST['i1']))
            {
            $name="MP-09 Tourbillon Bi-Axis Red";
            $price="₹320000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/hublot/1.jpg'>
            <h5 class='p-name'>MP-09 Tourbillon Bi-Axis Red</h5>
            <h4 class='p-price'>₹320000</h4>
        ";
            }
            elseif(isset($_POST['i2']))
            {
            $name="Unico SORAI";
            $price="₹18000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/hublot/2.jpg'>
            <h5 class='p-name'>Unico SORAI </h5>
            <h4 class='p-price'>₹18000</h4>
        ";
            }
            elseif(isset($_POST['i3']))
            {
            $name="Tourbillon Bi-Axis";
            $price="₹13999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/hublot/3.jpg'>
            <h5 class='p-name'>Tourbillon Bi-Axis </h5>
            <h4 class='p-price'>₹13999</h4>
        ";
            }
            elseif(isset($_POST['i4']))
            {
            $name="Titanium Ceramic";
            $price="₹16999";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/hublot /4.jpg'>
            <h5 class='p-name'>Titanium Ceramic </h5>
            <h4 class='p-price'>₹16999</h4>
        ";
            }
        
            // j
        
            elseif(isset($_POST['j1']))
            {
            $name="ID116 Plus";
            $price="₹3500"; 
        
            echo "
            <img class='img-fluid mb-3 ' src='images/smart/1.jpg'>
            <h5 class='p-name'>ID116 Plus</h5>
            <h4 class='p-price'>₹3500</h4>
        ";
            }
            elseif(isset($_POST['j2']))
            {
            $name="Gladiator";
            $price="₹3000";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/smart/2.jpg'>
            <h5 class='p-name'>Gladiator </h5>
            <h4 class='p-price'>₹3000</h4>
        ";
            }
            elseif(isset($_POST['j3']))
            {
            $name="Super Nova";
            $price="₹7900";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/smart/3.jpg'>
            <h5 class='p-name'>Super Nova </h5>
            <h4 class='p-price'>₹7900</h4>
        ";
            }
            elseif(isset($_POST['j4']))
            {
            $name="Ninja 3 Smartwatch";
            $price="₹3200";
        
            echo "
            <img class='img-fluid mb-3 ' src='images/smart/4.jpg'>
            <h5 class='p-name'>Ninja 3 Smartwatch </h5>
            <h4 class='p-price'>₹3200</h4>
        ";
            }
        
        
                //echo "You have purchased $name watch for $price rs.";
        
echo"
        </div>
    </div>

    <form action='book_form.php' method='post'>
        <div class='row'>

            <div class='col'>

                <h3 class='title'>billing address</h3>

                <div class='inputBox'>
                    <span>full name :</span>
                    <input type='text' placeholder='Enter your name' name='name' required>
                </div>
                <div class='inputBox'>
                    <span>email :</span>
                    <input type='email' placeholder='example@example.com' name='email' required>
                </div>
                <div class='inputBox'>
                    <span>address :</span>
                    <input type='text' placeholder='room - street - locality' name='address' required>
                </div>
                <div class='inputBox'>
                    <span>Phone No. :</span>
                    <input type='text' placeholder='Enter your no.' name='phone' required>
                </div>
                <div class='inputBox'>
                    <span>city :</span>
                    <input type='text' placeholder='Your city'
                    name='city' required>
                </div>

                <div class='flex'>
                    <div class='inputBox'>
                        <span>state :</span>
                        <input type='text' placeholder='Your state' name='state' required>
                    </div>
                    <div class='inputBox'>
                        <span>zip code :</span>
                        <input type='text' placeholder='123 456' name='zipcode' required>
                    </div>
                </div>

            </div>

            <div class='col'>

                <h3 class='title'>payment</h3>

                <div class='inputBox'>
                    <span>cards accepted :</span>
                    <img src='images/card_img.png' alt=''>
                </div>
                <div class='inputBox'>
                    <span>name on card :</span>
                    <input type='text' placeholder='mr.M' name='cardna' required>
                </div>
                <div class='inputBox'>
                    <span>credit card number :</span>
                    <input type='number' placeholder='1111-2222-3333-4444' name='cardno' required>
                </div>
                <div class='inputBox'>
                    <span>exp month :</span>
                    <input type='text' placeholder='january' name='expmon' required>
                </div>

                <div class='flex'>
                    <div class='inputBox'>
                        <span>exp year :</span>
                        <input type='number' placeholder='2023' name='expyear' required>
                    </div>
                    <div class='inputBox'>
                        <span>CVV :</span>
                        <input type='text' placeholder='1234' name='cvvno' required>
                    </div>
                </div>

            </div>
    
        </div>
        <input type='hidden' value='<?php echo $name ?>' name='h1'>
        <input type='hidden' value='<?php echo $price ?>' name='h2'>

        <input type='submit' value='proceed to checkout' class='submit-btn' name='send'>
        <input type='button' value='<-- Previous page ' onclick='history.back()' class='btn'> 
        <!-- <button onclick='history.back()'>Go Back</button> -->

    </form>
</div>    



</body>
</html>
";
} else {
    echo '<script language = "javascript">';
    echo 'alert("Fail login")';
    echo '</script>';
    echo "<script>window.location.assign('login.php')</script>";
    die();
}

?>