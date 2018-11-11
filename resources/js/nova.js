require('es6-promise/auto');

Nova.booting((Vue, router) => {
    Vue.component('user-dropdown', require('./components/UserDropdown'));
})
