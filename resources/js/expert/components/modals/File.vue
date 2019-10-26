<template>
    <div class="dynamic-content" id="dynamic-content" style="width: 100%; display:flex; flex-flow:column; align-items: center; justify-content: center">
        <div class="content-inputs" id="content-inputs">
            <div class="img_block">
                <div class="left-side">
                    <div class="img_container">
                        <img :src="data.img">
                    </div>
                </div>
                <div class="right-side">
                    <p>Загрузите автарку пользователя который оставил отзыв. Изображанние может быть в формате PNG, JPG. </p>
                    <input type="file" class="dynamic-field" style="display: none" @change="changeImg($event)">
                    <button @click="$event.target.previousSibling.previousElementSibling.click()"
                            class="btn btn-green trigger-file">
                        Загрузить
                    </button>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
    export default {
        props: ['data', 'emptyImg'],
        methods: {
            changeImg(event) {
                if (event.target.files && event.target.files[0]) {
                    let reader = new FileReader();

                    reader.onload = (event) => this.$set(this.data, 'img', event.target.result);

                    reader.readAsDataURL(event.target.files[0]);
                }
            }
        },
    }
</script>