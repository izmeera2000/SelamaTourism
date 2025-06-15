<?php


if (isset($_POST['getlist_people_guide'])) {

    // DataTables parameters from POST request
    $start = isset($_POST['start']) ? (int) $_POST['start'] : 0;   // Paging start
    $length = isset($_POST['length']) ? (int) $_POST['length'] : 10;  // Number of rows per page
    $search = isset($_POST['search']) ? $_POST['search'] : ''; // Global search value
    $order = isset($_POST['order'][0]['column']) ? (int) $_POST['order'][0]['column'] : 0; // Sorting column index
    $order_direction = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'desc'; // Sorting direction
    $table_name = "guide_details";
    $user_id = isset($_POST['user_id']) ? (int) $_POST['user_id'] : null; // Ensure you get the user_id
    $guide_id = isset($_POST['guide_id']) ? (int) $_POST['guide_id'] : null; // Ensure you get the user_id

    // Column names for sorting
    $columns = ['booking_id', 'name', 'ic', 'phone', 'address', 'email', 'status', 'id', 'guide_id','_lat','_long']; // Modify according to your table structure

    // Escape search string to prevent SQL injection
    // $search = $conn->real_escape_string($search);

    // Build the SQL query
    $search_condition = "WHERE 1=1 "; // Default condition to simplify appending conditions



    $search_condition .= " AND guide_id = '$guide_id'";

    // If there's a search value, add search conditions for the relevant fields
    if ($search) {
        $search_condition .= " AND (booking_id LIKE '%$search%' 
                                 OR name LIKE '%$search%' 
                                 OR ic LIKE '%$search%' 
                                 OR phone LIKE '%$search%' 
                                 OR email LIKE '%$search%' 
                                  OR address LIKE '%$search%')";
    }

    // Ensure that the user_id condition is added at the end
    // if ($user_id) {
    //     $search_condition .= " AND user_id = '$user_id'";
    // }


    // Build the order by clause
    $order_by = "ORDER BY " . $columns[$order] . " " . $order_direction;

    // Paginate the result
    $sql = "SELECT * FROM $table_name $search_condition $order_by LIMIT $start, $length";
    $result = $conn->query($sql);

    // Fetch the data and build the output array
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $row['status2'] = getHikingStatuses($row['status']);
        $data[] = $row;
    }

    // Get the total number of records after filtering (for pagination)
    $sql_filtered_total = "SELECT COUNT(*) AS total FROM $table_name $search_condition";
    $result_filtered_total = $conn->query($sql_filtered_total);
    $row_filtered_total = $result_filtered_total->fetch_assoc();
    $filtered_records = $row_filtered_total['total'];

    // Get the total number of records without filtering (for pagination)
    $sql_total = "SELECT COUNT(*) AS total FROM $table_name";
    $result_total = $conn->query($sql_total);
    $row_total = $result_total->fetch_assoc();
    $total_records = $row_total['total'];

    // Output the data in DataTables format
    echo json_encode([
        'draw' => isset($_POST['draw']) ? (int) $_POST['draw'] : 1,  // Draw counter for DataTables
        'recordsTotal' => $total_records, // Total records in the database (unfiltered)
        'recordsFiltered' => $filtered_records, // Total records after search filter
        'data' => $data,// Data rows to be displayed
        'POST' => $search,

    ]);

    exit();
}







if (isset($_POST['people_change_status'])) {

    //for each hiker
    $id = $_POST['id'];
    $guide_id = $_POST['guide_id'];
    $status = $_POST['status'];


    $sql = "UPDATE guide_details SET status = '$status'  WHERE id ='$id' ";

    // $statusArray = [
//guide
    //     'not yet',//0
    //     'assigned',//1
    //     'ongoing',//2
    //     'finished',//3
    //     'cancelled',//4
    //     'delayed',//5
    //     'emergency',//6
    // ];

    //     $statusArray = [
//hiking
    //     'not yet',  //0
    //     'ongoing', //1
    //     'finished',//2
    //     'cancelled',//3
    //     'delayed',//4
    //     'emergency',//5
    // ];


    if ($status == '5') {
        $sql2 = "UPDATE guides SET status = '6'  WHERE id ='$guide_id' ";
        mysqli_query($conn, $sql2);


        $result = publishToBeamsInterests(
            ["guide-$guide_id"],    // or ['2'] for testing
            'Emergency',
            'This is not a drill',
            "$rootPath/guide/$guide_id",

        );
        // // Check the result to determine if the notification was sent successfully


    }



    if ($status == '2') {
        $sql2 = "UPDATE guides SET status = '3'  WHERE id ='$guide_id' ";
        mysqli_query($conn, $sql2);



        $result = publishToBeamsInterests(
            ["guide-$guide_id"],    // or ['2'] for testing
            'Guide Finished',
            'Guide Finished',
            "$rootPath/guide/$guide_id",

        );

    }


    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
        // echo "done";


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    echo "successful";

    // header("Location: " . $basePath2 . "/book". "/" . $id );
    die();


}


