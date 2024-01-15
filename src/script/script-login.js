Vue.component('password', Password); 
new Vue({
    el: '#app',
    data: {
      password1: null,
      password2: null
    },
    methods: {
      showFeedback ({suggestions, warning}) {
        console.log('🙏', suggestions)
        console.log('⚠', warning)
      },
      showScore (score) {
        console.log('💯', score)
      }
    }
  })