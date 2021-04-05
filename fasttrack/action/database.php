<?php

class database {
    private $servername = "localhost";
    private $username   = "root";
    private $password   = "";
    private $database   = "blog_database";
    public  $con;

    function __construct() {
        $this->$con = new mysqli("localhost", "root", "", "assignment_bit302_fasttrack");
        if (mysqli_connect_error()) {
            trigger_error("Connection failed: " . mysqli_connect_error());
        } else {
            return $this->$con;
        }
    }

    function show_test_kit_data(){
        $query = mysqli_query("SELECT * FROM test_kit");
        $result = this
        while ($result = mysqli_fetch_array($query)) {
            $value[] = $result;
        }
        return $value;
    }
}
?>
