import { createApp, h } from "vue";
import { createInertiaApp, Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import Layout from "./Shared/Layout";

createInertiaApp({
    resolve: async (name) => {
        let page = (await import(`./Pages/${name}`)).default;
        if (!page.layout) {
            page.layout = Layout;
        }
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Head", Head)
            .mount(el);
    },
    title: (title) => `My App - ${title}`,
});

InertiaProgress.init({
    delay: 250,
    color: "#29d",
    showSpinner: false,
});
