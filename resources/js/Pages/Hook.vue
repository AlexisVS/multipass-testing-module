<template>
    <GuestLayout>
        <div>
            <h2>Hook.vue </h2>
            <Link :href="useForm({}).post(route('module.multipass-testing-module.hook.trigger'))">Trigger</Link>
        </div>
    </GuestLayout>
</template>

<script setup lang="ts">
import GuestLayout from "@/Layouts/GuestLayout.vue";
import {Link, useForm} from "@inertiajs/vue3";
</script>

<style scoped>

</style>
