<?php
session_start();

session_unset();
session_destroy();

?>

<header>
    <ul>
        <li><img src="images/bug.png" alt="bug" /></li>
        <li>
            <h4hb>Issue Tracker</h4>
        </li>
    </ul>
</header>

<aside>
    
    <div id="sidebar-contents">
    </div>
</aside>

<div id="grid-wrapper">
    <main>
        <div class="area">
            <form method="post">
                <h2>User Login</h2>

                <label>Email</label>
                <input id="loginemail" type="email" name="email" placeholder="kimanimunn@gmail.com" required>
                
                <label>Password</label>
                <input id="loginpassword" type="password" name="password" placeholder="********" required>
                
                <button id="loginsubmit" name="login" type="button">Submit</button>
            </form>
        </div>
    </main>
</div
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
        $.getScript("js/results.js");
</script>