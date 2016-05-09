<div class="modal fade" id="addCalendarEvent-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add a Calendar Event</h4>
            </div>
            <div class="modal-body">
                <form ng-submit="newCalendarEvent()" class="form-horizontal">
                    <div class="form-group">
                        <label for="event-name" class="col-md-3 control-label">Event Name</label>
                        <div class="col-md-7">
                            <input id="event-name" type="text" ng-model="eventName" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="event-start-day" class="col-md-3 control-label">Start Date</label>
                        <div class="col-md-3">
                            <input id="event-start-day" type="text" ng-model="eventStartDay" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hourTime-text" class="col-md-3 control-label">Start Time</label>
                        <div class="col-md-2">
                            <select class="form-control">
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
                            <select class="form-control">
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
                            <select class="form-control">
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="event-end-day" class="col-md-3 control-label">End Date</label>
                        <div class="col-md-3">
                            <input id="event-end-day" type="text" ng-model="eventEndDay" class="form-control" aria-describedby="event-field">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hourTime-text" class="col-md-3 control-label">End Time</label>
                        <div class="col-md-2">
                            <select class="form-control">
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
                            <select class="form-control">
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
                            <select class="form-control">
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-border">
                        <div class="row">
                            <div id="addCalendarEvent-detailLabel" class="col-md-12 center-text">
                                Additional Details
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="event-location" class="col-md-3 control-label">Where</label>
                            <div class="col-md-7">
                                <input id="event-location" type="text" ng-model="eventLocation" class="form-control" aria-describedby="event-field">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="event-description" class="col-md-3 control-label">Description</label>
                            <div class="col-md-7">
                                <textarea id="event-description" ng-model="eventDescription" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add Event</button>
            </div>
        </div>

    </div>
</div>
