<div class="modal fade" id="addPrescription-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Prescription</h4>
            </div>
            <form name="prescriptionForm" ng-submit="newPrescription()" role="form" class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name-text" class="col-md-3 control-label">Name</label>
                        <div class="col-md-7">
                            <input id="name-text" type="text" ng-model="pre.name" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dosage-text" class="col-md-3 control-label">Dosage</label>
                        <div class="col-md-7">
                            <input id="dosage-text" type="text" ng-model="pre.dosage" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="time-text" class="col-md-3 control-label">Time</label>
                        <div class="col-md-7">
                            <input id="time-text" type="text" ng-model="pre.time" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                       <label for="recurrence-text" class="col-md-3 control-label">Recurrence</label>
                        <div class="col-md-7">
                            <input id="recurrence-text" type="text" ng-model="pre.recurrence" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <input type="submit" value="Save" class="btn btn-primary"></input>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
