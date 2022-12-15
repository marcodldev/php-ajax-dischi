var app = new Vue({
    el: '#app',
    data: {
        message: "hello"
    },
    mounted() {
        axios.get('./db/index.php')
            .then( (res) => {
                console.log(res.data)
            })
    },
    methods: {

    }
})