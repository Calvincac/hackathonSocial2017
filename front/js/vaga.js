var homeEmpresas = new Vue({
  el: '#vaga',
  data: {
    vaga: []
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
      var id = this.getParams('id');
      $.ajax({
        url: "https://baas.kinvey.com/appdata/kid_rJuqORN3g/vaga/" + id,
        dataType: 'json',
        type: "GET",
        headers: {
          "Authorization": "Kinvey " + token,
          "secret-key": "f810de9c8ff641a7ab6d6d010251baaa",
          "Content-Type": "application/json"
        },
        success: function(data){
          console.log(data);
          self.vaga = data;
        }
      });
    },
    getParams: function(name, url){
      if (!url) {
        url = window.location.href;
      }
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
          results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
  },
  filters: {
    nomeAluno: function(nome){
      return nome.split(' ')[0];
    },
    currency: function(_valor){
      if (_valor && _valor != '') {
          return 'R$ ' + parseFloat(_valor).toFixed(2).replace('.', ',');
      } else {
          return '';
      }
    }
  }
});
