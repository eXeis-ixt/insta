<script setup>
import { ref, toRefs } from "vue";

import Heart from "vue-material-design-icons/Heart.vue";
import Comment from "vue-material-design-icons/Comment.vue";

defineEmits(["selectedPost"]);
const props = defineProps(["postByUser"]);
const { postByUser } = toRefs(props);

let isHover = ref(false);
</script>

<template>
    <div
        @mouseenter="($event) => (isHover = true)"
        @mouseleave="($event) => (isHover = false)"
        class="flex items-center justify-center cursor-pointer relative"
    >
        <div
            v-if="isHover"
            :class="isHover ? 'bg-black bg-opacity-40' : ''"
            class="absolute w-full h-full z-50 flex items-center justify-around text-lg font-extrabold text-white"
        >
        <div class="flex items-center justify-around w-[50%]">
            <div>
                <div class="flex items-center justify-center">
                    <Heart fillColor="#FFFFFF" :size="30"/>
                    <div class="pl-1">3</div>
                </div>
                <div class="flex items-center justify-center">
                    <Comment fillColor="#FFFFFF" :size="30"/>
                    <div class="pl-1">4</div>
                </div>
            </div>
        </div>

    </div>
    <img class="aspect-square mx-auto z-0 object-cover cursor-pointer"
    src="https:picsum.photos/id/123/800/800" alt="">


</div>
</template>
