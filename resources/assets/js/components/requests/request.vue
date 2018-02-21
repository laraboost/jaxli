<template>
    <div class="bg-white rounded border shadow mb-4">
        <div class="px-4 py-2 text-base bg-brand-lighter text-brand-darker">{{internal_request.title}}</div>
        <div class="p-4 text-sm">
            {{internal_request.body}}
        </div>
        <div class="border-t p-4 flex justify-between">
            <div>
                <button class="px-4 py-2 rounded" @click="toggleVote" :class="votedClasses">+ 1</button>
            </div>
            <div class="text-xs">{{internal_request.votes.length}} Votes</div>
            <div class="text-xs" v-text="internal_request.user.name"></div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        request: Object
    },
    data() {
        return {
            internal_request: this.request
        }
    },
    computed: {
        current_user_voted() {
            var self = this;
            if (this.internal_request.votes.length > 0) {
                return _.filter(this.internal_request.votes, function (pivot) {
                    return pivot.user_id == window.jaxli.user.id;
                }).length == 1;
            }

            return false;
        },
        votedClasses() {
            if (this.current_user_voted) {
                return 'bg-brand-dark text-brand-lighter';
            }

            return 'bg-grey-lightest text-grey-dark';
        }
    },
    methods: {
        toggleVote() {
            axios.post('/api/vote/' + this.internal_request.id)
                .then(response => {
                    this.internal_request = response.data;
                });
        }
    }
}
</script>
