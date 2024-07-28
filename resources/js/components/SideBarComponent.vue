<template>
    <div class="w-1/4 bg-blue-100 p-4">
        <ul>
            <template v-for="link in links">
                <li class="my-2">
                    <a
                        class="text-blue-500 cursor-pointer"
                        :class="{ 'font-bold': screen === link.screen }"
                        @click.prevent="changeScreen(link.screen)"
                    >{{ link.name }}</a>
                </li>
            </template>
        </ul>
    </div>
</template>

<script>
import {mapState, mapActions} from 'pinia';
import {useContentStore} from '@/store';


export default {
    name: 'SideBarComponent',

    data() {
        return {
            links: [
                {name: 'Screen 1', screen: 1},
                {name: 'Screen 2', screen: 2},
                {name: 'Screen 3', screen: 3},
            ]
        }
    },

    computed: {
        ...mapState(useContentStore, ['screen'])
    },

    watch: {
        screen() {
            this.fetchScreen();
        }
    },

    methods: {
        ...mapActions(useContentStore, ['fetchScreen', 'setScreen']),

        changeScreen(screenNumber) {
            this.setScreen(screenNumber);
        }
    }
}
</script>
