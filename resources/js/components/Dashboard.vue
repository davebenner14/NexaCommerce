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
