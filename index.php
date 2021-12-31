<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX CODE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>User City</th>
        </tr>

        <tbody id="my-data">

        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        // Bellow is the jquery script to run if and only if everything above is loaded in the DOM
        $(document).ready(function(){ 
            $.ajax({ // This function sends data to my php file
                type: "GET",    // request method for retrieving data from the database
                url:"data.php", // This is the filename containing the query within a loop
                dataType: "html",   
                success: function(data){ 
                    // if the finction will send request and responce is succesfull
                    // then we're putting the data in the tbody of class my-data
                    $("#my-data").html(data); 
                }
            });
        
        });
    </script>

</body>
</html>