<template>
    <div class="w-3/4 bg-green-100 p-4">
        <p class="text-center">{{ content }}</p>
    </div>
</template>

<script>
import {useContentStore} from '@/store/contentStore';
import {mapState} from 'pinia';

export default {
    name: 'ContentAreaComponent',

    computed: {
        ...mapState(useContentStore, ['content'])
    },
}
</script>
