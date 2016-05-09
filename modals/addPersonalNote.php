<div class="modal fade" id="addPersonalNote-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add a Personal Note</h4>
            </div>
            <form ng-submit="newPersonalNote()" class="form-horizontal">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="note-text" class="col-md-4 control-label">Personal Note</label>
                        <div class="col-md-6">
                            <textarea id="note-text" type="text" ng-model="note.note" class="form-control" aria-describedby="event-field"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="checkbox" class="col-md-4 control-label">Visible by Loved One</label>
                        <div class="col-md-6">
                            <input id="checkbox" type="checkbox" style="margin-top: 10px" name="my-checkbox" checked>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <input type="submit" value="Add Note" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
