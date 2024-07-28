<template>
    <div class="h-screen flex">
        <side-bar-component/>
        <content-area-component/>
    </div>
</template>

<script>
import SideBarComponent from "@/components/SideBarComponent.vue";
import ContentAreaComponent from "@/components/ContentAreaComponent.vue";

export default {
    name: 'App',
    components: {
        ContentAreaComponent,
        SideBarComponent
    },
}
</script>

<style scoped>
</style>
