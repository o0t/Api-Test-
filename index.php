<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Api Page </title>
</head>

<body>

    <?php


    $api_url = 'http://dummy.restapiexample.com/api/v1/employees';

    // Read JSON file
    $json_data = file_get_contents($api_url);

    // Decode JSON data into PHP array
    $response_data = json_decode($json_data);

    // All user data exists in 'data' object
    $user_data = $response_data->data;

    // Traverse array and display user data
    foreach ($user_data as $user) {
        echo "<br>";
        echo "name : " . $user->employee_name;
        echo "<br>";
        echo "age : " . $user->employee_age;
        echo "<br> ";
        echo "Number :" . $user->employee_salary;
        echo "<br>";
    }
    ?>


    <script src="main.js"></script>

</body>

</html>