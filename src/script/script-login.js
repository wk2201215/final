new Vue({
    el: '#app',
    data(){
        return{
            password1,
            password2
        };
    },
    methods: {
    },
    computed: {
        pasCheck(){
            const password1 = this.password1;
            const password2 = this.password1;
            const isErr =  password1.equals(password2);
            return isErr;
        },
        s: function(){
            let s = 0
            s += /.{8,}/.test(this.password1) ? 20 : 0
            s += /\d/.test(this.password1)    ? 20 : 0
            s += /[a-z]/.test(this.password1) ? 20 : 0
            s += /[A-Z]/.test(this.password1) ? 20 : 0        
            s += /[#!&]/.test(this.password1) ? 20 : 0
            return s
        }
    }
});