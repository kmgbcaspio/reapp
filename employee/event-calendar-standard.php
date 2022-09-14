<html lang="en">
<head>
    <?php include_once '../partials/head.php' ?>
    <link rel="stylesheet" href="../assets/css/event-calendar.css">
    <link rel="stylesheet" href="../assets/css/jquery.datetimepicker.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../assets/lib/fullcalendar-3.9.0/Content/fullcalendar.min.css">

</head>
<body>
    <?php include_once '../partials/navbar.php' ?>
    <div class="wrapper p-4">
        <div class="header mb-4">
            <h3>Event Calendar (Standard)</h3>
            <ol class="breadcrumb bg-transparent small p-0">
                <li class="breadcrumb-item"><a href="./dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Event Calendar (Standard)</li>
            </ol>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body overflow-auto">
                        <!-- Event Calendar DataPage -->
                    </div>
                    <div class="loader">
                        <img src="../assets/img/loader.gif"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once '../partials/modal.php' ?>
    <?php include_once '../partials/footer.php' ?>
    <script src="../assets/js/moment.js"></script>
    <script src="../assets/lib/fullcalendar-3.9.0/Scripts/fullcalendar.min.js"></script>
    <script src="../assets/js/disp-event-standard-calendar.js"></script>
    
    <script>
        $(document).ready(function() {
            activePage('calendar-standard');
        });
    </script>
</body>
</html>