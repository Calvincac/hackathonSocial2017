var homeEmpresas = new Vue({
  el: '#perfil-aluno',
  data: {
    vaga: [],
    token: null
  },
  created: function(){
    this.getAccessToken();
  },
  methods: {
    getAccessToken: function(){
      var self = this;
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
          self.token = data._kmd.authtoken;
          self.featchData(data);
        }
      });
    },
    featchData(data){
      var self = this;
      var id = this.getParams('id');
      $.ajax({
        url: "https://baas.kinvey.com/appdata/kid_rJuqORN3g/vaga/" + id,
        dataType: 'json',
        type: "GET",
        headers: {
          "Authorization": "Kinvey " + self.token,
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
    },
    selected: function(event){
      var self = this;
      event.preventDefault();
      var id = this.getParams('id');
      self.vaga.selecionado = 1;
      $.ajax({
        url: "https://baas.kinvey.com/appdata/kid_rJuqORN3g/vaga/" + id,
        dataType: 'json',
        type: "PUT",
        headers: {
          "Authorization": "Kinvey " + self.token,
          "secret-key": "f810de9c8ff641a7ab6d6d010251baaa",
          "Content-Type": "application/json"
        },
        data: JSON.stringify(self.vaga),
        success: function(data){
          $('.btn-selecionar').attr('disabled', true)
        }
      });
      $.ajax({
        url: "http://henriquemontenegro.com.br/dev/getnet/email.php",
        dataType: 'json',
        type: "POST",
        data: {
          nome: self.vaga.aluno.nome,
          vaga: self.vaga.cargo
        }
      });
    }
  }
});
