<template>
    <div>
        <header v-if="isDev">
            <div class="left-side">
                <div class="logo">
                    <img :src="'/img/smartexpert-head.png'" alt="logo">
                </div>

                <editor-wrapper @edit="edit('text', landing.name, 'Напишите название лендинга')"
                                :add-class="'land-name'">

                    <p v-html="landing.name.text"></p>
                </editor-wrapper>

                <div class="outline-container">
                    <a :href="routes.back" class="btn btn-outline">Назад</a>
                </div>
            </div>
            <div class="right-side">
                <div class="outline-container">
                    <button @click="$emit('save')" class="btn btn-outline save-editor">Сохранить</button>
                </div>
                <div class="outline-container" v-if="routes.show">
                    <a :href="routes.show" target="_blank" class="btn btn-outline save-and-view-editor">Посмотреть</a>
                </div>
                <button @click="$emit('publish')" v-if="landing.id" class="btn btn-blue btn-publish">
                    {{ publishText}}
                </button>
            </div>
        </header>
        <nav class="navbar navbar-expand-md fixed-top" id="header">

            <editor-wrapper @edit="edit('file', landing.logo, 'Загрузите логотип')"
                            :add-class="'navbar-brand fix-nav'">

                <a class="navbar-brand edit-item" href="#">
                    <img :src="landing.logo.img">
                </a>
            </editor-wrapper>

            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <img src="/img/editor/nav/burger.svg" alt="burger">
                    </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active" v-for="(block, index) in landing.blocks.filter(el => {return el.state})">

                        <editor-wrapper @edit="edit('text', block.title, 'Напишите название блока')">
                            <a class="nav-link" :href="`#${block.type}-block`" v-html="block.title.text">Об эксперте</a>
                        </editor-wrapper>

                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a :href="routes.login" class="btn btn-success-2 my-2 my-sm-0">Войти</a>
                </form>
            </div>
        </nav>
    </div>
</template>
<script>
    import Editable from '../mixins/Editable'
    import EditorWrapper from './wrappers/EditorWrapper'

    export default {
        components: {
            'editor-wrapper' : EditorWrapper
        },
        mixins: [Editable],
        props: {
            landing: {
                type: Object
            },
            routes: {
                type: Object
            }
        },
        computed: {
            publishText(){
                console.log(this.landing.status);
                return this.landing.status ? 'Отменить публикацию' : 'Опубликовать'
            }
        }
    }
</script>