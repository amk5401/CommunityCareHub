<div class="panel-group col-md-8 col-md-offset-2" id="accordion">

    <div class="panel panel-default">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Prescriptions
                </h4>
            </div>
        </a>
        <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Dosage</th>
                            <th>Time</th>
                            <th>Recurrence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="p in prescriptionList">
                            <td>{{p.name}}</td>
                            <td>{{p.dosage}}</td>
                            <td>{{p.time}}</td>
                            <td>{{p.recurrence}}</td>
                        </tr>
                        <div class="row">
   							 <div class="col-md-6 col-md-offset-10" id="addPrescription-button">
        						<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#addPrescription-modal">Add Prescription</button>
   							 </div>
						</div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php require 'modals/addPrescriptionModal.php' ?>

    <div class="panel panel-default">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Conditions
                </h4>
            </div>
        </a>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Condition</th>
                            <th>Additional Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="c in conditionList">
                            <td>{{c.condition}}</td>
                            <td>{{c.additionalDetails}}</td>
                        </tr>

                        <div class="row">
   							 <div class="col-md-6 col-md-offset-10" id="addCondition-button">
        						<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#addCondition-modal">Add Condition</button>
   							 </div>
						</div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php require 'modals/addConditionModal.php' ?>
    
    <div class="panel panel-default">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Medical History
                </h4>
            </div>
        </a>
        <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
                <img src="./assets/images/graph1.png" alt="Weight Graph" style="width:400px;height:325px;"/>
                <img src="./assets/images/graph2.jpg" alt="Height Graph" style="width:400px;height:325px;" />
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3" id="addCheckupEvent-button">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addCheckupEvent-modal">Add Checkup</button>
    </div>
</div>

<?php require 'modals/addCheckupModal.php' ?>
