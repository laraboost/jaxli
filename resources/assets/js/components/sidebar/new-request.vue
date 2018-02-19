<template>
    <div class="new-request">
        <a href="#" @click="showRequestModal" class="bg-brand-lighter text-brand-darker rounded w-full py-2 px-2 no-underline">Request Feature</a>
        <modal name="new-request" classes="rounded-lg bg-white shadow-lg" height="auto">
            <div class="px-4 py-2 border-b text-brand-darker bg-brand-lighter text-xl">Request New Feature</div>
            <div class="p-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-brand-darkest text-xs font-bold mb-2" for="request-title">
                    Request Title
                    </label>
                    <input class="appearance-none block w-full bg-brand-lightest text-grey-darker border border-grey rounded py-3 px-4 mb-3" id="request-title" type="text" placeholder="My New Request" v-model="request.title">
                    <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
                </div>
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-brand-darkest text-xs font-bold mb-2" for="grid-first-name">
                    Request Body
                    </label>
                    <textarea id="request-body" rows="5" class="appearance-none block w-full bg-brand-lightest text-grey-darker border border-grey rounded py-3 px-4 mb-3" placeholder="Details about my new request" v-model="request.body"></textarea>
                    <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
                </div>

            </div>
            <div class="p-4 border-t flex justify-end">
                <button class="px-4 py-2 bg-grey-lighter text-grey-dark rounded mr-2" @click="hideRequestModal">Cancel</button>
                <button class="px-4 py-2 bg-brand-lighter text-brand-dark rounded" @click="saveRequest">Save</button>
            </div>
        </modal>
    </div>
</template>

<script>
export default {
    data() {
        return {
            request: {
                title: null,
                body: null,
            }
        }
    },
    methods: {
        showRequestModal() {
            this.$modal.show('new-request');
        },
        hideRequestModal() {
            this.$modal.hide('new-request');
        },
        saveRequest() {
            axios.post('api/requests', this.request)
                .then(response => {
                    console.log(response.data);

                });
        }
    }
}
</script>

