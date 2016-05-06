<?php include 'header.php' ?>
    <ul class="nav nav-tabs nav-justified">
        <li role="presentation"><a data-toggle="tab" href="#Medical"><h4>Medical</h4></a></li>
        <li role="presentation" class="active"><a data-toggle="tab" href="#General"><h4>General</h4></a></li>
        <li role="presentation"><a data-toggle="tab" href="#Personal"><h4>Personal</h4></a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane" id="Medical">
            <?php include 'medical.php' ?>
        </div>
        <div class="tab-pane active" id="General">
            <?php include 'general.php' ?>
        </div>
        <div class="tab-pane" id="Personal">
            <?php include 'personal.php' ?>
        </div>
    </div>

<?php include 'footer.php' ?>
