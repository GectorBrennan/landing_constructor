import App from './components/App'
import CKEditor from '@ckeditor/ckeditor5-vue';

Vue.use( CKEditor );

let app = new Vue({
    el: '#app',
    components: {App},
});