<!DOCTYPE html>
<html >
<head>
    <title>ADD Car</title>
    <link href="cakeform.css" rel="stylesheet" type="text/css" />
</head>
<body >
    <div id="wrap">
        <form method="post" action="insert1.php" id="cakeform" >
        <div>


                <div class="cont_details">
                <fieldset>
                <legend>Car Details</legend>
                <label for='name'>Email</label>
                <input type="text" id="email" name="email" />
                <br/>
                <label for='pass'>Password</label>
                <input type="text" id="pass" name="pass" />
                <br/>
                <label for='user'>User</label>
                <input type="text"  id="user" name="user" value="R"/>
                <br/>
                    <label for='carID'>Car ID</label>
                    <input type="text" id="carID" name="carID"/>
                    <br/>
                    <label for='loc_name'>Location Name</label>
                    <input type="text" id="loc_name" name="loc_name" />
                    <br/>


            <button >
            <input type='submit' id='submit' value='RENT'  />
            </button>
        </fieldset>
        </div>
        </div>
       </form>
        </div>

</body>

</html>

