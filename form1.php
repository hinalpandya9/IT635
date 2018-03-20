<!DOCTYPE html>
<html >
<head>
    <title>ADD Car</title>
    <link href="cakeform.css" rel="stylesheet" type="text/css" />
</head>
<body >
    <div id="wrap">
        <form method="post" action="connect.php" id="cakeform" >
        <div>

                <div class="cont_details">
                <fieldset>
                <legend>Locations</legend>
                <label for='loc_name'>Location name</label>
                <input type="text" id="name" name="loc_name" />
                <br/>
                <label for='carID'>Car ID</label>
                <input type="text" id="carID" name="carID" />
                <br/>
                
                 <button>
            <input type='submit' id='submit' value='Add'  />
            </button>
       </fieldset>
        </div>
        </div>
       </form>
        </div>

</body>

</html>