if (isset($_POST['people_change_status_qr'])) {


    $guide_id = $_POST['guide_id'];
    $status = 1;


    $sql = "UPDATE guide_details SET status = '$status'  WHERE guide_id ='$id' ";




    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
        // echo "done";


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // header("Location: " . $basePath2 . "/book". "/" . $id );

    die();
}






if (isset($_POST['SaveGuideStatus'])) {
    //for whole guide

    $id = $_POST['guide_id'];
    $status = $_POST['status_num_guide'];
    $date = $_POST['date'];
    $timeslot_id = $_POST['timeslot_id'];

    // echo $status;

    $sql = "UPDATE guides SET status = '$status'  WHERE id ='$id' ";

    // // Define the status array
    // $statusArray = [

    //     'not yet',//0
    //     'assigned',//1
    //     'ongoing',//2
    //     'finished',//3
    //     'cancelled',//4
    //     'delayed',//5
    //     'emergency',//6
    // ];


    //hiking
    // $statusArray = [

    //     'not yet',  //0
    //     'ongoing', //1
    //     'finished',//2
    //     'cancelled',//3
    //     'delayed',//4
    //     'emergency',//5
    // ];

    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
        // echo "done";

        if ($status == '1') {
            $result = publishToBeamsInterests(
                ["guide-$id"],    // or ['2'] for testing
                'Guide Assigned',
                'Your guide has been assigned',
                "$rootPath/guide/$id",

            );
        }


        if ($status == '3') {
            $sql2 = "UPDATE guide_details  SET status = '2'  WHERE guide_id ='$id'  AND ( status != '5' AND status != '3' AND status != '4')  ";
            mysqli_query($conn, $sql2);
            $result = publishToBeamsInterests(
                ["guide-$id"],    // or ['2'] for testing
                'Finished',
                'Your guide is finished',
                "$rootPath/guide/$id",

            );
        }

        if ($status == '4') {
            $sql2 = "UPDATE guide_details  SET status = '3'  WHERE guide_id ='$id'  AND ( status != '5'   AND status != '4')  ";
            mysqli_query($conn, $sql2);
            $result = publishToBeamsInterests(
                ["guide-$id"],    // or ['2'] for testing
                'Cancelled',
                'Your guide has been canceled',
                "$rootPath/guide/$id",

            );

        }

        if ($status == '6') {
            $result = publishToBeamsInterests(
                ["guide-$id"],    // or ['2'] for testing
                'Emergency',
                'This is not a drill',
                "$rootPath/guide/$id",

            );
        }



    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    header("Location: " . $basePath2 . "/guide" . "/" . $id);
exit();

}




