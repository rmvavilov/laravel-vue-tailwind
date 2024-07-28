import {defineStore} from 'pinia';
import axios from 'axios';

export const useContentStore = defineStore('content', {
    state: () => ({
        content: '',
        screen: 1
    }),
    actions: {
        async fetchScreen() {
            const baseUrl = import.meta.env.VITE_APP_BASE_URL;
            try {
                const response = await axios.post(`${baseUrl}/api/screen`, {screen: this.screen});
                this.content = response.data.message;
            } catch (error) {
                console.error("There was an error fetching the data!", error);
                this.content = 'Error loading screen content';
            }
        },
        setScreen(screenNumber) {
            this.screen = screenNumber;
        }
    }
});
