<div class="col-lg-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-lg-3">
                    Add New User
                    {{ errorMessage }}
                </div>
                <div class="col-lg-9">
                    <a href="#/" class="btn btn-info pull-right">Back To List</a>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <form>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" name="firstName" ng-model="user.firstName" class="form-control" id="firstName" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" name="lastName" ng-model="user.lastName" class="form-control" id="lastName" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" ng-model="user.email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <button type="submit" ng-click="saveUser(user)" class="btn btn-default">Save User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>