<template>
    <div id="element2" style="width: 55%;">
        <div class="content">
            <div class="editor-modal editor-modal-visible">
                <div class="modal-content">
                    <div class="header" id="header">
                        <h1 class="header-title">Окно Редактирования</h1>
                        <span class="close" @click="$emit('close')"></span>
                    </div>
                    <div class="content" id="content">
                        <p class="desc">{{modal.desc}}:</p>

                        <component
                                :is="modal.type + '-modal'"
                                :data="modal.data"
                                :emptyImg="emptyImg"
                                ref="modal"
                        ></component>
                    </div>
                    <div class="footer">
                        <div>
                            <button class="btn btn-blue save-editor-modal" @click="$emit('close')">Сохранить</button>
                            <button class="btn btn-blue close-editor-modal" @click="$refs.modal.cancel()">Отмена</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Text from './modals/Text'
    import File from './modals/File'
    import Video from './modals/Video'
    import SocialSelect from './modals/SocialSelect'
    import ButtonFile from './modals/ButtonFile'
    import ButtonText from './modals/ButtonText'
    import ButtonCustomContent from './modals/ButtonCustomContent'

    export default {
        components: {
            'text-modal': Text,
            'video-modal': Video,
            'file-modal': File,
            'social-select-modal': SocialSelect,
            'button-file-modal': ButtonFile,
            'button-text-modal': ButtonText,
            'button-custom-content-modal': ButtonCustomContent,
        },
        data(){
            return {
                emptyImg: '/img/empty_img.svg',
            }
        },
        props: [
            'modal'
        ]
    }
</script>