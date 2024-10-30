<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/signinup.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
<div class="parallelogram" id="one"></div>
<div class="parallelogram" id="two"></div>
<div class="parallelogram" id="three"></div>
<div class="parallelogram" id="four"></div>
<div class="parallelogram" id="five"></div>
<div class="parallelogram" id="six"></div>


<main>
<div id="container">
  <form action="{{route('SaveClients.store')}}" method="POST">
    <img src="https://bit.ly/2tlJLoz"><br>
    <input type="text" value="nom" name=""><br>
    <input type="text" value="Prénom"><br>
    <input type="password" value="Mot de passe"><br>
    <input type="email" value="Email"><br>
    <input type="phone" value="Téléphone"><br>
    <input type="phone" value="Adresse"><br>
    <input type="submit" value="SIGN IN"><br>
  </form>
</div>
</main>


<!-- <div class="container-signup">
  <div class="row header">
    <h3>Sign up</h3>
  </div>
  <div class="row body">
    <form id="add-contact-form" action="/signInUp" method="POST">
      <ul>
        
        <li>
          <p class="left">
            <label for="firstname">first name<span class="req">*</span></label>
            <input type="text" name="firstname" placeholder="John" />
          </p>
          <p class="pull-center">
            <label for="middle_name">middle name</label>
            <input type="text" name="middle_name" placeholder="middle name" />      
          </p>
          <p class="pull-right">
            <label for="lastname">last name<span class="req">*</span></label>
            <input type="text" name="lastname" placeholder="Smith" />      
          </p>
        </li>
        <p class="left">
            <label for="dob">birthday</label>
            <input type="text" id="birthday" name="birthday" placeholder="dd-mm-yyyy" />
          </p>
        <li><div class="divider"></div>
        <li>
          <label for="personal">Personal Address</label>
        </li><li>
          <p class="left">
            <label for="street">street</label>
            <input type="text" name="street" placeholder="Street" />
          </p>
          <p class="pull-center">
            <label for="city">city</label>
            <input type="text" name="city" placeholder="City" />      
          </p>
          <p class="pull-right">
            <label for="state">state</label>
            <input type="text" name="state" placeholder="State" />    
          </p>
        </li>
        <li>
          <p class="left">
            <label for="country">country</label>
            <input type="text" name="country" placeholder="Country" />
          </p>
          <p class="pull-center">
            <label for="postal-code">postal code</label>
            <input type="text" name="postal-code" placeholder="Postal Code" />
          </p>
        </li>
        <li>
          <p class="left">  
            <label for="cellphone">cell phone</label>
            <input type="text" name="cellphone" placeholder="Cellphone" />
          </p>
        </li> 
        
        <li>
          <p>
            <label for="email">email <span class="req">*</span></label>
            <input type="email" name="email" placeholder="john.smith@gmail.com" />
          </p>
        </li>        
        <li>
          <div class="divider"></div>
        </li>
        <li>
          <label for="business">Business Address</label>
        </li>
        <li>
          <p class="left">
            <label for="b_street">street</label>
            <input type="text" name="b_street" placeholder="Street" />
          </p>
          <p class="pull-center">
            <label for="b_city">city</label>
            <input type="text" name="b_city" placeholder="City" />      
          </p>
          <p class="pull-right">
            <label for="b_state">state</label>
            <input type="text" name="b_state" placeholder="State" />    
          </p>
        </li>
        <li>
          <p class="left">
            <label for="b_country">country</label>
            <input type="text" name="b_country" placeholder="Country" />
          </p>
            <p class="pull-center">
            <label for="b_postalcode">postal code</label>
            <input type="text" name="b_postalcode" placeholder="Postal Code" />      
          </p>
        </li>
        <li>
          <p class="left">
            <label for="b_cellphone">cell phone</label>
            <input type="text" name="b_cellphone" placeholder="cellphone" />
          </p>
        </li>
        <li>
          <p>
            <label for="b_email">email </label>
            <input type="email" name="b_email" placeholder="john.smith@gmail.com" />
          </p>
        </li>
         <li>
           <p class="left">
            <label for="role">role</label>
            <input type="text" name="role" placeholder="Role" />
          </p>
           
           <p class="pull-center">
            <label for="designation">designation</label>
            <input type="text" name="designation" placeholder="Designation" />
          </p>
           
          <p class="pull-right">
            <label for="company">company</label>
            <input type="text" name="company" placeholder="Company" />
          </p>
        </li>
        
        <li><div class="divider"></div></li>

        <li>
          <label for="comments">notes</label>
          <textarea cols="46" rows="1" name="comments"></textarea>
        </li>
        
        <li>
          <input class="btn btn-submit" type="submit" value="Submit" />
          <small>click to <strong>sumbit</strong></small>
        </li>
        
      </ul>
    </form>  
  </div>
</div> -->

</table>
</body>
</html>