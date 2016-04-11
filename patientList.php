<h3>Patient List</h3>
<div class="col-md-10 col-md-offset-1" ng-repeat="patient in PatientList">
    <div class="col-md-10">
        <img ng-src="../assets/images/{{patient.image}}" alt={{patient.name}} style="width:200px;height:175px;" />
        <h4>{{patient.name}}</h4>
        <p>
            {{patient.gender}}, {{patient.age}} years old
        </p>
        <p>
            Room {{patient.room}}
        </p>
    </div>
</div>