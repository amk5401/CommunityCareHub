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
                        <label for="hourTime-text" class="col-md-3 control-label">Time</label>
                        <div class="col-md-2">
                            <select class="form-control" ng-model="pre.hour">
                                <?php
                                for ($x=1; $x<=12; $x++)
                                {
                                    ?>
                                    <option value="<?php echo $x;?>"><?php echo $x;?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <label for="minTime-text" class="col-md-1 control-label center-text">:</label>
                        <div class="col-md-2">
                            <select class="form-control" ng-model="pre.min">
                                <option value="00">00</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <?php
                                for ($x=10; $x<=59; $x++)
                                {
                                    ?>
                                    <option value="<?php echo $x;?>"><?php echo $x;?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" ng-model="pre.ampm">
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                            </select>
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
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
