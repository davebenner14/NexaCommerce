<template>
    <div v-if="product">
        <h1>{{ product.name }}</h1>
        <img :src="product.imageUrl" alt="Product Image" />
        <p>{{ product.description }}</p>
        <p>Price: {{ formatCurrency(product.price) }}</p>
    </div>
    <div v-else>Loading...</div>
</template>
<script>
import axios from "axios";

export default {
    props: ["productId"],
    data() {
        return {
            product: null,
        };
    },
    mounted() {
        this.fetchProductDetails();
    },
    methods: {
        async fetchProductDetails() {
            try {
                const response = await axios.get(
                    `/api/products/${this.productId}`
                );
                this.product = response.data;
            } catch (error) {
                console.error("Error fetching product details:", error);
                // Handle the error, maybe with a user-friendly message
            }
        },
        formatCurrency(value) {
            return `$${parseFloat(value).toFixed(2)}`;
        },
    },
};
</script>
