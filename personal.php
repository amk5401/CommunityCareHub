<div class="row">
    <div id="personal-calendar" class="col-md-6 col-md-offset-3">

    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3" id="addCalendarEvent-button">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addCalendarEvent-modal">Add Event</button>
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
             <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Sample Text</td>
                    </tr>
                    <tr>
                        <td>Sample Text 2</td>
                    </tr>
                </tbody>
             </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3" id="addPersonalNote-button">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addPersonalNote-modal">Add Note</button>
    </div>
</div>

<?php require 'modals/addCalendarModal.php' ?>
<?php require 'modals/addPersonalNote.php' ?>

