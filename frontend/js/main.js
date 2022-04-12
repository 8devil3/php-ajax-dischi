const app = new Vue({
   el: '#app',
   data: {
      apiURL: 'http://boolean/php-ajax-dischi/data/apiData.php',
      albums: []
   },
   created(){
      axios.get(this.apiURL)
      .then(response => {
         this.albums = response.data;
      })
   }
});