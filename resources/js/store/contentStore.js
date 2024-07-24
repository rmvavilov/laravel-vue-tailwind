import { defineStore } from 'pinia';
import axios from 'axios';

export const useContentStore = defineStore('content', {
    state: () => ({
        content: ''
    }),
    actions: {
        async loadScreen(screenNumber) {
            const baseUrl = import.meta.env.VITE_APP_BASE_URL;
            try {
                const response = await axios.post(`${baseUrl}/api/screen`, { screen: screenNumber });
                this.content = response.data.message;
            } catch (error) {
                console.error("There was an error fetching the data!", error);
                this.content = 'Error loading screen content';
            }
        }
    }
});
