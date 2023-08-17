<?php

namespace Controllers\doctor;

use mysqli;

class Results extends \Controllers\doctor\Doctor
{
    public function filterAction()
    {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $database = "medicaldb";

        // Create a connection to the database
        $con = new mysqli($host, $dbUsername, $dbPassword, $database);


        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }



        // $doctor_id = $_GET['id'] ?? 2;

        ## Read value
        ## Read value
        $draw = $_POST['draw'];
        $row = $_POST['start'];
        $rowperpage = $_POST['length']; // Rows display per page
        $columnIndex = $_POST['order'][0]['column']; // Column index
        $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
        $searchValue = mysqli_real_escape_string($con, $_POST['search']['value']); // Search value
        ## Search 
        $searchQuery = " ";
        if ($searchValue != '') {
            $searchQuery = " and (first_name like '%" . $searchValue . "%' or 
        email like '%" . $searchValue . "%' ) ";
        }

        ## Total number of records without filtering
        $sel = mysqli_query($con, "select count(*) as allcount from patients");
        $records = mysqli_fetch_assoc($sel);
        $totalRecords = $records['allcount'];

        ## Total number of record with filtering
        $sel = mysqli_query($con, "select count(*) as allcount from patients WHERE 1 " . $searchQuery);
        $records = mysqli_fetch_assoc($sel);
        $totalRecordwithFilter = $records['allcount'];

        ## Fetch records
        $empQuery = "select * from patients WHERE 1 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
        $empRecords = mysqli_query($con, $empQuery);
        $data = array();

        while ($row = mysqli_fetch_assoc($empRecords)) {
            $data[] = array(
                "first_name" => $row['first_name'],
                "last_name" => $row['last_name'],
                "email" => $row['email'],
                "age" => $row['age'],
                "role" => $row['role']
            );
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

        echo json_encode($response);
    }
}
