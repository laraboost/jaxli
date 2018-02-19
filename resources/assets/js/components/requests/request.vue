<template>
    <div class="bg-white rounded border shadow mb-4">
        <div class="px-4 py-2 text-base bg-brand-lighter text-brand-darker">{{request.title}}</div>
        <div class="p-4 text-sm">
            {{request.body}}
        </div>
        <div class="border-t p-4 flex justify-between">
            <div><!-- Voting --></div>
            <div class="text-xs">{{request.votes.length}} Votes</div>
            <div class="text-xs" v-text="request.user.name"></div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        request: Object
    }
}
</script>
