import { createApp, h } from 'vue'
import { createInertiaApp, Link,} from '@inertiajs/vue3'
import Layout from "./Shared/Layout.vue";
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { Ziggy } from './ziggy';
import { createStore } from 'vuex';


const store = createStore({
  state() {
    return{
      models: [],
      brands: [],
    }
  },
  mutations: {
      setBrand(state, payload){
          state.brands = payload
          console.log('brand ' + payload)
      },
      setModel(state, payload){
          state.models = payload
          console.log('model ' + payload)
      }
  },
  getters: {
      getBrand(state){
          return state.brands
      },
      getModel(state){
          return state.models
      }
  },
  
});

createInertiaApp({
  progress: {
    color: '#2e8b57',
    showSpinner: true,
  },
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(store)
      .use(plugin)
      .use(ZiggyVue, Ziggy)
      .component("Link", Link)
      .component("Layout", Layout)
      .mount(el)
  },

});