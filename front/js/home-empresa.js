var homeEmpresas = new Vue({
  el: '#home-empresa',
  data: {
    vagas: []
  },
  created: function(){
    this.getAccessToken();
  },
  methods: {
    getAccessToken: function(){
      var self = this;
      //var req = new XMLHttpRequest();
      $.ajax({
        url: "https://baas.kinvey.com/user/kid_rJuqORN3g/login",
        dataType: 'json',
        type: "POST",
        headers: {
          "Authorization": "Basic YWRtaW46MTIzNDU2",
          "secret-key": "f810de9c8ff641a7ab6d6d010251baaa",
          "Content-Type": "application/json"
        },
        data: JSON.stringify({
          "username": "admin",
          "password": "123456"
        }),
        success: function(data){
          self.featchData(data);
        }
      });
    },
    featchData(data){
      var self = this;
      var token = data._kmd.authtoken;
      $.ajax({
        url: "https://baas.kinvey.com/appdata/kid_rJuqORN3g/vaga",
        dataType: 'json',
        type: "GET",
        headers: {
          "Authorization": "Kinvey " + token,
          "secret-key": "f810de9c8ff641a7ab6d6d010251baaa",
          "Content-Type": "application/json"
        },
        success: function(data){
          console.log(data);
          self.vagas = data;
        }
      });
    }
  }
});
