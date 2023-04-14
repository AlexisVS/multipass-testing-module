<template>
    <div class="q-pa-md">
        <q-card class="my-card">
            <q-parallax
                src="https://cdn.quasar.dev/img/parallax1.jpg"
                :height="150"
            />

            <q-card-section>
                <div class="text-h6">My module test component</div>
                <div class="text-subtitle2">by John Doe</div>
                <q-btn-group push>
                    <q-btn push label="GET" icon="timeline" />
                    <q-btn push label="POST" icon="visibility" />
                </q-btn-group>
            </q-card-section>
        </q-card>
    </div>
</template>

<style lang="sass" scoped>
.my-card
    width: 100%
    max-width: 500px
</style>
