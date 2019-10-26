<template>
    <div class="dynamic-content" id="dynamic-content" style="width: 100%; display:flex; flex-flow:column; align-items: center; justify-content: center">
        <div class="content-inputs" id="content-inputs">
            <div class="form-group">
                <label>Вставьте название кнопки</label>
                <div class="input-area">
                    <input type="text" class="form-control dynamic-field" placeholder="Напишите сюда текст" v-model="data.text">
                </div>
            </div>
            <div class="form-group">
                <label>Вставьте ссылку кнопки</label>
                <div class="input-area">
                    <input type="text" class="form-control dynamic-field" placeholder="Вставьте ссылку" v-model="data.link">
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['data'],
    }
</script>