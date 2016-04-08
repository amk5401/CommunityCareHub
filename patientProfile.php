<?php include 'header.php' ?>
    <ul class="nav nav-tabs nav-justified">
        <li role="presentation" class="active"><a data-toggle="tab" href="#Medical">Medical</a></li>
        <li role="presentation"><a data-toggle="tab" href="#General">General</a></li>
        <li role="presentation"><a data-toggle="tab" href="#Personal">Personal</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="Medical">
            <?php include 'medical.php' ?>
        </div>
        <div class="tab-pane" id="General">
            <?php include 'general.php' ?>
        </div>
        <div class="tab-pane" id="Personal">
            <?php include 'personal.php' ?>
        </div>
    </div>

<?php include 'footer.php' ?>
