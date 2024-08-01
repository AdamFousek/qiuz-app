<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue'
import InputLabel from '@/Components/InputLabel.vue'
import InputError from '@/Components/InputError.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'

const form = useForm({
    hash: '',
});

const openQuestion = () => {
    form.post(route('question.open'));
}
</script>

<template>
    <Head title="Welcome" />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form @submit.prevent="openQuestion" class="flex flex-col justify-center items-center gap-4">
                        <div>
                            <InputLabel for="hash" value="Hash" />

                            <TextInput
                                    id="hash"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.hash"
                                    required
                                    autofocus
                            />

                            <InputError class="mt-2" :message="form.errors.hash" />
                        </div>

                        <div class="flex justify-center">
                            <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Log in
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
