<div class="row">
    <div id="personal-calendar" class="col-md-6 col-md-offset-3">

    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3" id="addCalendarEvent-button">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addCalendarEvent-modal">Add Event</button>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Personal Notes
                </h4>
            </div>
              <table class="table table-condensed">
                <thead text-align="left">
                  <tr>
                    <th>Date</th>
                    <th>Description</th>
                  <tr>
                </thead>
                <tbody>
                  <tr ng-repeat="n in notesList">
                      <td>{{n.date}}</td>
                      <td>{{n.text}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3" id="addPersonalNote-button">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addPersonalNote-modal">Add Note</button>
    </div>
</div>

<?php require 'modals/addCalendarModal.php' ?>
<?php require 'modals/addPersonalNote.php' ?>
