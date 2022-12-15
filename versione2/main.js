var app = new Vue({
    el: '#app',
    data: {
        dataBase : [],
    },
    mounted() {
        axios.get('./db/index.php')
            .then( (res) => {
                this.dataBase = res.data,
                console.log(this.dataBase)
            })
    },
    methods: {

    }
})