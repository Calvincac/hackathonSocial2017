$(document).ready(function(){
  $.fn.serializeFormJSON = function(){
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
      if (o[this.name]) {
        if (!o[this.name].push) {
          o[this.name] = [o[this.name]];
        }
        o[this.name].push(this.value || '');
      } else {
        o[this.name] = this.value || '';
      }
    });
    return o;
  };
  // console.log($('#form-vagas').serializeFormJSON());
  function sendData(data){
    var token = data._kmd.authtoken;
    console.log(token);
    $.ajax({
      url: "https://baas.kinvey.com/appdata/kid_rJuqORN3g/vaga",
      dataType: 'json',
      type: "POST",
      headers: {
        "Authorization": "Kinvey " + token,
        "secret-key": "f810de9c8ff641a7ab6d6d010251baaa",
        "Content-Type": "application/json"
      },
      data: JSON.stringify($('#form-vagas').serializeFormJSON()),
      success: function(data){
        alert('Vaga cadastrada com sucesso');
        window.location.href = "home-empresa.php"
      }
    });
  }
  $(document).on('submit', '#form-vagas', function(event){
    event.preventDefault();

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
        sendData(data);
      }
    });
  });
});
