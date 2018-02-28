<template>
    <div>
        <div class="flex justify-between mb-4 text-sm">
            <div>
                <button class="px-4 py-2 rounded bg-grey-light" v-if="has_prev_page" @click="getPrevPage">Prev</button>
            </div>
            <div>
                <button class="px-4 py-2 rounded bg-grey-light" v-if="has_next_page" @click="getNextPage">Next</button>
            </div>
        </div>
        <request v-for="request in requests" :request="request" :key="request.id"></request>
        <div class="flex justify-between mb-4 text-sm">
            <div>
                <button class="px-4 py-2 rounded bg-grey-light" v-if="has_prev_page" @click="getPrevPage">Prev</button>
            </div>
            <div>
                <button class="px-4 py-2 rounded bg-grey-light" v-if="has_next_page" @click="getNextPage">Next</button>
            </div>
        </div>
    </div>
</template>

<script>
import Request from './request';
export default {
    data() {
        return {
            requests: [],
            all_data: null,
            pagination: {
                current_page: null,
                first_page_url: null,
                from: null,
                last_page: null,
                last_page_url: null,
                next_page_url: null,
                path: null,
                per_page: null,
                prev_page_url: null,
                to: null,
                total: null,
            }
        }
    },
    computed: {
        has_next_page() {
            return this.pagination.current_page && (this.pagination.current_page < this.pagination.last_page);
        },
        has_prev_page() {
            return this.pagination.current_page && (this.pagination.current_page !== this.pagination.from);
        }
    },
    components: {
        Request
    },
    mounted() {
        this.getRequests();
    },
    methods: {
        getNextPage() {
            if (this.has_next_page) {
                this.getRequests(this.pagination.current_page + 1);
            }
        },
        getPrevPage() {
            if (this.has_prev_page) {
                this.getRequests(this.pagination.current_page - 1);
            }
        },
        getRequests($page) {
            let url = 'api/requests';
            if ($page) {
                url = url + '?page=' + $page;
            }
            axios.get(url)
                .then(response => {
                    let {data, ...pagination} = response.data;
                    this.requests = data;
                    this.pagination = pagination;
                });
        }
    }
}
</script>
