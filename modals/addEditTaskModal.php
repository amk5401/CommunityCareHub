<div class="modal fade" id="addEditTask-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add or Edit Task</h4>
            </div>
            <div class="modal-body">
                <form ng-submit="newTaskEvent()" class="form-horizontal">
                    <div class="form-group">
                        <label for="patient-text" class="col-md-3 control-label">Patient</label>
                        <div class="col-md-7">
                            <input id="patient-text" type="text" ng-model="patient" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="taskCreator-text" class="col-md-3 control-label">Task Creator</label>
                        <div class="col-md-7">
                            <input id="taskCreator-text" type="text" ng-model="taskCreator" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="taskName-text" class="col-md-3 control-label">Task Name</label>
                        <div class="col-md-7">
                            <input id="taskName-text" type="text" ng-model="taskName" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="taskDescription-text" class="col-md-3 control-label">Task Description</label>
                        <div class="col-md-7">
                            <input id="taskDescription-text" type="text" ng-model="taskDescription" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="event-date" class="col-md-3 control-label">Date</label>
                        <div id="taskDatepicker" class="col-md-7" data-date-format="dd-mm-yyyy"></div>
                        <!--
                        <div class="input-append date" id="taskDatepicker" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                            <input class="span2" id="event-date" size="16" type="text" value="12-02-2012">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        -->
                    </div>
                    <div class="form-group">
                        <label for="hourTime-text" class="col-md-3 control-label">Time</label>
                        <div class="col-md-2">
                            <input id="hourTime-text" type="text" ng-model="hourTime" class="form-control" aria-describedby="event-field">
                        </div>
                        <label for="minTime-text" class="col-md-1 control-label center-text">:</label>
                        <div class="col-md-2">
                            <input id="minTime-text" type="text" ng-model="minTime" class="form-control" aria-describedby="event-field">
                        </div>
                        <div class="col-md-2">
                            <select class="form-control">
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add Task</button>
            </div>
        </div>
    </div>
</div>
