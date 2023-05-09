<template>
    <GuestLayout>
        <hr>
        <h1>Module testing: Front page</h1>
        <hr>
        <TestComponent/>
        <hr>
        <img :src="Image" alt="">
    </GuestLayout>
</template>

<script setup lang="ts">
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Image from '@img/handy-line-terminal-makes-card-payment.png';
import TestComponent from "@modules/multipass-testing-module/js/Components/TestComponent/TestComponent.vue";
</script>

<style scoped>

</style>
