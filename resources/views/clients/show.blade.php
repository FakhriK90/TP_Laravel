<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/show.css">
    <title>Document</title>
</head>
<body>
<div class="parallelogram" id="one"></div>
<div class="parallelogram" id="two"></div>
<div class="parallelogram" id="three"></div>
<div class="parallelogram" id="four"></div>
<div class="parallelogram" id="five"></div>
<div class="parallelogram" id="six"></div>


<div class="show_container">
  <div class="row header">
    <h1>Profile</h1>
    <h3>Your profile here!</h3>
  </div>
  <div class="row body">
    <form id="add-contact-form" action="#">
      <ul>
        
        <li>
          <p class="info_profile">
          Last Name: {{ $client->nom }}
        </p>
          <p class="info_profile">
          First Name: {{ $client->prenom }}
        </p>
          <p class="info_profile">
          Email: {{ $client->email }}
        </p>
        <p class="info_profile">
          Phone Number: {{ $client->telephone }}
        </p>
          <p class="info_profile">
          Adress: {{ $client->adresse }}
        </p>
        </li>
            
        <li>
          <div class="divider"></div>
        </li>
        

        <li>
          <input class="btn btn-submit" type="submit" value="Submit" />
          <small>click to <strong>sumbit</strong></small>
        </li>
        
      </ul>
    </form>  
  </div>
</div>

</table>
</body>
</html>