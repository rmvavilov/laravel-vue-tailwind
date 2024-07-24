<template>
    <div class="p-4">
        <div class="mb-4 flex items-center">
            <label for="search" class="mr-2">Search:</label>
            <input
                type="text"
                id="search"
                v-model="search"
                @keydown.enter="searchImages"
                placeholder="Search..."
                class="p-2 border rounded flex-grow"
            />
        </div>
        <div class="flex justify-center items-center">
            <button v-if="images.length" @click="prevImage" :disabled="currentIndex === 0" class="mr-4">&lt;</button>
            <div v-if="currentImage">
                <img :src="currentImage.src.large" :alt="currentImage.alt" class="max-w-full max-h-96" />
            </div>
            <button v-if="images.length" @click="nextImage" :disabled="currentIndex === images.length - 1" class="ml-4">&gt;</button>
        </div>
    </div>
</template>

<script>
import { createClient } from 'pexels';

const client = createClient(import.meta.env.VITE_PEXELS_API_KEY);

export default {
    data() {
        return {
            search: '',
            images: [],
            currentIndex: 0,
        };
    },
    computed: {
        currentImage() {
            return this.images[this.currentIndex] || null;
        },
    },
    methods: {
        async searchImages() {
            try {
                const response = await client.photos.search({query: this.search, per_page: 20, page: 1});
                this.images = response.photos;
                this.currentIndex = 0;
            } catch (error) {
                console.error('Error fetching images from Pexels API:', error);
            }
        },
        nextImage() {
            if (this.currentIndex < this.images.length - 1) {
                this.currentIndex += 1;
            }
        },
        prevImage() {
            if (this.currentIndex > 0) {
                this.currentIndex -= 1;
            }
        },
    },
};
</script>

<style scoped>

button {
    background-color: lightblue;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 24px;
}

button:disabled {
    cursor: not-allowed;
    opacity: 0.5;
}
</style>