if (isset($_POST['getlist_guide_user'])) {

    // DataTables parameters from POST request
    $start = isset($_POST['start']) ? (int) $_POST['start'] : 0;   // Paging start
    $length = isset($_POST['length']) ? (int) $_POST['length'] : 10;  // Number of rows per page
    $search = isset($_POST['search']) ? $_POST['search'] : ''; // Global search value
    $order = isset($_POST['order'][0]['column']) ? (int) $_POST['order'][0]['column'] : 0; // Sorting column index
    $order_direction = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'desc'; // Sorting direction
    $table_name = "guides";
    $user_id = isset($_POST['user_id']) ? (int) $_POST['user_id'] : null; // Ensure you get the user_id

    // Column names for sorting
    $columns = ['id', 'date', 'timeslot_id', 'user_id', 'created_at']; // Modify according to your table structure

    // Escape search string to prevent SQL injection
// $search = $conn->real_escape_string($search);

    // Build the SQL query
    $search_condition = "WHERE 1=1"; // Default condition to simplify appending conditions

    // If there's a search value, add search conditions for the relevant fields
    if ($search) {
        $search_condition .= " AND (g.id LIKE '%$search%' 
                                --  OR g.name LIKE '%$search%' 
                                --  OR g.ic LIKE '%$search%' 
                                --  OR g.phone LIKE '%$search%' 
                                --  OR g.email LIKE '%$search%' 
                                --  OR g.address LIKE '%$search%' 
                                --  OR b.id LIKE '%$search%' 
                                --  OR b.user_id LIKE '%$search%' 
                                 OR g.date LIKE '%$search%')";  // Adjust the column in guide_details
    }

    // Add user_id condition
    if ($user_id) {
        $search_condition .= "";
    }

    // Build the order by clause
    $order_by = "ORDER BY " . $columns[$order] . " " . $order_direction;

    // Paginate the result with INNER JOINs on bookings and guide_details
    $sql = "SELECT g.* , b.user_id
        FROM $table_name g
       INNER JOIN guide_details gd ON g.id = gd.guide_id        
         INNER JOIN bookings b ON b.id = gd.booking_id
        $search_condition
        GROUP BY  g.id ,  b.user_id
        $order_by 
        LIMIT $start, $length
        ";

    $result = $conn->query($sql);


    // Fetch the data and build the output array
    $data = [];
    while ($row = $result->fetch_assoc()) {

        $date = new DateTime($row['date']);  // Replace 'datetime' with the correct column name
        $row['date'] = $date->format('d/m/Y');  // Format: 23/07/2025 8:30PM

        $date = new DateTime($row['created_at']);  // Replace 'datetime' with the correct column name
        $row['created_at'] = $date->format('d/m/Y g:i A');  // Format: 23/07/2025 8:30PM
        $row['status2'] = getHikingStatuses($row['status']);
        $data[] = $row;
    }

    // Get the total number of records after filtering (for pagination)
    $sql_filtered_total = "SELECT COUNT(*) AS total    FROM $table_name g
       INNER JOIN guide_details gd ON g.id = gd.guide_id        
         INNER JOIN bookings b ON b.id = gd.booking_id
          $search_condition GROUP BY  g.id ,  b.user_id";
    $result_filtered_total = $conn->query($sql_filtered_total);
    $row_filtered_total = $result_filtered_total->fetch_assoc();
    $filtered_records = $row_filtered_total['total'];

    // Get the total number of records without filtering (for pagination)
    $sql_total = "SELECT COUNT(*) AS total  FROM $table_name g
       INNER JOIN guide_details gd ON g.id = gd.guide_id        
         INNER JOIN bookings b ON b.id = gd.booking_id
          $search_condition GROUP BY  g.id ,  b.user_id";
    $result_total = $conn->query($sql_total);
    $row_total = $result_total->fetch_assoc();
    $total_records = $row_total['total'];

    // Output the data in DataTables format
    echo json_encode([
        'draw' => isset($_POST['draw']) ? (int) $_POST['draw'] : 1,  // Draw counter for DataTables
        'recordsTotal' => $total_records, // Total records in the database (unfiltered)
        'recordsFiltered' => $filtered_records, // Total records after search filter
        'data' => $data,// Data rows to be displayed
        'POST' => $search,

    ]);

    exit();
}







if (isset($_POST['guide_update_location_user'])) {
// echo "test";

    $user_id = $_POST['user_id'];
    $guide_id = $_POST['guide_id'];
    $lat = $_POST['latitude'];
    $long = $_POST['longitude'];


    $sql = "UPDATE guide_details g
    JOIN bookings b ON g.booking_id = b.id
    
    SET g._lat = '$lat' , g._long = '$long'  WHERE g.guide_id ='$guide_id' AND b.user_id = '$user_id'   ";

    $result = mysqli_query($conn, $sql);


    // If the update is successful, fetch the guide details to get the status
    $sql2 = "SELECT * FROM guides WHERE id='$guide_id' ";

    // Execute the query to fetch the guide's data
    $result2 = mysqli_query($conn, $sql2);

    // Check if a row is returned
    if (mysqli_num_rows($result2) > 0) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($result2);

        // Get the status value
        $status = $row['status'];
        // echo "assasas";
        // // Echo the status value in an array
        echo json_encode(array(
            'status' => $status ,
 

        
        
        ));  // You can use json_encode to echo as JSON
    } else {
        echo "No guide found with ID: $guide_id";
    }

    // header("Location: " . $basePath2 . "/book". "/" . $id );

    die();
}


