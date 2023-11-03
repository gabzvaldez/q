angular.module('app.services',[])

.factory('Dashboard', function($http){
  var base_url = 'http://' + window.location.hostname;

  // var base_url = 'https://[::1]';
  return{
    get: function() {
      // console.log(data);
      return $http.post(base_url +'/q/rest/get')
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log();
          
        })
      },
      add_cntr: function(data) {
        // console.log(data);
        // error = {};
        return $http.post(base_url +'/q/rest/add_count', data)
          .then(function(response) {
              return response.data;
            }, function(response) {
              console.log(data);
            })
      }
  }
})


.factory('Division', function($http){
  var base_url = 'http://' + window.location.hostname;

  // var base_url = 'https://[::1]';
  return{
    get: function(div) {
      // console.log(div);
      return $http.post(base_url +'/q/rest/get_division/'+div)
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log();
          
        })
      },
      get_division_id: function(div) {
        // console.log(div);
        return $http.post(base_url +'/q/rest/get_division_id/'+div)
          .then(function(response) {
            return response.data;
          }, function(response) {
            console.log();
            
          })
        },
    
  }
})



