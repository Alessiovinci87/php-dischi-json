new Vue({
    el: '#app',
    data: {
        albums: [] 
    },
    mounted() {
        
        axios.get('api.php')
            .then(response => {
                this.albums = response.data;
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }
});
