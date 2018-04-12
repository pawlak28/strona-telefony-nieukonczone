$('#logout').click(function(){
	window.location.href="index.php";
});

$('#admin_panel').click(function(){
	window.location.href="panel_admina.php";
});

$.ajaxPrefilter(function( options, original_Options, jqXHR ) {
    options.async = true;
});

var users = '<div ng-app="myapp">\
			<div style="margin-top:20px;height:700px;" ng-controller="userCtrl">\
				<table style="text-align:center;" class="table table-bordered">\
				<thead>\
					<tr>\
						<th>Id</th>\
					  <th>Login</th>\
					  <th>Haslo</th>\
					  <th>Email</th>\
					  <th>Admin</th>\
					  <th>Aktualizacja</th>\
					</tr>\
				</thead>\
				<tbody>\
					<tr>\
						<td class="success"><input type="text" name="user_id" ng-model="userid" disabled></td>\
						<td class="warning"><input type="text" name="user_login" ng-model="userlogin" ></td>\
						<td class="danger"><input type="text" name="user_haslo" ng-model="userhaslo" ></td>\
						<td class="info"><input type="text" name="user_email" ng-model="useremail" ></td>\
						<td class="primary"><input type="text" name="user_admin" ng-model="useradmin" ></td>\
						<td class="primary"><input type="submit" name="btn_Updateuser" class="btn btn-info" ng-click="updateData()"  value="Aktualizuj" ></td>\
						<td class="primary"><input type="submit" name="btn_Deleteuser" class="btn btn-danger" ng-click="deleteUser()" value="Usun Uzytkownika" ></td>\
					</tr>	\
				</tbody>\
				</table>\
				<input class="form-control" type="text" placeholder="Wpisz informacje" ng-model="search">\
				<table ng-table="tableParams" style="text-align:center;" class="table table-bordered">\
  					<thead>\
					<tr>\
					  <th>Id</th>\
					  <th>Login</th>\
					  <th>Haslo</th>\
					  <th>Email</th>\
					  <th>Admin</th>\
						<th>Opcje</th>\
					</tr>\
					</thead>\
					<tbody>\
						<tr dir-paginate="user in users | itemsPerPage:5 | filter:search">\
							<td class="success">\
								<div>{{user.id}}</div>\
							</td>\
							<td class="warning">\
								<div>{{user.login}}</div>\
							</td>\
							<td class="danger">\
								<div>{{user.haslo}}</div>\
							</td>\
							<td class="info">\
								<div>{{user.email}}</div>\
							</td>\
							<td class="primary">\
								<div>{{user.admin}}</div>\
							</td>\
							<td class="success">\
								<button class="btn btn-warning" ng-click="modifyUser(user.id,user.login,user.haslo,user.email,user.admin)" >Edycja</button> \
							</td>\
					</tr>\
				</tbody>\
				<tfoot>\
				<dir-pagination-controls max-size="5" direction-links="true" boundary-links="true">\
					</dir-pagination-controls>\
				</tfoot>\
				</table>\
			</div>\
			</div>\
			<script src="dirPagination.js"></script>\
			<script src="users_table.js"></scipt>';

var script1 = $("<script></script>");
script1.attr("src","dirPagination.js");
var script2 = $("<script></script>");
script2.attr("src","users_table.js");





$('#edit_users').click(function(){
	$('#angular_tables').append(users);
	
});

