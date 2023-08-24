const { createApp } = Vue

createApp({
    data() {
        return {
        message: 'Hello Vue!'
        }
    },
    created(){
        axios.get('')
    }
}).mount('#app')
