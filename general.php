
<div id="generalinfo" class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="row general-header">
            <div class="col-md-12">
                <h3>General Info</h3>
            </div>
        </div>
        <div class="row bordered">
            <div class="col-xs-3">
                <div class="general-thumb" style="background-image:url(assets/images/carlu2.jpeg);" alt={{patient.name}}>

                </div>
            </div>
            <div class="col-xs-4">
                <h4>Carlu Hipkins</h4>
                <p>
                    Female, 86 years old<br />
                    Height: 6'6"<br />
                    Weight: 180 lbs
                </p>
            </div>
            <div class="col-xs-4">
                <h4> Latest Vitals</h4>
                <div class="urgent">Temperature: 101.2 F</div>
                <div class="warning"> Blood Pressure: 160/90 mmHg</div>
                <div>Heart Rate: 80 BPM</div>
            </div>
        </div>
    </div>
</div>

<div id="todolist" class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="row">
            <div class="col-md-12">
                <h3>Upcoming Tasks</h3>
            </div>
        </div>
        <div class="row bordered">
            <div class="col-md-12">
                <div class="row bordered todo-entry" ng-repeat="entry in todoList">
                    <div class="col-md-2">
                        {{entry.datetime}}
                    </div>
                    <div class="col-md-8">
                        {{entry.details}}
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-success btn-md">
                            Complete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="addEditTask-button">
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addEditTask-modal">Add Task</button>
        </div>
    </div>
</div>

<?php require 'modals/addEditTaskModal.php' ?>
