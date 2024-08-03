<?php
    include '../config/config.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Chord-IMS</title>

    <meta name="theme-color" content="#3F50FF">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#3F50FF">

    <link href="../Upload/logo.png" rel="icon">
    <link href="../Upload/logo.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="../style/css/style.css"/>
    <link rel="stylesheet" href="../style/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="../style/css/all.min.css"/>
    <link rel="stylesheet" href="../style/css/sidebar.css"/>
    <link rel="stylesheet" href="../style/css/datatable.css"/>
    <link rel="stylesheet" href="../style/css/header.css"/>
    <link rel="stylesheet" href="../style/css/action-bar.css"/>
    <link rel="stylesheet" href="../style/css/modal-form.css"/>
    <link rel="stylesheet" href="../style/css/profile.css"/>

    <?php 
        include_once '../style/css/online_css.php';
    ?>  
</head>

<body style="background: #ebebeb;">
    
    <?php 
        include_once 'components/sidebar.php';
    ?>

    <!-----------------------------main content---------------------------->

    <div class="main--content">

        <!-----------------------------header content---------------------------->

        <div class="header--wrapper">
            <div class="d-flex gap-2 align-items-center" style="align-content: center;">
                <div>
                    <button id="sidebarToggleTop" class="btn d-xl-none mr-3 sidebarToggleTop">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="header--title align-items-center">
                    <span>Student Manage</span>
                </div>
            </div>
            <div class="user--info">
                <a href="index.php" class="brand-name" style="text-decoration: none;"><h1>K-CHORD</h1></a>
            </div>     
        </div>

        <!-----------------------------control content---------------------------->

        <div class="action-bar">
            <div class="row">
                <div class="col-sm-8 mb-3">
                    <input type="text" id="studentSearch" class="form-control" placeholder="search by name">
                </div>
                <div class="col-sm-4 d-flex gap-2">
                    <button class="btn btn-success w-100 mb-3" data-bs-toggle="modal" data-bs-target="#studentregistrationmodal" data-bs-whatever="@mdo">New</button>
                    <button class="btn btn-danger w-100 mb-3">Bulk</button>
                </div>
            </div>
        </div>

        <!-----------------------------reg form content---------------------------->

        <div class="modal fade" id="studentregistrationmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Student</h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form id="studentForm" class="row" method="post" role="form" enctype="multipart/form-data">

                            <div class="col-lg-10 controls">

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="form_name">Student Id</label>
                                            <input id="form_name" type="text" name="student_id" class="form-control" placeholder="auto genarate" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="form_email">Name</label>
                                            <input id="form_email" type="text" name="student_name" class="form-control" placeholder="Kasun Chwiantha" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="form_name">Address</label>
                                            <input id="form_name" type="text" name="student_address" class="form-control" placeholder="361/23 parangoda, dekatana" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-6"> <!-- Adjust the column size as needed -->
                                                <div class="form-group">
                                                    <label for="form_email">Contact</label>
                                                    <input id="form_email" type="text" name="student_contact" class="form-control" placeholder="0788806670" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-6"> <!-- Adjust the column size as needed -->
                                                <div class="form-group">
                                                    <label for="form_email">Parent</label>
                                                    <input id="form_email" type="text" name="student_parent" class="form-control" placeholder="0761294262" required="required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="form_name">Date of Birth</label>
                                            <input id="form_name" type="date" name="student_dob" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">                       
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="form_email">Sex</label>
                                            <select class="form-select" name="student_sex" aria-label="Default select example">
                                                <option value="Male" selected>Male</option>
                                                <option value="Female">Female</option>                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="form_email">Student Card</label>
                                            <input id="form_email" type="text" name="student_card" class="form-control" placeholder="0000000000" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="student_image">Student Image</label>
                                            <input type="file" class="form-control" name="image" id="imgInp">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-2" style="align-content: center;">
                                <div class="mt-3">
                                    <img id="blah" src="../Upload/logo.png" alt="Student Image" style="width: 100%; height: auto; border-radius: 10px;">
                                </div>
                            </div>
                        
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="submit" name="submit" class="btn btn-success btn-send" value="Save">Save Student</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-----------------------------edit form content---------------------------->

        <div class="modal fade" id="studenteditmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Student</h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form id="studentEditForm" class="row" method="post" role="form" enctype="multipart/form-data">

                            <div class="col-lg-10 controls">

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="form_name">Student Id</label>
                                            <input type="text" name="student_id" id="student_id" class="form-control" placeholder="auto genarate" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="form_email">Name</label>
                                            <input type="text" name="student_name" id="student_name" class="form-control" placeholder="Kasun Chwiantha" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="form_name">Address</label>
                                            <input type="text" name="student_address" id="student_address" class="form-control" placeholder="361/23 parangoda, dekatana" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-6"> <!-- Adjust the column size as needed -->
                                                <div class="form-group">
                                                    <label for="form_email">Contact</label>
                                                    <input type="text" name="student_contact" id="student_contact" class="form-control" placeholder="0788806670" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-6"> <!-- Adjust the column size as needed -->
                                                <div class="form-group">
                                                    <label for="form_email">Parent</label>
                                                    <input type="text" name="student_parent" id="student_parent" class="form-control" placeholder="0761294262" required="required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="form_name">Date of Birth</label>
                                            <input type="date" name="student_dob" id="student_dob" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">                       
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="form_email">Sex</label>
                                            <select class="form-select" name="student_sex" id="student_sex" aria-label="Default select example">
                                                <option value="Male" selected>Male</option>
                                                <option value="Female">Female</option>                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="form_email">Student Card</label>
                                            <input type="text" name="student_card" id="student_card" class="form-control" placeholder="0000000000" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="student_image">Student Image</label>
                                            <input type="file" class="form-control" name="image" id="imgInpedit">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-2" style="align-content: center;">
                                <div class="mt-3">
                                    <img id="blahedit" class="edit_exsisting_image" src="../Upload/logo.png" alt="Student Image" style="width: 100%; height: auto; border-radius: 10px;">
                                </div>
                            </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="submit" name="submit" class="btn btn-success btn-send" value="Save">Update Student</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-----------------------------table content---------------------------->

        <div class="table--wrapper">
            <div class="table--container">
                <table id="student_table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Image</th>
                            <th>Account</th>
                            <th>Options</th>
                        </tr>                       
                    </thead>
                    <tbody id="student_table_body">
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-----------------------------toast container---------------------------->

        <div class="toast-container position-fixed bottom-0 end-0 p-3">

            <!-----------------------------toast success---------------------------->
            <div class="toast align-items-center text-bg-success border-0 p-1" role="alert" aria-live="assertive" aria-atomic="true" id="successToast">
                <div class="d-flex">
                    <div class="toast-body">
                        <strong>Success!</strong>
                        <span id="successMessage"></span>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>

            <!-----------------------------toast success---------------------------->
            <div class="toast align-items-center text-bg-danger border-0 p-1" role="alert" aria-live="assertive" aria-atomic="true" id="errorToast">
                <div class="d-flex">
                    <div class="toast-body">
                        <strong>Error !</strong>
                        <span id="errorMessage"></span>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>

        </div>

        <!-----------------------------profile content---------------------------->

        <div class="modal fade" id="studentprofilemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Student Profile</h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body row">
                        <div class="col-lg-4 align-items-center">
                            <img id="student_profile_image" class="profile-picture" alt="" srcset="">
                        </div>
                        <div class="col-lg-8">
                            <div class="details-container">
                                <h6 id="student_profile_id" class="profile_id"></h6>
                                <h6 id="student_profile_card" class="profile_card"></h6>
                                <h4 id="student_profile_name" class="profile_name"></h4>
                                <h6 id="student_profile_dob" class="profile_dob"></h6>
                                <h6 id="student_profile_sex" class="profile_sex"></h6>
                                <h6 id="student_profile_contact" class="profile_contact"></h6>
                                <h6 id="student_profile_parent" class="profile_contact2"></h6>
                                <h6 id="student_profile_address" class="profile_address"></h6>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="w-50 btn btn-success">Download</button>
                                <button class="w-50 btn smart-card-download" style="color: #fff;">Smart Card</button>
                                </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    
    </div>

