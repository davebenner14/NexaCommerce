<template>
    <div>
        <div v-for="product in products" :key="product.id">
            {{ product.name }} - {{ product.description }} - ${{
                product.price
            }}
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            products: [],
        };
    },
    mounted() {
        axios
            .get("/api/products")
            .then((response) => {
                this.products = response.data;
            })
            .catch((error) => {
                console.error("There was an error fetching products:", error);
            });
    },
};
</script>
