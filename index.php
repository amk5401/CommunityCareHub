<?php include 'header.php' ?>

    <form ng-submit="submitLogin()" ng-controller="communityCareHubController" class="col-md-4 col-md-offset-4 mid-page center-text">
        <h1>Community Care Hub</h1>
        <br />
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="username-field">Username</span>
            <input type="text" ng-model="username" class="form-control" aria-describedby="username-field">
        </div>
        <br />
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="password-field">Password</span>
            <input type="password" ng-model="password" class="form-control" aria-describedby="password-field">
        </div>
        <br />
        <div class="btn-group btn-group-lg" role="group" aria-label="login-button">
            <button type="submit" class="btn btn-success">Login</button>
        </div>
    </form>

<?php include 'footer.php' ?>
