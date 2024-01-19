new Vue({
    el: '#app',
    data(){
        return{
            p: 1
        };
    },
    methods: {
        pura() {
            if(this.p!=1){
                this.p++;
                window.location.href = 'top.php';
            }
        },
        mai() {
            if(this.p!=10){
                window.location.href = 'top.php';
            }
        }
    }
});