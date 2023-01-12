import { createApp } from 'vue'
import App from './App.vue'
import { library } from '@fortawesome/fontawesome-svg-core';
import { faHatWizard, faTrashCan } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
library.add(faHatWizard, faTrashCan)


createApp(App)
    .component('font-awesome-icon', FontAwesomeIcon)
    .mount('#app')
