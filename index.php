<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Ajax</title>
</head>
<body>
    
<div class="form-container">
    <h1>AJAX Form Submit</h1>
    <form id="inputFormData">
      <div>
        <input type="text" placeholder="Name" name="fullname" id="fullname">
        <input type="text" placeholder="User Name" name="username" id="username">
        <input type="text" placeholder="Phone" name="phone" id="phone">
        <input type="button" id="submit" value="Submit">
        
          <input type="text" placeholder="jayar" name="name" id="name">
          <input type="text" placeholder="olivas" name="surname" id="surname">
          <input type="button" id="save" value="Send">
      </div>
    </form>
    <div id="ajax-data">
      
    </div>
</div>  
    <script src="ajax.js"></script>
</body>
</html>