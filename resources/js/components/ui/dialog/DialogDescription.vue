<script setup lang="ts">
/* eslint-disable */
import { cn } from '@/lib/utils';
import { DialogDescription, useForwardProps, type DialogDescriptionProps } from 'radix-vue';
import { computed, type HTMLAttributes } from 'vue';

const props = defineProps<DialogDescriptionProps & { class?: HTMLAttributes['class'] }>();

const delegatedProps = computed(() => {
    const { class: _, ...delegated } = props;

    return delegated;
});

const forwardedProps = useForwardProps(delegatedProps);
</script>

<template>
    <DialogDescription v-bind="forwardedProps" :class="cn('text-sm text-muted-foreground', props.class)">
        <slot />
    </DialogDescription>
</template>
