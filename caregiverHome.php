<?php include 'header.php' ?>
    <ul class="nav nav-tabs nav-justified">
        <li role="presentation" class="active"><a data-toggle="tab" href="#PatientList">Patient List</a></li>
        <li role="presentation"><a data-toggle="tab" href="#StaffCalendar">Staff Calendar</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="PatientList">
            <?php include 'patientList.php' ?>
        </div>
        <div class="tab-pane" id="StaffCalendar">
            <?php include 'staffCalendar.php' ?>
        </div>
    </div>

<?php include 'footer.php' ?>
