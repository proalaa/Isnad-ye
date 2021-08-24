import Vue from 'vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

// import { } from '@fortawesome/free-regular-svg-icons'

import {
  faUser,
  faLock,
  faSignOutAlt,
  faCog,
  faUserSecret,
  faEnvelope,
  faBell,
  faPlus,
  faPencilAlt,
  faTrashAlt,
  faChevronDown,
  faHome,
  faIdBadge,
  faShoppingCart,
  faBuilding,
  faFileUpload,
  faPen,
  faSearch,
  faBoxOpen,
  faQuestionCircle, faCheck, faCity, faHospitalAlt, faCheckCircle
} from '@fortawesome/free-solid-svg-icons'

import {
  faGithub
} from '@fortawesome/free-brands-svg-icons'

library.add(
  faUser, faLock, faSignOutAlt, faCog, faGithub, faUserSecret , faEnvelope , faBell , faPlus, faPencilAlt, faTrashAlt,faChevronDown ,faHome , faIdBadge ,faShoppingCart , faBuilding,faFileUpload,faPen,faSearch,faBoxOpen,faQuestionCircle,faCheck,faCity,faHospitalAlt,faCheckCircle
)

Vue.component('Fa', FontAwesomeIcon)
