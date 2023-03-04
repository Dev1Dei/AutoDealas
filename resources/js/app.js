import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/vue3'
import Layout from "./Shared/Layout.vue";
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
      .use(plugin)
      .component("Link", Link)
      .component("Layout", Layout)
      .mount(el)
  },
});