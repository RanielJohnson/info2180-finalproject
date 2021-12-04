<?php
echo '<link rel="stylesheet" type ="text/css" href = ../styles/style.css"/>';
if($page == "adduser"){
    ?>
        <div class = "form">
        <div id= "newUser">
            <h2> New User</h2> 
            <form action = "form_addUser.php">
            <form id= "newUsers-form"

                <label for= "firstname"> *First Name: </label>
                <input type= "text" name="firstname" id= "fname" placeholder ="Kimani" required />
                <div id="firstname_is"></div><br>

                <label for= "lastname"> *Last Name: </label>
                <input type= "text" name="firstname" id= "lname" placeholder ="Munn" required />
                <div id="lastname_is"></div><br>

                <label for= "username"> *Username: </label>
                <input type= "text" name="username" id= "uname" placeholder ="kimanimunn" required />
                <div id="username_is"></div><br>

                <label for= "password"> *Password: </label>
                <input type= "text" name="password" minlength="8" id= "pword" placeholder ="********" required />
                <div id="password_is"></div><br>

                <label for= "Email"> *Email: </label>
                <input type= "email" name="email" id= "email" placeholder ="kimanimunn@gmail.com" required />
                <div id="email_is"></div><br>
            </form>

        </diV>
        </diV>
        

<?php
 }
?>