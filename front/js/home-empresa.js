var homeEmpresas = new Vue({
  el: '#home-empresa',
  data: {
    vagas: []
  },
  created: function(){
    this.featchData();
  },
  methods: {
    featchData: function(){
      var self = this;
      var req = new XMLHttpRequest();
      $.getJSON("https://raw.githubusercontent.com/felipefdl/cidades-estados-brasil-json/master/Estados.json", function(data){
        self.vagas = data;
        console.log(data);
      });
    }
  }
});
