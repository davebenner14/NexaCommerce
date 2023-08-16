<template>
    <div>
        <h1>Your Dashboard</h1>
        <h2>Recent Purchases</h2>
        <ul>
            <li v-for="purchase in purchases" :key="purchase.id">
                {{ purchase.productName }} - {{ purchase.date }}
            </li>
        </ul>
    </div>
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            purchases: [],
        };
    },
    mounted() {
        this.fetchRecentPurchases();
    },
    methods: {
        async fetchRecentPurchases() {
            try {
                const response = await axios.get("/api/user/purchases");
                this.purchases = response.data;
            } catch (error) {
                console.error("Error fetching recent purchases:", error);
                // Handle the error accordingly
            }
        },
    },
};
</script>
