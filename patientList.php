<div class="container">
    <div id="patientlist" class="col-md-10 col-md-offset-1 bordered" ng-repeat="patient in patientList">
        <div class="row patientlist-row">
            <div class="col-xs-2">
                <div class="thumb" style="background-image:url({{patient.image}});" alt={{patient.name}}>

                </div>
            </div>
            <div class="col-xs-4 col-xs-offset-1">
                <h4>{{patient.name}}</h4>
                <p>
                    {{patient.gender}}, {{patient.age}} years old
                </p>
                <p>
                    Room {{patient.room}}
                </p>
                <button type="button" id="patientListButton" class="btn btn-primary btn-sm">View Patient</button>
            </div>
        </div>
    </div>
</div>
