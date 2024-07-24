<template>
    <div class="p-4">
        <div class="relative w-full" style="padding-top: 100%;">
            <div class="absolute inset-0 grid gap-2">
                <div
                    v-for="(row, rowIndex) in grid"
                    :key="rowIndex"
                    class="grid grid-cols-3 gap-2 w-full h-full"
                >
                    <div
                        v-for="(color, colIndex) in row"
                        :key="colIndex"
                        :class="['w-full h-full', color === 'red' ? 'bg-red-500' : 'bg-blue-500']"
                        @click="handleClick(rowIndex, colIndex)"
                    ></div>
                </div>
            </div>
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

<style scoped>
.grid {
    display: grid;
}

.w-full {
    width: 100%;
}

.h-full {
    height: 100%;
}

.bg-red-500 {
    background-color: red;
}

.bg-blue-500 {
    background-color: blue;
}
</style>
