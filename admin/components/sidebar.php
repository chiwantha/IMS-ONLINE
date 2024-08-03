<div class="overlay" id="overlay"></div>
<div class="sidebar" id="sidebar">

    <div class="brand-logo">
        <h1>K-Chord</h1>
    </div>

    <hr>

    <div class="menu">

        <div class="item">
            <a href="index.php" class="sub-btn"><i class="fa-solid fa-book-open-reader"></i><span>Dasboard<i class="dropdown"></i></span></a>
        </div>

        <div class="item">
            <a class="sub-btn"><i class="fa-solid fa-folder-plus"></i><span>Master<i class="dropdown"></i></span></a>
            <div class="sub-menu">
                <a href="student.php" class="sub-item"><i class="fa-solid fa-users"></i><span>Student</span></a>
                <a href="teacher.php" class="sub-item"><i class="fa-solid fa-user-graduate"></i><span>Teacher</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-book-tanakh"></i><span>Subject</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-chalkboard-user"></i><span>RegClass</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-users-rectangle"></i><span>ExtClass</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-mug-hot"></i><span>Holidays</span></a>
            </div>
        </div>

        <div class="item">
            <a class="sub-btn"><i class="fa-solid fa-check"></i><span>Manage<i class="dropdown"></i></span></a>
            <div class="sub-menu">
                <a href="#" class="sub-item"><i class="fa-solid fa-graduation-cap"></i><span>Study</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-table"></i><span>TimeTable</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-comment-sms"></i><span>SmS</span></a>
            </div>
        </div>

        <div class="item">
            <a class="sub-btn"><i class="fa-solid fa-money-bill-transfer"></i><span>Transactions<i class="dropdown"></i></span></a>
            <div class="sub-menu">
                <a href="#" class="sub-item"><i class="fa-solid fa-file-invoice-dollar"></i><span>Invoice</span></a>
                <a href="#" class="sub-item"><i class="fa-regular fa-hourglass-half"></i><span>Pending</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-hand-holding-dollar"></i><span>Salary</span></a>
            </div>
        </div>

        <div class="item">
            <a class="sub-btn"><i class="fa-solid fa-people-group"></i><span>Attendance<i class="dropdown"></i></span></a>
            <div class="sub-menu">
                <a href="#" class="sub-item"><i class="fa-solid fa-user-check"></i><span>Smart</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-user-clock"></i><span>Manual</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-clipboard-user"></i><span>View</span></a>
            </div>
        </div>

        <div class="item">
            <a class="sub-btn"><i class="fa-solid fa-file-pdf"></i><span>Report<i class="dropdown"></i></span></a>
            <div class="sub-menu">
                <a href="#" class="sub-item"><i class="fa-solid fa-file-pdf"></i><span>Student</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-file-pdf"></i><span>Class</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-file-pdf"></i><span>Attendance</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-file-pdf"></i><span>Card_Portal</span></a>
            </div>
        </div>

        <div class="item">
            <a class="sub-btn"><i class="fa-solid fa-gear"></i><span>System<i class="dropdown"></i></span></a>
            <div class="sub-menu">
                <a href="#" class="sub-item"><i class="fa-solid fa-server"></i><span>Database</span></a>
                <a href="#" class="sub-item"><i class="fa-regular fa-image"></i><span>ImageTool</span></a>
                <a href="#" class="sub-item"><i class="fa-solid fa-satellite-dish"></i><span>Devices</span></a>
                <a href="#" class="sub-item"><i class="fas fa-table"></i><span>Settings</span></a>
            </div>
        </div>

        <div class="item">
            <a href="#"><i class="fa-solid fa-info-circle"></i><span>Help</span></a>
        </div>
        
    </div>

</div>

<?php
    include_once '../config/links.php';
?>

<script type="text/javascript">

    $(document).ready(function() {
        $('.sub-btn').click(function() {
            // Hide any open sub-menu
            $('.sub-menu').not($(this).next('.sub-menu')).slideUp();
            // Toggle the clicked sub-menu
            $(this).next('.sub-menu').slideToggle();
            // Rotate the dropdown icon
        });
    });
    
</script>