<div class="modal fade" id="addCondition-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Condition</h4>
            </div>
            <div class="modal-body">
                <form ng-submit="newCheckup()" class="form-horizontal">
                    <div class="form-group">
                        <label for="condition-text" class="col-md-3 control-label">Condition</label>
                        <div class="col-md-7">
                            <input id="condition-text" type="text" ng-model="condition" class="form-control" aria-describedby="event-field">
                        </div>
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
