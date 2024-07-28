<template>
    <div class="w-1/4 bg-blue-100 p-4">
        <ul>
            <li class="my-2">
                <a
                    class="text-blue-500 cursor-pointer"
                    :class="{ 'font-bold': screen === 1 }"
                    @click.prevent="changeScreen(1)"
                >Screen 1</a>
            </li>
            <li class="my-2">
                <a
                    class="text-blue-500 cursor-pointer"
                    :class="{ 'font-bold': screen === 2 }"
                    @click.prevent="changeScreen(2)"
                >Screen 2</a>
            </li>
            <li class="my-2">
                <a
                    class="text-blue-500 cursor-pointer"
                    :class="{ 'font-bold': screen === 3 }"
                    @click.prevent="changeScreen(3)"
                >Screen 3</a>
            </li>
        </ul>
    </div>
</template>

<script>
import {mapState, mapActions} from 'pinia';
import {useContentStore} from '@/store';


export default {
    name: 'SideBarComponent',

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
