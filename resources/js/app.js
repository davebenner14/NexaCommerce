import "./bootstrap";

// AlpineJS
import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.start();

// VueJS
import { createApp } from "vue";
import ProductList from "./components/ProductList.vue";

const app = createApp({});
app.component("product-list", ProductList);
app.mount("#app");
