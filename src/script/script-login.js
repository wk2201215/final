const vm = new Vue({
    el: "#app",
    data: {p: ""},
    computed: {
      s: function() {
        let s = 0
        s += /.{8,}/.test(this.p) ? 20 : 0
        s += /\d/.test(this.p)    ? 20 : 0
        s += /[a-z]/.test(this.p) ? 20 : 0
        s += /[A-Z]/.test(this.p) ? 20 : 0        
        s += /[#!&]/.test(this.p) ? 20 : 0
        return s
      },
    },
  })