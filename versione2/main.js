var app = new Vue({
    el: '#app',
    data: {
        dataBase : [],
    },
    mounted() {
        axios.get('./db/index.php')
            .then( (res) => {
                dataBase = res.data,
                console.log(dataBase)
            })
    },
    methods: {

    }
})