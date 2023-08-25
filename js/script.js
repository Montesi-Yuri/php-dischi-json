const { createApp } = Vue

createApp({
    data() {
        return {
            discs : [],
            selectedDisc: '',
            showSelectedDisc: false,
        }
    },
    created(){
        axios.get('http://localhost/php-dischi-json/database/discs.json')
        .then(response => {
            this.discs = response.data;
            console.log(this.discs);
        })
    },
    methods:{
        discFullScreen(disc){
            this.selectedDisc = disc;
            this.showSelectedDisc = true;
        },
        closeSelectedDisc(){
            this.showSelectedDisc = false;
        }
    },
}).mount('#app')
