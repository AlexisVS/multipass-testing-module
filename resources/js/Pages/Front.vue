<template>
    <GuestLayout>
        <hr>
        <h1>Module testing: Front page</h1>
        <hr>
        <TestComponent/>
        <img :src="Image" alt="">
    </GuestLayout>
</template>

<script setup lang="ts">
import GuestLayout from "@/Layouts/GuestLayout.vue";
import TestComponent from "@modules/multipass-testing-module/js/Components/TestComponent/TestComponent.vue";
import Image from '@img/handy-line-terminal-makes-card-payment.png'
</script>

<style scoped>

</style>
