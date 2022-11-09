/**
 * 参照ページ：https://fontawesome.com/icons
 */

import Vue from 'vue';
/* fontawesome コアをインポートする */
import { library } from '@fortawesome/fontawesome-svg-core'

/* アイコン コンポーネントをインポートする */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* 特定のアイコンをインポートする */
import {
    faCloudSun,
    faCloudMoon,
    faRightToBracket,
    faLocationDot,
    faPhoneVolume,
    faEnvelope,
    faHouseUser,
    faCity,
    faPeopleRoof,
    faHandsPraying,
    faComments,
    faEye,
    faEyeSlash
} from '@fortawesome/free-solid-svg-icons'


/* ライブラリにアイコンを追加する */
library.add(
    faCloudSun,
    faCloudMoon,
    faRightToBracket,
    faLocationDot,
    faPhoneVolume,
    faEnvelope,
    faHouseUser,
    faCity,
    faPeopleRoof,
    faHandsPraying,
    faComments,
    faEye,
    faEyeSlash
)

Vue.config.productionTip = false

export default FontAwesomeIcon;
