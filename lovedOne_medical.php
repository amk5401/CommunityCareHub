<div class="row">
<div class="panel-group col-md-8 col-md-offset-2" id="accordion">

  <!-- Staff -->
  <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
          <div class="panel-heading">
              <h4 class="panel-title">
                  Staff
              </h4>
          </div>
      </a>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
          <table class="table table-striped">
            <thead>
              <tr>
                  <th>Role</th>
                  <th>Name</th>
                  <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="s in staffList">
                  <td>{{s.role}}</td>
                  <td>{{s.name}}</td>
                  <td>{{s.status}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>

  <!-- Presciptions -->
  <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
          <div class="panel-heading">
              <h4 class="panel-title">
                  Prescriptions
              </h4>
          </div>
      </a>
      <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Dosage</th>
                          <th>Time</th>
                          <th>Recurrence</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr ng-repeat="p in prescriptionList">
                          <td>{{p.name}}</td>
                          <td>{{p.dosage}}</td>
                          <td>{{p.time}}</td>
                          <td>{{p.recurrence}}</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>

<!-- Conditions -->
    <div class="panel panel-default">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Conditions
                </h4>
            </div>
        </a>
        <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Condition</th>
                            <th>Additional Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="c in conditionList">
                            <td>{{c.condition}}</td>
                            <td>{{c.additionalDetails}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Active Directives and Orders -->
<div class="row">
  <div class="panel-group col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h4 class="panel-title">
              Advance Directives and Orders
          </h4>
      </div>
       <table class="table table-striped">
        <thead text-align="left" margin="10px">
          <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>DNR</td>
            <td>Do Not Resuscitate</td>
            <td>In case of cardiac arrest,
              do not act to revive the patient</td>
          </tr>
        </tbody>
       </table>
    </div>
  </div>
</div>

<!-- Caretaker Notes -->
<div class="row">
  <div class="panel-group col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">Caretaker Notes</h4>
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
    <div id="addCheckupEvent-button">
      <button id="addCheckupEvent-button" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addCheckupEvent-modal">Write Message</button>
    </div>
  </div>
</div>
