<template>
    <div class="w-3/4 bg-green-100 p-4">
        <component :is="currentComponent"/>
    </div>
</template>

<script>
import {useContentStore} from '@/store';
import {mapState} from 'pinia';
import ScreenOneComponent from "@/components/ScreenOneComponent.vue";
import ScreenTwoComponent from "@/components/ScreenTwoComponent.vue";
import ScreenThreeComponent from "@/components/ScreenThreeComponent.vue";

export default {
    name: 'ContentAreaComponent',
    components: {
        ScreenOneComponent,
        ScreenTwoComponent,
        ScreenThreeComponent,
    },

    computed: {
        ...mapState(useContentStore, ['content', 'screen']),
        currentComponent() {
            const components = {
                1: 'ScreenOneComponent',
                2: 'ScreenTwoComponent',
                3: 'ScreenThreeComponent'
            }

            return components[this.screen] || null;
        }
    },
}
</script>
