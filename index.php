<html>

    <head>
    
        <?php include('logic.php'); ?>
        <title>Weather Scraper</title>
    
        <link rel="stylesheet" type="text/css" href="styles.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>


    <body>
    
        <div id="container">
            <h1>What's The Weather?</h1>
            <h5>Enter the name of a city.</h5>
            <a href="http://corruption.name/6-PHP/weather/"></a>
        </div>

        <form method="get">
            <div class="col-sm-4 offset-sm-4">
                <div class="input-group">
                  <input type="text" name="city" class="form-control" placeholder="e.g. London" aria-describedby="sizing-addon2" id="input" value="<?php if($_GET["city"]){echo $_GET["city"];}?>">
                </div>
            </div>
        <input type="submit" class="btn btn-primary" id="button" value="Submit">
        </form>

        <div id="result">
            <?php echo $result; ?>
        </div>



        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

         <script type="text/javascript">


        </script>

    </body>



</html>