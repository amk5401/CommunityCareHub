
<!--profile/info-->
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="row bordered">
            <div class="col-xs-3">
                <div class="general-thumb" style="background-image:url(assets/images/carlu2.jpeg);" alt={{patient.name}}>

                </div>
            </div>
            <div class="col-xs-3">
                <h4>Carlu Hipkins</h4>
                <p>
                    Female, 86 years old<br />
                    Height: 6'6"<br />
                    Weight: 180 lbs
                </p>
            </div>
        </div>
    </div>
</div>

<!--calendar-->
<div class="row">
    <div id="personal-calendar" class="col-md-6 col-md-offset-3"></div>
</div>

<!-- calendar event button-->
<div class="row">
    <div class="col-md-6 col-md-offset-3" id="addCalendarEvent-button">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addCalendarEvent-modal">Add Event</button>
    </div>
</div>

<!--Profile notes-->
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h4 class="panel-title">
              Profile information
          </h4>
      </div>
       <table class="table table-striped">
        <thead text-align="left" margin="10px">
          <tr>
            <th>Title</th>
            <th>Information</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="n in patientNotes">
              <td>{{n.title}}</td>
              <td>{{n.text}}</td>
          </tr>
        </tbody>
       </table>
    </div>
  </div>
</div>

<!--Emergency Contacts-->
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h4 class="panel-title">
              Emergency Contacts
          </h4>
      </div>
       <table class="table table-striped">
        <thead text-align="left" margin="10px">
          <tr>
            <th>Name</th>
            <th>Relationship</th>
            <th>Phone Number</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="c in emergencyContacts">
              <td>{{c.name}}</td>
              <td>{{c.relation}}</td>
              <td>{{c.phone}}</td>
              <td>{{c.email}}</td>
          </tr>
        </tbody>
       </table>
    </div>
  </div>
</div>

<?php include 'modals/addCalendarModal.php' ?>