</body>

<script src="../style/js/my-script.js"></script>
<script src="../style/js/func.js"></script>

<?php
    include_once '../config/links.php';
?>

<script>
    
    //---------------------------------------------------------------------------------Page Load

    function load_students() {
        $.ajax({
            type: 'post',
            url: 'ajax/process_student.php',
            data: {
                'load_students' : true
            },
            success: function (response) {                                        
                $('#student_table_body').html(response);
                table_pagination('#student_table', '#student_table tbody');  
            }
        })
    }

    $(document).ready(function(){  	

        load_students();

        //---------------------------------------------------------------------------------Search-Intergration

        setup_Table_Search('studentSearch', 'student_table');

        //---------------------------------------------------------------------------------Image-Imputs

        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }

        imgInpedit.onchange = evt => {
            const [file] = imgInpedit.files
            if (file) {
                blahedit.src = URL.createObjectURL(file)
            }
        }

        //---------------------------------------------------------------------------------Forms

        $(document).on('submit', '#studentForm', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_student", true)
            $.ajax({
                type:'post',
                url:'ajax/process_student.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {

                    var res = $.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorToast').toast("show");
                        $('#errorMessage').html(res.message);
                    } else if(res.status == 200) {
                        $('#successToast').toast("show");
                        $('#successMessage').html(res.message);
                        $('#studentForm')[0].reset();
                        $('#student_table').load(location.href + " #student_table", function() {
                            load_students();
                        });
                    }

                }
            })
        });

        $(document).on('submit', '#studentEditForm', function(e) {
            e.preventDefault();
            var modal_id = '#studenteditmodal';

            var formData = new FormData(this);
            formData.append("update_student", true)
            $.ajax({
                type:'post',
                url:'ajax/process_student.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    var res = $.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorToast').toast("show");
                        $('#errorMessage').html(res.message);
                    } else if(res.status == 200) {
                        $('#successToast').toast("show");
                        $('#successMessage').html(res.message);
                        $('#student_table').load(location.href + " #student_table", function() {
                            load_students(); // Reinitialize pagination after table reload
                        });
                        $(modal_id).modal('hide');   
                    }
                }
            });
        });

        //---------------------------------------------------------------------------------Page Buttons

        $(document).on('click', '.edit', function(e) {
            var modal_id = '#studenteditmodal';

            var student_id = $(this).val();
            $.ajax({
                type: 'GET',
                url: 'ajax/process_student.php?student_id=' + student_id, // Added '=' after 'student_id'
                success: function(response) {
                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        alert(res.message);
                    } else if(res.status == 200) {
                        //alert(res.data.name);

                        $('#student_id').val(res.data.id);
                        $('#student_name').val(res.data.name);
                        $('#student_address').val(res.data.address);
                        $('#student_contact').val(res.data.contact);
                        $('#student_parent').val(res.data.parent);
                        $('#student_dob').val(res.data.dob);
                        $('#student_sex').val(res.data.gender);
                        $('#student_card').val(res.data.rfid);
                        $('.edit_exsisting_image').attr('src', '../Upload/students/' + res.data.image);

                        $(modal_id).modal('show');         
                    }
                }
            });
        });

        $(document).on('click', '.remove', function(e) {
            e.preventDefault();

            if (confirm('Are you sure you want to delete student ?')) {
                //alert('am in');

                var student_id = $(this).val();
                $.ajax({
                    type: 'post',
                    url: 'ajax/process_student.php',
                    data: {
                        'delete_student' : true,
                        'student_id' : student_id
                    },
                    success: function (response) {    
                        var res = $.parseJSON(response);
                        if (res.status == 500) {
                            //alert('hellow');
                            //alert(res.message);
                            $('#errorToast').toast("show");
                            $('#errorMessage').html(res.message);
                        } else if(res.status == 200) {                                                         
                            $('#successToast').toast("show");
                            $('#successMessage').html(res.message);
                            $('#student_table').load(location.href + " #student_table", function() {
                                load_students();
                            });                       
                        }
                    }
                })
            }
            
        });

        $(document).on('click', '.view', function(e) {
            var modal_id = '#studentprofilemodal';

            var student_id = $(this).val();
            $.ajax({
                type: 'GET',
                url: 'ajax/process_student.php?student_id=' + student_id, // Added '=' after 'student_id'
                success: function(response) {
                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        alert(res.message);
                    } else if(res.status == 200) {
                        //alert(res.data.name);

                        $('#student_profile_id').html('Index : ' +res.data.id);
                        $('#student_profile_name').html('Name : ' +res.data.name);
                        $('#student_profile_address').html('Address : ' +res.data.address);
                        $('#student_profile_contact').html('Contact : ' +res.data.contact);
                        $('#student_profile_parent').html('Parents : ' +res.data.parent);
                        $('#student_profile_dob').html('Date of Birth : ' +res.data.dob);
                        $('#student_profile_sex').html('Sex : ' +res.data.gender);
                        $('#student_profile_card').html('Smart Card : ' +res.data.rfid);
                        $('#student_profile_image').attr('src', '../Upload/students/' + res.data.image);

                        $(modal_id).modal('show');         
                    }
                }
            });
        });

        $('#sidebarToggleTop').on('click', function() {
            $('#sidebar').addClass('open');
            $('#overlay').toggle();
        });

        $('#closeBtn, #overlay').on('click', function() {
            $('#sidebar').removeClass('open');
            $('#overlay').hide();
        });
        
    });


</script>

</html>