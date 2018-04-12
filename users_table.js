var fetch=angular.module('myapp',['angularUtils.directives.dirPagination']);
		fetch.controller('userCtrl',['$scope','$http',function($scope,$http)
				{
					$http({
					method : 'get',
					url: 'users.php'
					 }).then(function successCallback(response){
					 $scope.users=response.data;
					});
			 
												
												 
					$scope.editingData={};
												 
					$scope.myForms={};
												
											
												 
												
												 
				 $scope.modifyUser = function(id,login,haslo,email,admin)
			    {
													 
													 
				 	$scope.userid=id;
				 	$scope.userlogin=login;
					$scope.userhaslo=haslo;
					$scope.useremail=email;
					$scope.useradmin=admin;
														 
													 
													
				}
												 
				$scope.deleteUser = function()
				{
						if($scope.userid==null)
						{
							alert("Wybierz użytkownika!");
						}
						else
						{
							$http.post("delete_user.php",{'id':$scope.userid}).then(function(data)
																										  
								{
									$scope.userid=null;
									$scope.userlogin=null;
									$scope.userhaslo=null;
									$scope.useremail=null;
									$scope.useradmin=null;

									$http({
									method : 'get',
									url: 'users.php'
									}).then(function successCallback(response)
											  {
									$scope.users=response.data;
									});
														
																
													
								})
							}
													 
													 
													 
				}
												 
					 $scope.updateData = function()
						 {
							if($scope.userid==null)
							{
								 alert("Wybierz użytkownika!");
							}
							else
							{
								$http.post("edit_users.php",{'id':$scope.userid,'login':$scope.userlogin,'haslo':$scope.userhaslo,'email':$scope.useremail,'admin':$scope.useradmin}).then(function(data)
								
							{
													 	
								$scope.userid=null;
								$scope.userlogin=null;
								$scope.userhaslo=null;
								$scope.useremail=null;
								$scope.useradmin=null;
														
								$http({
								method : 'get',
								url: 'users.php'
								}).then(function successCallback(response){
								$scope.users=response.data;
								});
																 
														
							}
						)}
													 
													 
													 
													 
					 	}
												 			 
			}]);