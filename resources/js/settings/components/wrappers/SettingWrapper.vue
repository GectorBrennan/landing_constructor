<template>
    <div class="domain-settings-full domain-settings">
        <slot></slot>
        <div class="domain-settings-full__footer">
            <button class="btn btn-blue" @click="$emit('save')">Сохранить</button>
        </div>
    </div>
</template>