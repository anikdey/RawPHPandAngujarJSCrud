<div class="">
    <div class="panel panel-default">
        <div class="panel-heading">
           <div class="row">
               <div class="col-lg-3">
                   User List
               </div>
               <div class="col-lg-9">
                   <a href="#/add-new-user" class="btn btn-info pull-right">Add New</a>
               </div>
           </div>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="record in records">
                    <td>{{ record.firstName }}</td>
                    <td>{{ record.lastName }}</td>
                    <td>{{ record.email }}</td>
                    <td>
                        <a ng-href="#/user/show/{{ record.id }}" class="btn btn-success">Show</a>
                        <a ng-href="#/user/edit/{{ record.id }}" class="btn btn-info">Edit</a>
                        <button type="button" ng-click="deleteUser(record.id)" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            Pagination
        </div>
    </div>
</div>