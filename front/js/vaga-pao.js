var homeEmpresas = new Vue({
  el: '#vaga',
  data: {
    vaga: [],
    alunos: [],
    token: null
  },
  created: function(){
    this.getAccessToken();
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
          self.token = data._kmd.authtoken;
          self.featchData();
          self.featchUsers();
        }
      });
    },
    featchData(){
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
          self.vaga = data;
        }
      });
    },
    featchUsers(){
      var self = this;
      $.ajax({
        url: "https://baas.kinvey.com/appdata/kid_rJuqORN3g/aluno",
        dataType: 'json',
        type: "GET",
        headers: {
          "Authorization": "Kinvey " + self.token,
          "secret-key": "f810de9c8ff641a7ab6d6d010251baaa",
          "Content-Type": "application/json"
        },
        success: function(data){
          self.alunos = data;
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
    changeSelected: function(event){
      var id = $(event.target).eq(0).parents('.item-vaga').find('.main-infos').data('id');
      var $item = $(event.target).eq(0).parents('.item-vaga');
      var self = this;
      $.ajax({
        url: "https://baas.kinvey.com/appdata/kid_rJuqORN3g/aluno/" + id,
        dataType: 'json',
        type: "GET",
        headers: {
          "Authorization": "Kinvey " + self.token,
          "secret-key": "f810de9c8ff641a7ab6d6d010251baaa",
          "Content-Type": "application/json"
        },
        success: function(data){
          console.log(data);
          self.updateVaga(data, $item)
        }
      });
    },
    updateVaga: function(objaluno, $item){
      var self = this;
      self.vaga.aluno = objaluno;
      console.log(self.vaga.aluno);
      // console.log(self.vaga.aluno);
      // console.log(self.vaga);
      $.ajax({
        url: "https://baas.kinvey.com/appdata/kid_rJuqORN3g/vaga/" + self.vaga._id,
        dataType: 'json',
        type: "PUT",
        headers: {
          "Authorization": "Kinvey " + self.token,
          "secret-key": "f810de9c8ff641a7ab6d6d010251baaa",
          "Content-Type": "application/json"
        },
        data: JSON.stringify(self.vaga),
        success: function(data){
          $item.siblings('.item-vaga').removeClass('item-selecionado');
          $item.addClass('item-selecionado');
        }
      });
    }
  }
});
