<template>
    <div>
        <new-request v-if="user"></new-request>
        <a href="/login" v-else class="bg-brand-lighter block text-center text-brand-darker rounded w-full py-2 px-2 no-underline">Sign In</a>
    </div>
</template>

<script>
import NewRequest from './new-request';
export default {
    data() {
        return {
            user: window.jaxli.user
        }
    },
    components: {
        NewRequest
    },
    methods: {

    }
}
</script>
