<?php
/**
 * Created by PhpStorm.
 * User: Adam Prout
 * Date: 4/13/2016
 * Time: 1:01 AM
 */
?>

<div class="modal fade" id="addPersonalNote-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add a Personal Note</h4>
            </div>
            <div class="modal-body">
                <form ng-submit="newPersonalNote()" class="form-horizontal">
                    <div class="form-group">
                        <label for="note-text" class="col-md-3 control-label">Personal Note</label>
                        <div class="col-md-7">
                            <input id="note-text" type="text" ng-model="note" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add Note</button>
            </div>
        </div>

    </div>
</div>