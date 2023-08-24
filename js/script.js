const { createApp } = Vue

createApp({
    data() {
        return {
            discs : []
        }
    },
    created(){
        axios.get('http://localhost/php-dischi-json/database/discs.json')
        .then(response => {
            this.discs = response.data;
            console.log(this.discs);
        })
    },
}).mount('#app')
