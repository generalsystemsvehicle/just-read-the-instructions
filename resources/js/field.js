Nova.booting((Vue, router, store) => {
  Vue.component('index-JustReadTheInstructions', require('./components/IndexField'))
  Vue.component('detail-JustReadTheInstructions', require('./components/DetailField'))
  Vue.component('form-JustReadTheInstructions', require('./components/FormField'))
})
