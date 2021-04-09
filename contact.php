<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Library</title>
    
        

</head>

<body>
    <?php include('header.php') ?>
    <h4 class="title">CONTACT US :</h4><br><br>
    <div class="main-content">
    
    <div class="frm">
    <form action="index.php" method="post">
    <label for="name" id="label">Name</label><br>
    <input type="text" placeholder="" id="name" name="name" class="INPUT"><br><br>
    <label for="name" id="label">Email</label><br>
    <input type="email" placeholder="" id="name" name="email" class="INPUT"><br><br>
    <label for="name1" id="label">Message</label><br>
    <textarea id="INPUT" name="message" ></textarea><br><br>

    <button id="button">SEND</button>

     </form>
     </div>
     </div>


   <?php include('footer.php') ?> 

</body>

</html>