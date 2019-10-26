<template>
    <section class="sec" :class="blockClass" :id="type + '-block'" style="position: relative">

        <template v-if="isDev">
            <div :class="{'hide-block': !state}"></div>
            <div class="block-status">
                <div class="custom-switch-btn">
                    <input type="checkbox"
                           class="custom-switch-btn__checkbox"
                           :checked="state"
                           @change="$emit('update:state')"
                           :id="blockClass + '-id'">
                    <label class="custom-switch-btn__label" :for="blockClass + '-id'">Использовать данный блок</label>
                </div>
            </div>
        </template>

        <slot></slot>
    </section>
</template>
<script>
    import Editable from '../../mixins/Editable'

    export default {
        mixins: [Editable],
        props: ['state', 'type', 'blockClass'],
    }
</script>