if (isset($_POST['guide_update_location_guide'])) {

    $user_id = $_POST['user_id'];
    $guide_id = $_POST['guide_id'];
    $lat = $_POST['latitude'];
    $long = $_POST['longitude'];


    $sql = "UPDATE guides g SET g.guide_lat = '$lat' , g.guide_long = '$long'   WHERE g.id ='$guide_id'     ";

    $result = mysqli_query($conn, $sql);


    // If the update is successful, fetch the guide details to get the status
    $sql2 = "SELECT * FROM guides WHERE id='$guide_id' ";

    // Execute the query to fetch the guide's data
    $result2 = mysqli_query($conn, $sql2);

    // Check if a row is returned
    if (mysqli_num_rows($result2) > 0) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($result2);

        // Get the status value
        $status = $row['status'];
        // echo "assasas";
        // // Echo the status value in an array
        echo json_encode(array(
            'status' => $status ,
 'sql' => $sql,

        
        
        ));  // You can use json_encode to echo as JSON
    } else {
        echo "No guide found with ID: $guide_id";
    }

    // header("Location: " . $basePath2 . "/book". "/" . $id );

    die();
}





if (isset($_POST['getlist_admin_2'])) {

    // DataTables parameters from POST request
    $start = isset($_POST['start']) ? (int) $_POST['start'] : 0;   // Paging start
    $length = isset($_POST['length']) ? (int) $_POST['length'] : 10;  // Number of rows per page
    $search = isset($_POST['search']) ? $_POST['search'] : ''; // Global search value
    $order = isset($_POST['order'][0]['column']) ? (int) $_POST['order'][0]['column'] : 0; // Sorting column index
    $order_direction = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : 'desc'; // Sorting direction
    $table_name = "guides";
    $user_id = isset($_POST['user_id']) ? (int) $_POST['user_id'] : null; // Ensure you get the user_id
 
    // Column names for sorting
    $columns = ['id', 'date', 'timeslot_id', 'people_booked', 'created_at','status']; // Modify according to your table structure

    // Escape search string to prevent SQL injection
    // $search = $conn->real_escape_string($search);

    // Build the SQL query
    $search_condition = "WHERE 1=1"; // Default condition to simplify appending conditions

    // If there's a search value, add search conditions for the relevant fields
    if ($search) {
        $search_condition .= " AND (id LIKE '%$search%' 
                                 OR date LIKE '%$search%' 
                                 OR timeslot_id LIKE '%$search%' 
                                 OR people_booked LIKE '%$search%' 
                                 OR created_at LIKE '%$search%')";
    }

     

    // Ensure that the user_id condition is added at the end
    // if ($user_id) {
        $search_condition .= " AND status != '3' AND status != '4' AND  status != '0' ";
    // }


    // Build the order by clause
    $order_by = "ORDER BY " . $columns[$order] . " " . $order_direction;

    // Paginate the result
    $sql = "SELECT * FROM $table_name $search_condition $order_by LIMIT $start, $length";
    $result = $conn->query($sql);

    // Fetch the data and build the output array
    $data = [];
    while ($row = $result->fetch_assoc()) {


        $row['status2'] = getGuideStatuses($row['status']);  // Format: 23/07/2025 8:30PM

        $date = new DateTime($row['date']);  // Replace 'datetime' with the correct column name
        $row['date'] = $date->format('d/m/Y');  // Format: 23/07/2025 8:30PM

        $date = new DateTime($row['created_at']);  // Replace 'datetime' with the correct column name
        $row['created_at'] = $date->format('d/m/Y g:iA');  // Format: 23/07/2025 8:30PM


        $data[] = $row;
    }

    // Get the total number of records after filtering (for pagination)
    $sql_filtered_total = "SELECT COUNT(*) AS total FROM $table_name $search_condition";
    $result_filtered_total = $conn->query($sql_filtered_total);
    $row_filtered_total = $result_filtered_total->fetch_assoc();
    $filtered_records = $row_filtered_total['total'];

    // Get the total number of records without filtering (for pagination)
    $sql_total = "SELECT COUNT(*) AS total FROM $table_name";
    $result_total = $conn->query($sql_total);
    $row_total = $result_total->fetch_assoc();
    $total_records = $row_total['total'];

    // Output the data in DataTables format
    echo json_encode([
        'draw' => isset($_POST['draw']) ? (int) $_POST['draw'] : 1,  // Draw counter for DataTables
        'recordsTotal' => $total_records, // Total records in the database (unfiltered)
        'recordsFiltered' => $filtered_records, // Total records after search filter
        'data' => $data,// Data rows to be displayed
        'POST' => $search,

    ]);

    exit();
}