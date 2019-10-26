<template>
    <div class="dynamic-content" id="dynamic-content"
         style="width: 100%; display:flex; flex-flow:column; align-items: center; justify-content: center">
        <div class="content-inputs" id="content-inputs">
            <div class="accordion edit-item" id="modal-accordion">
                <div class="card" v-for="(el, index) in data">
                    <div class="card-header">
                        <div :data-target="`#${idCard + index}`"
                             class="accordion-item"
                             data-toggle="collapse"
                             aria-expanded="true">
                            <span>Твой участник</span>
                            <div>
                                <span class="icon-delete icon-delete-block" @click="$event.stopPropagation(); remove(index)"></span>
                                <img src="/img/editor2/sec_programm/arrow.svg">
                            </div>
                        </div>
                    </div>
                    <div :id="idCard + index" class="collapse" data-parent="#modal-accordion">
                        <div class="card-body">
                            <div class="img_block">
                                <div class="left-side">
                                    <div class="img_container">
                                        <img :src="el.avatar.img">
                                    </div>
                                </div>
                                <div class="right-side">
                                    <p>Загрузите автарку пользователя который оставил отзыв.
                                        Изображанние может быть в формате PNG, JPG.</p>
                                    <input type="file" class="dynamic-field" style="display: none"
                                           @change="changeImg(index, $event)">
                                    <button @click="$event.target.previousSibling.previousElementSibling.click()"
                                            class="btn btn-green trigger-file">Загрузить</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Имя пользователя</label>
                                <div class="input-area">
                                    <input type="text" class="form-control dynamic-field" v-model="el.name.text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Специализация пользователя</label>
                                <div class="input-area">
                                    <input type="text" class="form-control dynamic-field" v-model="el.job.text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Отзыв пользователя</label>
                                <div class="input-area">
                                    <ckeditor :editor="editor" v-model="el.quote.text" :config="editorConfig"></ckeditor>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-green add-custom-content" @click="add">Добавить</button>
        </div>
    </div>
</template>
<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        data() {
            return {
                editor: ClassicEditor,
                editorConfig: {},
                idCard: 'modal-bcc-el-'
            }
        },
        props: ['data', 'emptyImg'],
        methods: {
            add() {
                this.data.push({
                    avatar: {
                        img: this.emptyImg,
                        alt: ''
                    },
                    name: {text: 'Lorem ipsum dolor', old: ''},
                    job: {text: 'Lorem ipsum dolor sit amet', old: ''},
                    quote: {
                        text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ' +
                            'Aliquid assumenda autem consequatur dolor dolorum earum eligendi et illo, ' +
                            'impedit ipsam, minus molestias natus odio omnis quam repudiandae sapiente tempore unde.',
                        old: ''
                    }
                });
            },
            changeImg(index, event) {
                if (event.target.files && event.target.files[0]) {
                    let reader = new FileReader();

                    reader.onload = (event) => this.$set(this.data, index, {
                        avatar: {
                            img: event.target.result,
                            alt: this.data[index].avatar.alt
                        },
                        name: this.data[index].name,
                        job: this.data[index].job,
                        quote: this.data[index].quote
                    });

                    reader.readAsDataURL(event.target.files[0]);
                }
            },
            remove(index) {
                this.data.splice(index, 1);

            }
        },
    }
</script>