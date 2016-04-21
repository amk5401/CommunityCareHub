<div class="modal fade" id="addCheckupEvent-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Checkup</h4>
            </div>
            <div class="modal-body">
                <form ng-submit="newCheckup()" class="form-horizontal">
                    <div class="form-group">
                        <label for="height-text" class="col-md-3 control-label">Height</label>
                        <div class="col-md-7">
                            <input id="height-text" type="text" ng-model="height" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="weight-text" class="col-md-3 control-label">Weight</label>
                        <div class="col-md-7">
                            <input id="weight-text" type="text" ng-model="weight" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bloodPressure-text" class="col-md-3 control-label">Blood Pressure</label>
                        <div class="col-md-7">
                            <input id="bloodPressure-text" type="text" ng-model="bloodPressure" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="heartRate-text" class="col-md-3 control-label">Heart Rate</label>
                        <div class="col-md-7">
                            <input id="heartRate-text" type="text" ng-model="heartRate" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="temperature-text" class="col-md-3 control-label">Temperature</label>
                        <div class="col-md-7">
                            <input id="temperature-text" type="text" ng-model="temperature" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="notes-text" class="col-md-3 control-label">Additional Notes</label>
                        <div class="col-md-7">
                            <textarea id="notes-text" type="text" ng-model="notes" class="form-control" aria-describedby="event-field"></textarea>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>
</div>
