<template>
    <block-wrapper :state="block.state" :blockClass="'sec_offer'" :type="block.type" @update:state="block.state=!block.state">

        <div class="container">
            <img class="abs_pic dubl_line" src="/img/editor/abs_pic/dubl_line.svg">
            <img class="abs_pic circle_orange" src="/img/editor/abs_pic/circle_orange.svg">
            <div class="row align-items-center justify-content-between">
                <div class="col col-md-6 left-col">

                    <editor-wrapper @edit="edit('video', block.content.video, 'Загрузите видео на YouTube и вставьте ссылку на него в поле')" >
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe :src="block.content.video.link"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </editor-wrapper>

                </div>
                <div class="col-xl-7 col-md-6 right-col main-txt">

                    <editor-wrapper @edit="edit('text', block.content.title, 'Напишите заголовок Вашего предложения стать виртуальным наставником')">
                        <h2 v-html="block.content.title.text"></h2>
                    </editor-wrapper>

                    <editor-wrapper @edit="edit('text', block.content.description, 'Напишите небольшое описание Вашего предложения')">
                        <p v-html="block.content.description.text"></p>
                    </editor-wrapper>

                    <editor-wrapper @edit="edit('button-text', block.content.button, 'Вставьте название кнопки и ссылку')">
                        <a :href="block.content.button.link" class="btn btn-blue">
                            {{block.content.button.text}}
                        </a>
                    </editor-wrapper>

                </div>
            </div>
        </div>

    </block-wrapper>
</template>

<script>
    import Editable from '../../mixins/Editable'
    import BlockWrapper from '../wrappers/BlockWrapper'
    import EditorWrapper from '../wrappers/EditorWrapper'

    export default {
        components: {
            'block-wrapper': BlockWrapper,
            'editor-wrapper': EditorWrapper,
        },
        mixins: [Editable],
        props: {
            block: {
                type: Object
            }
        }
    }

</script>