const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php'
        }
    },
    methods: {
        getToDoList() {
            axios.get(this.apiUrl).then((result) => {
                console.log(result.data);
            });
        }
    },
}).mount('#app');