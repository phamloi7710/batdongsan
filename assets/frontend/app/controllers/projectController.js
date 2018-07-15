appMain.controller('projectController', function ($scope, $rootScope, $location, $window, projectService, alertsService) {
    $scope.initController = function () {
        
    }
    $scope.initProjectHotSlideController = function (ProjectHotSlides) {
        $scope.ProjectHotSlides = window[ProjectHotSlides];
    }
    $scope.initProjectNewSlideController = function (ProjectNewSlides) {
        $scope.ProjectNewSlides = window[ProjectNewSlides];
    }
});
