<template>
    <div class="dynamic-content" id="dynamic-content" style="width: 100%; display:flex; flex-flow:column; align-items: center; justify-content: center">
        <div class="content-inputs" id="content-inputs">
            <div class="accordion edit-item" id="modal-accordion">
                <div class="card" v-for="(el, index) in data">
                    <div class="card-header">
                        <div class="accordion-item" data-toggle="collapse" :data-target="`#${idCard + index}`"
                             aria-expanded="true">
                            <span>Ваша фотография</span>
                            <div>
                                <span class="icon-delete icon-delete-block" @click="$event.stopPropagation(); remove(index)"></span>
                                <img src="/img/editor2/sec_programm/arrow.svg">
                            </div>
                        </div>
                    </div>
                    <div class="collapse" :id="idCard + index" data-parent="#modal-accordion">
                        <div class="card-body">
                            <div class="img_block">
                                <div class="left-side">
                                    <div class="img_container">
                                        <img :src="el.img">
                                    </div>
                                </div>
                                <div class="right-side">
                                    <p>Загрузите автарку пользователя который оставил отзыв.
                                        Изображанние может быть в формате PNG, JPG.</p>
                                    <input type="file" class="dynamic-field" style="display: none" @change="changeImg(index, $event)">
                                    <button @click="$event.target.previousSibling.previousElementSibling.click()"
                                            class="btn btn-green trigger-file">Загрузить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-green add-file" @click="add">Добавить</button>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                idCard: 'modal-bf-el-'
            }
        },
        props: ['data', 'emptyImg'],
        methods: {
            add(){
                this.data.push({img: this.emptyImg, alt: ''})
            },
            changeImg(index, event) {
                if (event.target.files && event.target.files[0]) {
                    let reader = new FileReader();

                    reader.onload = (event) => this.$set(this.data, index, {img: event.target.result, alt: this.data[index].alt});

                    reader.readAsDataURL(event.target.files[0]);
                }
            },
            remove(index){
                this.data.splice(index, 1);
            }
        },
    }
</script>