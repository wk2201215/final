new Vue({
  el: '#app',
  data(){
    return{
        pas1: null,
        pas2: null
    };
  },
  computed: {
    ab(){
        const pas1 = this.pas1;
        const pas2 = this.pas2;
        const isErr =  pas1==pas2;
        return isErr;
    }
}
})