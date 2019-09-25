require('es6-promise/auto');
import cssVars from 'css-vars-ponyfill';

Nova.booting((Vue, router) => {
    Vue.component('user-dropdown', require('./components/UserDropdown'));
})

cssVars({
    // Options...
});
