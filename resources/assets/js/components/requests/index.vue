<template>
    <div>
        <request v-for="request in requests" :request="request" :key="request.id"></request>
    </div>
</template>

<script>
import Request from './request';
export default {
    data() {
        return {
            requests: []
        }
    },
    components: {
        Request
    },
    mounted() {
        this.getRequests();
    },
    methods: {
        getRequests() {
            axios.get('api/requests')
                .then(response => {
                    this.requests = response.data;
                });
        }
    }
}
</script>
