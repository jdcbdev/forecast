<nav id="sidebarMenu" class="col-md-3 col-lg-3 col-xl-2 d-md-block background-color-green sidebar collapse">
    <div class="position-sticky h-100">
        <ul class="nav flex-column">
            <?php
                if($_SESSION['logged-in'] == 'student'){
            ?>
            <li class="nav-item">
                <a href="application.php" class="nav-link <?php echo $application; ?>" title="Applications">
                    <i class='bx bx-send'></i>
                    <span class="links-name">Applications</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link <?php echo $profile; ?>" title="Profile">
                    <i class='bx bx-user'></i>
                    <span class="links-name">Profile</span>
                </a>
            </li>
            <?php
                }else{
            ?>
            <li class="nav-item">
                <a href="../admin/dashboard.php" class="nav-link <?php echo $dashboard; ?>" title="Dashboard">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links-name">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="application.php" class="nav-link <?php echo $application; ?>" title="Applications">
                    <i class='bx bx-send'></i>
                    <span class="links-name">Applications</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link <?php echo $screening; ?>" title="Screening">
                    <i class='bx bx-phone-call'></i>
                    <span class="links-name">Screening</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../programs/programs.php" class="nav-link <?php echo $programs; ?>" title="Programs">
                    <i class='bx bx-book-reader'></i>
                    <span class="links-name">Programs</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../faculty/faculty.php" class="nav-link <?php echo $faculty; ?>" title="Faculty">
                    <i class='bx bx-group' ></i>
                    <span class="links-name">Faculty</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link <?php echo $settings; ?>" title="Settings">
                    <i class='bx bx-cog'></i>
                    <span class="links-name">Settings</span>
                </a>
            </li>
            <?php
                }
            ?>
            <hr class="line">
            <li id="logout-link" class="nav-item">
                <a class="logout-link nav-link" href="../account/logout.php" title="Logout">
                    <i class='bx bx-log-out'></i>
                    <span class="links-name">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div id="logout-dialog" class="dialog d-none" title="Logout">
    <p><span>Are you sure you want to logout?</span></p>
</div>

<script>
    // $(document).ready(function() {
    //     $("#logout-dialog").dialog({
    //         resizable: false,
    //         draggable: false,
    //         height: "auto",
    //         width: 400,
    //         modal: true,
    //         autoOpen: false
    //     });
    //     $(".logout-link").on('click', function(e) {
    //         e.preventDefault();
    //         var theHREF = $(this).attr("href");

    //         $("#logout-dialog").dialog('option', 'buttons', {
    //             "Yes" : function() {
    //                 window.location.href = theHREF;
    //             },
    //             "No" : function() {
    //                 $(this).dialog("close");
    //             }
    //         });

    //         $("#logout-dialog").dialog("open");
    //     });
    // });
</script>