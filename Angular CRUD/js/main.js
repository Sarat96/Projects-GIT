var personId = 1;

var app = angular.module('crudApp', []);

app.directive("fileread", [function () {
    return {
        scope: {
            fileread: "="
        },
        link: function (scope, element, attributes) {
            element.bind("change", function (changeEvent) {

            	var file = changeEvent.target.files[0];
                var reader = new FileReader();
                reader.onload = function (loadEvent) {
                    scope.$apply(function () {
                    	var data = loadEvent.target.result;
                        scope.fileread = {
                        	data: data,
                        	filename: file.name
                        };

                        document.getElementById('img-preview').src = data;
                    });
                }

                document.getElementById('fileName').innerText = file.name;
                reader.readAsDataURL(file);
            });
        }
    }
}]);

app.controller('crudAppController', ['$scope', function($scope) {

	$scope.persons = [];

	// Delete row
	$scope.delete = function(index) {
		if(confirm("Do you really want to delete?")) {
			$scope.persons.splice(index, 1)
		}
	}

	// Edit row
	$scope.edit = function(index) {

		var person = angular.copy($scope.persons[index]);

		$scope.newPerson = person;

		document.getElementById('imgChooser').value = '';
		document.getElementById('fileName').innerText = person.profile.filename;
		document.getElementById('img-preview').src = person.profile.data;
		document.getElementById('btnCreateUpdate').innerText = "Update";
	}

	// Save and update row
	$scope.saveUpdate = function() {

		if ($scope.newPerson.id == null) {
            $scope.newPerson.id = personId++;
            $scope.persons.push($scope.newPerson);
        } else {
        	for (i in $scope.persons) {
                if ($scope.persons[i].id == $scope.newPerson.id) {
                    $scope.persons[i] = $scope.newPerson;
                }
            }
        }

        // Reset form
        document.getElementById('btnCreateUpdate').innerText = "Create";
        document.getElementById('imgChooser').value = "";
		document.getElementById('fileName').innerText = "Select profile picture";
		document.getElementById('img-preview').src = "img/batman.jpg";
        $scope.newPerson = {};
	}

}]);
