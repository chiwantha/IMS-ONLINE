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
    <link rel="stylesheet" href="../style/css/tab.css"/>
    
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

                        <div class="controls mt-2" id="studentEditFormBody">

                            <div class="separator">
                                <span>Idenfication</span>
                            </div>

                            <div class="row ">
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <input id="id" type="text" name="id" class="form-control" placeholder="student id : auto" readonly
                                        style="background: #FFCCCB;">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input id="smart_card" type="text" name="smart_card" class="form-control" placeholder="smart card"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                            </div>

                            <div class="separator">
                                <span>Details</span>
                            </div>

                            <div class="row">
                                <div class="col-sm-8 mb-3">
                                    <div class="form-group">
                                        <input id="name" type="text" name="name" class="form-control" placeholder="full name" required="required"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <input id="dob" type="date" name="dob" placeholder="dob" class="form-control" required="required"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-select" id="sex" name="sex" aria-label="Default select example" aria-placeholder="sex"
                                        style="background: #F5F5F5;">
                                            <option value="1" selected>Male</option>
                                            <option value="0">Female</option>                               
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="separator">
                                <span>Contact</span>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <input id="contact" type="text" name="contact" class="form-control" placeholder="student contact - 078xxx6670" required="required"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <input id="whatsapp" type="text" name="whatsapp" class="form-control" placeholder="whatsapp/parent contact - 076xxx4262" 
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input id="address" type="text" name="address" class="form-control" placeholder="Address" 
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                            </div>

                            <div class="separator">
                                <span>Account</span>
                            </div>

                            <div class="row">  
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <input id="username_edit" type="text" name="username" class="form-control" placeholder="username" required="required"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image" id="imgInpedit" placeholder="Image"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>  
                                <div class="col-lg-2 mb-3">
                                    <img id="blahedit" src="../upload/assets/student.gif" alt="Student Image" 
                                    style="width: 100%; height: auto; border-radius: 10px;aspect-ratio: 1 / 1;">
                                </div>                           
                            </div>

                        </div>

                        <div class="d-flex mb-3 d-none" style="justify-content: center;" id="Editprocessing">
                            <img src="../upload/assets/waiting.gif" alt="waiting.gif" class="loading_image mt-4">
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

        <!-----------------------------tab content---------------------------->

        <div class="table--wrapper">

            <ul class=" nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab" aria-controls="simple-tabpanel-0" aria-selected="true">Students</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab" aria-controls="simple-tabpanel-1" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="simple-tab-2" data-bs-toggle="tab" href="#simple-tabpanel-2" role="tab" aria-controls="simple-tabpanel-2" aria-selected="false">Admission</a>
                </li>
            </ul>

            <div class="tab-content" id="tab-content">

                <div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">

                    <div class="mb-3 mt-3">
                        <input type="text" id="studentSearch" class="form-control" placeholder="search by name" style="background: #ebebeb;">
                    </div>

                    <div class="">
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
                            <div class="d-flex mb-3 d-none" style="justify-content: center;" id="loadprocessing">
                                <img src="../upload/assets/waiting.gif" alt="waiting.gif" class="loading_image mt-4">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
                    <div class="row mt-2">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body" style="background: #F5F5F5;">
                                    <div class="mb-3">
                                        <img style="border-radius: 8px;" src="../upload/assets/id.png" class="w-100" alt="" srcset="">
                                    </div>

                                    <hr>

                                    <button class="btn btn-success w-100"> Download Id Artwork</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body" style="background: #F5F5F5;">

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Index</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">000003</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Smart Card</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">0123456789</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">Dumindi Thakshila</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Date of Birth</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">2003-04-29</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Sex</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">Female</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Student Contact</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">0788806670</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Parent Contact</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">0761294262</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">361/23 parangoda, Dekatna</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Usernmae</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">ThakshilaDumindi1976</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Password</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">**********</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">

                    <form id="studentForm" class="m-1" method="post" role="form" enctype="multipart/form-data">

                        <div class="controls mt-2">

                            <div class="separator">
                                <span>Idenfication</span>
                            </div>

                            <div class="row ">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input id="form_email" type="number" name="admission_fees" class="form-control" placeholder="Admission Fees" required="required"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <input id="form_email" type="text" name="id" class="form-control" placeholder="student id : auto" disabled
                                        style="background: #FFCCCB;">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input id="form_email" type="text" name="smart_card" class="form-control" placeholder="smart card"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                            </div>

                            <div class="separator">
                                <span>Details</span>
                            </div>

                            <div class="row">
                                <div class="col-sm-8 mb-3">
                                    <div class="form-group">
                                        <input id="full_name" type="text" name="name" class="form-control" placeholder="full name" required="required"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <input id="form_name" type="date" name="dob" placeholder="dob" class="form-control" required="required"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select class="form-select" name="sex" aria-label="Default select example" aria-placeholder="sex"
                                        style="background: #F5F5F5;">
                                            <option value="1" selected>Male</option>
                                            <option value="0">Female</option>                               
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="separator">
                                <span>Contact</span>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <input id="form_email" type="text" name="contact" class="form-control" placeholder="student contact - 078xxx6670" required="required"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <input id="form_email" type="text" name="whatsapp" class="form-control" placeholder="whatsapp/parent contact - 076xxx4262" 
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input id="form_email" type="text" name="address" class="form-control" placeholder="Address" 
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                            </div>

                            <div class="separator">
                                <span>Account</span>
                            </div>

                            <div class="row">  
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <input id="username" type="text" name="username" class="form-control" placeholder="username" required="required"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <input id="form_email" type="text" name="password" class="form-control" value="student.kchord.com" disabled
                                        style="background: #FFCCCB;">
                                    </div>
                                </div>  
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image" id="imgInp" placeholder="Image"
                                        style="background: #F5F5F5;">
                                    </div>
                                </div>  
                                <div class="col-lg-2 mb-3">
                                    <img id="blah" src="../upload/assets/student.gif" alt="Student Image" style="width: 100%; height: auto; border-radius: 10px;aspect-ratio: 1 / 1;">
                                </div>                           
                            </div>

                        </div>

                        <div>
                            <button type="reset" class="reset-form btn btn-danger mt-1" value="Save">Reset</button>
                            <button type="submit" id="submit" name="submit" class="btn btn-success mt-1" value="Save">Save Student</button>
                        </div>

                    </form>

                    <div class="d-flex mb-3 d-none" style="justify-content: center;" id="processing">
                        <img src="../upload/assets/waiting.gif" alt="waiting.gif" class="loading_image mt-4">
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
        
        $('#loadprocessing').removeClass('d-none');

        $.ajax({
            type: 'post',
            url: 'ajax/process_student.php',
            data: {
                'load_students' : true
            },
            success: function (response) {                                        
                $('#student_table_body').html(response);
                table_pagination('#student_table', '#student_table tbody');
                $('#loadprocessing').addClass('d-none');
            }
        })
    }

    $(document).ready(function(){

        load_students();

        function generateRandomString(length) {
            var characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
            var result = '';
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            return result;
        }

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

        //---------------------------------------------------------------------------------Image-Imputs-resize

        function resizeImage(file, targetSizeKB, callback) {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function (event) {
                const img = new Image();
                img.src = event.target.result;
                img.onload = function () {
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');

                    canvas.width = img.width;
                    canvas.height = img.height;
                    ctx.drawImage(img, 0, 0);

                    let quality = 0.7;
                    let resizedImageDataUrl;

                    do {
                        resizedImageDataUrl = canvas.toDataURL('image/jpeg', quality);
                        quality -= 0.05;
                    } while (resizedImageDataUrl.length / 1024 > targetSizeKB && quality > 0.1);

                    const resizedImageBlob = dataURLToBlob(resizedImageDataUrl);
                    callback(resizedImageBlob);
                };
            };
        }

        function dataURLToBlob(dataURL) {
            const byteString = atob(dataURL.split(',')[1]);
            const mimeString = dataURL.split(',')[0].split(':')[1].split(';')[0];
            const ab = new ArrayBuffer(byteString.length);
            const ia = new Uint8Array(ab);
            for (let i = 0; i < byteString.length; i++) {
                ia[i] = byteString.charCodeAt(i);
            }
            return new Blob([ab], { type: mimeString });
        }

        //---------------------------------------------------------------------------------Forms-admission

        $(document).on('submit', '#studentForm', function(e) {
            e.preventDefault();

            const form = this;
            const fileInput = document.getElementById('imgInp');
            const file = fileInput.files[0];

            if (file && file.size > 1024 * 1024) { // Check if the file is larger than 1MB
                alert('The image is larger than 1MB. It will be resized.');
                resizeImage(file, 100, function(resizedImageBlob) {
                    const formData = new FormData(form);
                    formData.append("image", resizedImageBlob, 'resized-image.jpg');
                    submitForm(formData);
                });
            } else {
                const formData = new FormData(form);
                if (file) {
                    formData.append("image", file);
                }
                submitForm(formData);
            }
        });


        function submitForm(formData) {
            // alert('ok');
            $('#studentForm').addClass('d-none');
            $('#processing').removeClass('d-none');

            formData.append("save_student", true);
            $.ajax({
                type: 'post',
                url: 'ajax/process_student.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    var res = $.parseJSON(response);
                    if (res.status == 422) {
                        $('#studentForm').removeClass('d-none');
                        $('#processing').addClass('d-none');
                        $('#errorToast').toast("show");
                        $('#errorMessage').html(res.message);
                    } else if (res.status == 200) {
                        $('#studentForm').removeClass('d-none');
                        $('#processing').addClass('d-none');

                        $('#successToast').toast("show");
                        $('#successMessage').html(res.message);

                        $('#studentForm')[0].reset();
                        $('#blah').attr('src', '../upload/students/student.gif');
                        $('#student_table').load(location.href + " #student_table", function() {
                            load_students();
                        });
                    }
                }
            });
        }

        //---------------------------------------------------------------------------------update-update

        $(document).on('submit', '#studentEditForm', function(e) {
            e.preventDefault();   

            const form = this;
            const fileInput = document.getElementById('imgInpedit');
            const file = fileInput.files[0];

            if (file && file.size > 1024 * 1024) { // Check if the file is larger than 1MB
                alert('The image is larger than 1MB. It will be resized.');
                resizeImage(file, 100, function(resizedImageBlob) {
                    const formData = new FormData(form);
                    formData.append("image", resizedImageBlob, 'resized-image.jpg');
                    submitEditForm(formData);
                });
            } else {
                const formData = new FormData(form);
                if (file) {
                    formData.append("image", file);
                }
                submitEditForm(formData);
            }
            
        });

        function submitEditForm(formData) {
            $('#studentEditFormBody').addClass('d-none');
            $('#Editprocessing').removeClass('d-none');
            var modal_id = '#studenteditmodal';

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
                        $('#studentEditFormBody').removeClass('d-none');
                        $('#Editprocessing').addClass('d-none');

                        $('#errorToast').toast("show");
                        $('#errorMessage').html(res.message);
                    } else if(res.status == 200) {
                        $('#studentEditFormBody').removeClass('d-none');
                        $('#Editprocessing').addClass('d-none');

                        $('#successToast').toast("show");
                        $('#successMessage').html(res.message);

                        $('#studentEditForm')[0].reset();
                        $('#student_table').load(location.href + " #student_table", function() {
                            load_students(); // Reinitialize pagination after table reload
                        });
                        $(modal_id).modal('hide');   
                    }
                }
            });
        }

        //---------------------------------------------------------------------------------Page Buttons

        $(document).on('click', '.reset-form', function(e) {
            document.getElementById('studentForm').reset();
            $('#blah').attr('src', '../upload/assets/student.gif');
        });

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

                        $('#id').val(res.data.id);
                        $('#smart_card').val(res.data.smart_card);
                        $('#name').val(res.data.name);
                        $('#dob').val(res.data.dob);
                        $('#sex').val(res.data.sex);
                        $('#contact').val(res.data.contact);
                        $('#whatsapp').val(res.data.whatsapp);
                        $('#address').val(res.data.address);
                        $('#username_edit').val(res.data.username);
                        $('#blahedit').attr('src', '../upload/students/' + res.data.image);

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

        //---------------------------------------------------------------------------------Username genarator

        document.getElementById('full_name').addEventListener('input', function() {
            var fullName = this.value.trim();
            var firstName = fullName.split(' ')[0];

            // Generate a random 10-character username with letters and numbers
            var username = firstName.toLowerCase() + generateRandomString(10 - firstName.length);

            // Fill the username field
            document.getElementById('username').value = username;
        });
        
    });


</script>

</html>