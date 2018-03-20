<!DOCTYPE html>
<html >
<head>
    <title>ADD Car</title>
    <link href="cakeform.css" rel="stylesheet" type="text/css" />
</head>
<body >
    <div id="wrap">
        <form method="post" action="rent.php" id="cakeform" >
        <div>


                <div class="cont_details">
                <fieldset>
                <legend>Car Details</legend>
                <label for='name'>Car name</label>
                <input type="text" id="name" name="name" />
                <br/>
                <label for='model'>Car Model</label>
                <input type="text" id="model" name="model" />
                <br/>
                <label for='year'>Year</label>
                <input type="text"  id="year" name="year"/>
                <br/>
                    <label for='color'>Car color</label>
                    <input type="text" id="color" name="color"/>
                    <br/>
                    <label for='price'>Car price</label>
                    <input type="number" id="price" name="price" />
                    <br/>


            <button >
            <input type='submit' id='submit' value='Add'  />
            </button>
        </fieldset>
        </div>
        </div>
       </form>
        </div>

</body>

</html>
