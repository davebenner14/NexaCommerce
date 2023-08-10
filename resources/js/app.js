import "./bootstrap";

// AlpineJS
import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.start();

// VueJS
import Vue from "vue";
import ProductList from "./components/ProductList.vue";

Vue.component("product-list", ProductList);

const app = new Vue({
    el: "#app",
});
