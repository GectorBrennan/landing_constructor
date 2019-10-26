<template>
    <div :class="[isDev ? 'edit-item' : '', addClass]" >
        <span @click="$emit('edit')" v-if="isDev" class="icon-pencil"></span>
        <slot></slot>
    </div>
</template>
<script>
    import Editable from '../../mixins/Editable'
    export default {
        mixins: [Editable],
        props: {
            addClass: {
                type: String,
                default: ''
            }
        },
    }
</script>