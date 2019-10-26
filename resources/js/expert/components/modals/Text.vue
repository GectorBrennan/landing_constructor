<template>
    <div class="dynamic-content" id="dynamic-content" style="width: 100%; display:flex; flex-flow:column; align-items: center; justify-content: center">
        <div class="content-inputs" id="content-inputs">
            <div class="form-group">
                <label>Напишите текс</label>
                <div class="input-area">
                    <ckeditor :editor="editor" v-model="data.text" :config="editorConfig"></ckeditor>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        props: ['data'],

        data(){
            return {
                editor: ClassicEditor,
                editorConfig: {},
            }
        },
        methods: {
            cancel(){
                this.$set(this.data, 'text', this.data.old);
            }
        },
    }
</script>