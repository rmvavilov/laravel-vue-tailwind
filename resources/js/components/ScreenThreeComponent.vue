<template>
    <div class="flex items-center justify-center w-full h-full">
        <div class="w-[45vw] h-[45vw] inset-0 grid grid-cols-3 grid-rows-3 gap-2">
            <template
                v-for="(row, rowIndex) in grid"
                :key="rowIndex"
            >
                <div
                    v-for="(color, colIndex) in row"
                    :key="colIndex"
                    :class="['w-full h-full', color === 'red' ? 'bg-red-500' : 'bg-blue-500']"
                    @click="handleClick(rowIndex, colIndex)"
                ></div>
            </template>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            grid: []
        };
    },
    async created() {
        await this.fetchGridState();
    },
    methods: {
        async fetchGridState() {
            try {
                const response = await axios.post('/api/grid');
                this.grid = response.data.grid;
            } catch (error) {
                console.error('Error fetching grid state:', error);
            }
        },
        async handleClick(row, col) {
            try {
                const response = await axios.post('/api/grid/click', {
                    grid: this.grid,
                    row,
                    col
                });
                this.grid = response.data.grid;
            } catch (error) {
                console.error('Error handling square click:', error);
            }
        }
    }
};
</script>
