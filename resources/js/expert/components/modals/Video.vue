<template>
    <div class="dynamic-content" id="dynamic-content" style="width: 100%; display:flex; flex-flow:column; align-items: center; justify-content: center">
        <div class="content-inputs" id="content-inputs">
            <div class="form-group">
                <label>Заполните информацию</label>

                <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 10px;">
                    <iframe id="section3-video"
                            :src="data.link"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>

                <div class="input-area">
                    <input type="text" class="form-control dynamic-field" placeholder="Вставьте ссылку" v-model="data.link">
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