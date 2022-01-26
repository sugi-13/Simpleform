<html>
    <head>
        <title>MyForm</title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
        <div class="form">
            <h3 style="color:rgb(247, 56, 145);">Fillup Guyzzz !!</h3>
        <form method="POST" action="form.php">
            <label>Name :</label>
            <input type="text" placeholder="Name"  style="height:30px;" name="name" autocomplete="off"/>
            <br>
            <br>
            <label>Email :</label>
            <input type="email" placeholder="Email" style="height:30px;" name="email" autocomplete="off"/>
            <br>
            <br>
            <label>Feedback :</label>
            <input type="text" placeholder="Write here..." style="height:50px;" name="feedback" autocomplete="off"/>
            <br>
            <br>
            <input type="submit" value="done" name="submit" id="button"/>
        </form>
        </div>
    </body>
</html>