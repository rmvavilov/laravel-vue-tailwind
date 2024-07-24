<template>
    <div class="w-3/4 bg-green-100 p-4">
        <div v-if="screen === 1">
            <screen-one-component/>
        </div>
        <div v-if="screen === 2">
            <screen-two-component/>
        </div>
        <div v-if="screen === 3">
            <p class="text-center">{{ content }}</p>
        </div>
    </div>
</template>

<script>
import {useContentStore} from '@/store/contentStore';
import {mapState} from 'pinia';
import ScreenOneComponent from "@/components/ScreenOneComponent.vue";
import ScreenTwoComponent from "@/components/ScreenTwoComponent.vue";

export default {
    name: 'ContentAreaComponent',
    components: {
        ScreenOneComponent,
        ScreenTwoComponent,
    },

    computed: {
        ...mapState(useContentStore, ['content', 'screen'])
    },
}
</script>
