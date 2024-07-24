<template>
    <div class="w-1/4 bg-blue-100 p-4">
        <ul>
            <li class="my-2">
                <a href="#" @click.prevent="changeScreen(1)" class="text-blue-500">Screen 1</a>
            </li>
            <li class="my-2">
                <a href="#" @click.prevent="changeScreen(2)" class="text-blue-500">Screen 2</a>
            </li>
            <li class="my-2">
                <a href="#" @click.prevent="changeScreen(3)" class="text-blue-500">Screen 3</a>
            </li>
        </ul>
    </div>
</template>

<script>
import {useContentStore} from '@/store/contentStore';
import { mapActions } from 'pinia';

export default {
    name: 'SideBarComponent',

    data() {
        return {
            screenNumber: 1,
        }
    },
    methods: {
        ...mapActions(useContentStore, ['loadScreen']),

        changeScreen(screenNumber) {
            this.screenNumber = screenNumber;
            this.loadScreen(screenNumber);
        }
    }
}
</script>
