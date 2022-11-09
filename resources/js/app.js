import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
//多数言語
import {i18n_setting} from "./plugins/i18n";
//fontawesome アイコンをインポートする
import FontAwesomeIcon from "./plugins/icon";
Vue.component('font-awesome-icon', FontAwesomeIcon)


createInertiaApp({
    resolve: name => require(`./pages/${name}`),
    setup({ el, App, props, plugin }) {
        //多数言語
        const i18n = i18n_setting(props);
        //global
        Vue.prototype.appName = process.env.MIX_APP_NAME
        Vue.use(plugin)
        Vue.mixin({
            methods: {route},
        });
        new Vue({
            render: h => h(App, props),
            i18n,
        }).$mount(el)
    },
})
