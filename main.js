Vue.config.devtools = true;

let app = new Vue({
  el: "#root",
  data: {
    
  },

  mounted(){
    axios.get('http://localhost/php/php-ajax-dischi/dati.php')
      .then((response) => {
        this.dischi = response.data;
    });
  },

  methods: {
  },
});
