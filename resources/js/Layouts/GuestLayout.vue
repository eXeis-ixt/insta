<!-- <script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template> -->


<script setup>

</script>

<template>
    <div class="min-h-screen flex flex-col items-center  bg-gray-100">
        <div class="w-full max-w-sm mt-6 px-6 py-4 border border-gray-300 bg-white overflow-hidden">
            <slot />
        </div>
    </div>
</template>
