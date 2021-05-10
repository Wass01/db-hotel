Vue.config.devtools = true;

let app = new Vue({
  el: "#root",
  data: {
    rooms: [],
    roomId: null,
  },

  mounted(){
    axios.get('http://localhost/db/db-hotel/api/rooms.php')
      .then((response) => {
        this.rooms = response.data.response;
    });
  },

  methods:{
    openId: function(id) {
      axios.get(`http://localhost/db/db-hotel/api/rooms.php?id=${id}` )
        .then((response) => {
          this.roomId = response.data.response[0];
      });
    }
  },
});
