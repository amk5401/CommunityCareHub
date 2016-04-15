<h3>Patient List</h3>
<div class="container">
    <div id="patientlist" class="col-md-10 col-md-offset-1" ng-repeat="patient in patientList">
        <div class="row patientlist-row">
            <div class="col-xs-2">
                <div class="thumb" style="background-image:url({{patient.image}});" alt={{patient.name}}>

                </div>
            </div>
            <div class="col-xs-2">
                <h4>{{patient.name}}</h4>
                <p>
                    {{patient.gender}}, {{patient.age}} years old
                </p>
                <p>
                    Room {{patient.room}}
                </p>
            </div>
        </div>
    </div>
</div>
