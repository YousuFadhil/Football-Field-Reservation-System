<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Home</title>
<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    div.s1{
        position: relative;
        margin: 10px ;
        width: auto;
        height: 1000px;
    }
    div.t{
        position: absolute;
        max-width: 50%;
        padding: 50px ;
        top: 10%;
    }
    div.i{
        position: absolute;
        right: 0px;
        max-width: 50%;
    }
</style>

</head>


<body>
    <div class="container">
        <header><?php include('header.html') ?></header>
        
        <div class="s1">
            <div class="t">
                <center>
                    <h1>GO PLAY</h1>
                    <h3>Football Field Reservation System</h3>
                    <br><br>
                    <p style="text-align: justify; font-size: large;">
                    Go Play is an application which has primarily focused on football reservation service, enables youngsters to play football in the reserved playgrounds and communicate with nearby football fans. Football playgrounds are in great abundance in the OMAN, and there is a high demand for reserving playgrounds around the nation every-single-day. However, almost all of these reservations are made through a cumbersome process of calling the sports centers and discussing the timing and making sure you have enough players to be able to play. People can pay money through cash or online payment as they prefer. With this app, a great deal of communication gap is bridged and a lot of cumbersome problems avoided and make a friendly football match.
                    </p>
                </center>
            </div>
            <div class="i">
                <img src="image/e2.png" width="100%" height="990px">
            </div>
        </div>
        

        <div class="s2">
            <img src="image/e1.jpg" alt="" width="100%" height="300px">
        </div>



        <footer><?php include('footer.html') ?></footer>
    </div>
</body>

</html>
