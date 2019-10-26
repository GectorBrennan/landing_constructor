<template>
    <block-wrapper :state="block.state" :blockClass="'sec_your_mentor'" :type="block.type" @update:state="block.state=!block.state">
        <div class="container">
            <img class="abs_pic dubl_line" src="/img/editor/abs_pic/dubl_line.svg">
            <img class="abs_pic dubl_line_vertical" src="/img/editor/abs_pic/dubl_line.svg">
            <img class="abs_pic circle" src="/img/editor/abs_pic/circle.svg">
            <div class="sec_title">
                <img src="/img/editor/sec_your_mentor/title_label.svg" alt="title_label">

                <editor-wrapper @edit="edit('text', block.content.title, 'Напишите заголовок, призывающий людей подписаться на Вас, как на виртуального наставника')">
                    <h2 v-html="block.content.title.text"></h2>
                </editor-wrapper>

            </div>
            <div class="row">

                <editor-wrapper @edit="edit('file', block.content.avatar, 'Ваше фото в формате PNG с вырезанным фоном')"
                                :add-class="'col-md-6 img_wrapp'">

                    <img :src="block.content.avatar.img" :alt="block.content.avatar.alt">
                </editor-wrapper>


                <div class="col-md-6">

                    <editor-wrapper @edit="edit('video', block.content.video, 'Запишите мотивационное видео, которое будет побуждать людей подписываться на Вас, как виртуального наставника https://www.youtube.com/embed/id')">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe :src="block.content.video.link"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </editor-wrapper>

                    <editor-wrapper @edit="edit('button-text', block.content.button, 'Вставьте название кнопки и ссылку')">
                        <a :href="block.content.button.link" class="btn btn-success">{{block.content.button.text}}</a>
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
            'editor-wrapper' : EditorWrapper
        },
        mixins: [Editable],
        props: {
            block: {
                type: Object
            }
        }
    }
</script>