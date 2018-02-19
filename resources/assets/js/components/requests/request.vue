<template>
    <div class="bg-white rounded border shadow mb-4">
        <div class="px-4 py-2 text-base bg-brand-lighter text-brand-darker">{{request.title}}</div>
        <div class="p-4 text-sm">
            {{request.body}}
        </div>
        <div class="border-t p-4">
            <!-- Vote Count -->
            <!-- Vote up/down if logged in -->
            <!-- Creator -->
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
