<?php

include '../../config/config.php';

if (isset($_POST['save_student'])) {

    $admission_fees = mysqli_real_escape_string($conn, $_POST['admission_fees']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);

    if (empty($admission_fees) || empty($name) || empty($username)) {
        $res = [
            'status' => 422,
            'message' => 'Some fields are missing'
        ];
        echo json_encode($res);
        return;
    }

    $sex = mysqli_real_escape_string($conn, $_POST['sex']);
    $smart_card = !empty($_POST['smart_card']) ? mysqli_real_escape_string($conn, $_POST['smart_card']) : "0";
    $dob = !empty($_POST['dob']) ? mysqli_real_escape_string($conn, $_POST['dob']) : date('Y-m-d');
    $contact = !empty($_POST['contact']) ? mysqli_real_escape_string($conn, $_POST['contact']) : "0";
    $whatsapp = !empty($_POST['whatsapp']) ? mysqli_real_escape_string($conn, $_POST['whatsapp']) : "0";
    $address = !empty($_POST['address']) ? mysqli_real_escape_string($conn, $_POST['address']) : "none";

    // Image fields handle
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $unique_image_name = bin2hex(random_bytes(10)) . '.' . $image_ext;
        $image_folder = '../../upload/students/' . $unique_image_name;
    } else {
        $unique_image_name = 'student.gif'; // Default image
    }

    // Insert into the database
    $insert = mysqli_query($conn, "INSERT INTO student (smart_card, name, contact, whatsapp,address, dob, sex, image, username, admission_fees, state) 
    VALUES ('$smart_card', '$name', '$contact', '$whatsapp', '$address', '$dob', '$sex', '$unique_image_name', '$username', '$admission_fees', 1)");

    if ($insert) {
        // Move the uploaded image to the designated folder if it exists
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            move_uploaded_file($image_tmp_name, $image_folder);
        }

        $res = [
            'status' => 200,
            'message' => 'Student Created Successfully'
        ];
    } else {
        $res = [
            'status' => 422,
            'message' => 'Student Not Created!'
        ];
    }

    echo json_encode($res);
    return;
}

if(isset($_POST['update_student'])) {
    
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);

    if (empty($name) || empty($username)) {
        $res = [
            'status' => 422,
            'message' => 'Some fields are missing'
        ];
        echo json_encode($res);
        return;
    }

    $sex = mysqli_real_escape_string($conn, $_POST['sex']);
    $smart_card = !empty($_POST['smart_card']) ? mysqli_real_escape_string($conn, $_POST['smart_card']) : "0";
    $dob = !empty($_POST['dob']) ? mysqli_real_escape_string($conn, $_POST['dob']) : date('Y-m-d');
    $contact = !empty($_POST['contact']) ? mysqli_real_escape_string($conn, $_POST['contact']) : "0";
    $whatsapp = !empty($_POST['whatsapp']) ? mysqli_real_escape_string($conn, $_POST['whatsapp']) : "0";
    $address = !empty($_POST['address']) ? mysqli_real_escape_string($conn, $_POST['address']) : "none";

    // Initialize the SQL query
    $sql = "UPDATE student SET smart_card='$smart_card', name='$name', contact='$contact', whatsapp='$whatsapp', address='$address', dob='$dob', sex='$sex', username='$username'";

    // Image fields handle
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $unique_image_name = bin2hex(random_bytes(10)) . '.' . $image_ext;
        $image_folder = '../../upload/students/' . $unique_image_name;

        // Append the image update to the SQL query
        $sql .= ", image='$unique_image_name'";
    }

    // Complete the SQL query
    $sql .= " WHERE id = '$id'";

    // Insert into the database
    $insert = mysqli_query($conn, $sql);

    if ($insert) {
        // Move the uploaded image to the designated folder if it exists
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            move_uploaded_file($image_tmp_name, $image_folder);
        }

        $res = [
            'status' => 200,
            'message' => 'Student Updated Successfully'
        ];
    } else {
        $res = [
            'status' => 422,
            'message' => 'Student Not Updated!'
        ];
    }

    echo json_encode($res);
    return;
}

if(isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    $insert = mysqli_query($conn, "UPDATE student SET state=0 WHERE id='$student_id'");

    if($insert) {
        $res = [
            'status' => 200,
            'message' => 'Student Removed Successfully'
        ];
        echo json_encode($res);
        return false;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Student Remove Failed !'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_POST['load_students'])) {

    $search = mysqli_query($conn, "SELECT id, name,contact,image FROM student WHERE state = 1");
    $data = '';
    if($search) {
        while($row = mysqli_fetch_assoc($search)) {
            // Concatenate rows instead of overwriting the $data variable
            $data .= "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['contact']."</td>
                        <td><img src='../upload/students/".$row['image']."' alt='Student Image' style='width: 30px; height: 30px;border-radius: 5px;'></td>
                        <td><button type='button' value='".$row['id']."' class='view'>View</button></td>
                        <td>
                            <button type='button' value='".$row['id']."' class='reset'>Reset Password</button>
                            <button type='button' value='".$row['id']."' class='edit'>Edit</button>
                            <button type='button' value='".$row['id']."' class='remove'>Remove</button>
                        </td>
                    </tr>";
        }
        echo $data;
    } else {
        $res = [
            'status' => 422,
            'message' => 'Student Search Failed !'
        ];
        echo json_encode($res);
    }
    return false;
}

if(isset($_GET['student_id'])) {
    $student_id = mysqli_real_escape_string($conn, $_GET['student_id']);

    $query = "SELECT * FROM student WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) == 1) {
        $student = mysqli_fetch_array($query_run);
        $res = [
            'status' => 200,
            'message' => 'Student Fetch Succesfully',
            'data' => $student
        ];
        echo json_encode($res);
        return false;
    } else {
        $res = [
            'status' => 404,
            'message' => 'Student Id Not Found !'
        ];
        echo json_encode($res);
        return false;
    }
}

?>
