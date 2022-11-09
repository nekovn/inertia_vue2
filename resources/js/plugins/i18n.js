import Vue from 'vue'
import VueI18n from 'vue-i18n'
import localeMessages from "./vue-i18n-locales";
Vue.use(VueI18n)

const i18n_setting = (props) => new VueI18n({
    locale: props.props.initialPage.props.lang, // user locale by props
    fallbackLocale: "en", // set fallback locale
    messages: localeMessages, // set locale messages
})

export {
    i18n_setting
};
