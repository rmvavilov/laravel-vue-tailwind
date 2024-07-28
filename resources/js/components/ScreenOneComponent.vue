<template>
    <div class="p-4 h-full flex flex-col">
        <div class="mb-4 flex items-center">
            <label for="search" class="mr-2">Search:</label>
            <input
                type="text"
                id="search"
                v-model="search"
                @keyup="onKeyup"
                @keydown.enter="onEnter"
                placeholder="Search..."
                class="p-2 border rounded flex-grow"
            />
        </div>
        <div class="overflow-y-auto flex-grow">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-200 text-gray-600 sticky top-0">
                <tr>
                    <th class="w-1/6 py-2 px-4">ID</th>
                    <th class="w-1/3 py-2 px-4">Title</th>
                    <th class="w-1/6 py-2 px-4">Status</th>
                    <th class="w-1/3 py-2 px-4">Notes</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="record in records" :key="record.id" class="text-center border-t hover:bg-gray-300">
                    <td class="py-2 px-4">{{ record.id }}</td>
                    <td class="py-2 px-4">{{ record.title }}</td>
                    <td class="py-2 px-4">{{ record.status }}</td>
                    <td class="py-2 px-4">{{ record.notes }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import { debounce } from 'lodash';

export default {
    data() {
        return {
            search: '',
            records: []
        };
    },
    created() {
        this.fetchRecords();
    },
    methods: {
        fetchRecords() {
            axios.post(import.meta.env.VITE_APP_BASE_URL + '/api/records', {
                search: this.search
            })
                .then(response => {
                    this.records = response.data.data;
                })
                .catch(error => {
                    console.error('Error fetching records:', error);
                });
        },
        onKeyup: debounce(function () {
            this.fetchRecords();
        }, 300),
        onEnter() {
            this.fetchRecords();
        }
    },
    watch: {
        search(newValue) {
            if (!newValue) {
                this.fetchRecords();
            }
        }
    }
};
</script>
