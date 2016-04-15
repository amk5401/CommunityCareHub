<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="row bordered">
            <div class="col-xs-3">
                <div class="general-thumb" style="background-image:url(assets/images/carlu2.jpeg);" alt={{patient.name}}>

                </div>
            </div>
            <div class="col-xs-3">
                <h4>Carlu Hipkins</h4>
                <p>
                    Female, 86 years old<br />
                    Height: 6'6"<br />
                    Weight: 180 lbs
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3" id="addEditTask-button">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addEditTask-modal">Add/Edit Task</button>
    </div>
</div>

<?php require 'modals/addEditTaskModal.php' ?>
