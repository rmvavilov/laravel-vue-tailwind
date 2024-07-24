<template>
    <div class="w-3/4 bg-green-100 p-4">
        <div v-if="screen === 1">
            <screen-one-component/>
        </div>
        <div v-else>
            <p class="text-center">{{ content }}</p>
        </div>
    </div>
</template>

<script>
import {useContentStore} from '@/store/contentStore';
import {mapState} from 'pinia';
import ScreenOneComponent from "@/components/ScreenOneComponent.vue";

export default {
    name: 'ContentAreaComponent',
    components: {ScreenOneComponent},

    computed: {
        ...mapState(useContentStore, ['content', 'screen'])
    },
}
</script>
