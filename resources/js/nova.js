require('es6-promise/auto');

import cssVars from 'css-vars-ponyfill';
cssVars({
    // Options...
});

Nova.booting((Vue, router) => {
    Vue.component('user-trigger', require('./components/UserDropdown'));
})
