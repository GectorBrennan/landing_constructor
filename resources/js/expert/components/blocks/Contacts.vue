<template>
    <block-wrapper :state="block.state" :blockClass="'sec_my_projects'" :type="block.type" @update:state="block.state=!block.state">

        <img class="abs_pic brain" :src="'/img/editor/abs_pic/brain.svg'">
        <div class="container">
            <img alt="" class="abs_pic dubl_line" :src="'/img/editor/abs_pic/dubl_line.svg'">
            <img alt="" class="abs_pic cup" :src="'/img/editor/abs_pic/cup.svg'">
            <div class="sec_title">
                <img :src="'/img/editor/sec_my_projects/title_label.svg'" alt="title_label">
                <h2>Мои проекты</h2>
            </div>
            <div class="edit-item">
                <span class="icon-pencil"
                      data-info='{"info":"section4-marathon", "type":"button-marathons", "data": "Добавьте проект"}'></span>
                <div id="section4-marathon">
                    <div class="card with-date">
                        <img alt="" class="abs_pic stone" :src="'/img/editor/abs_pic/stone_orange.svg'">
                        <div class="media align-items-center">
                            <img class="mr-md-3 media-image" :src="'/img/editor/sec_my_projects/card_img1.jpg'"
                                 alt="Generic placeholder image">
                            <div class="media-body">
                                <div class="date_wrap">
                                    <div class="item">
                                        <span>Старт</span>
                                        <div class="date">
                                            <span>июн</span>
                                            <div>1</div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span>Финиш</span>
                                        <div class="date">
                                            <span>июн</span>
                                            <div>19</div>
                                        </div>
                                    </div>
                                </div>
                                <p class="card_subtitle">Онлайн марафон</p>
                                <h4 class="card_title">Акселератор Карьерного Роста</h4>
                                <div class="b-card-body">
                                    <ul class="list">
                                        <li>Соверши настоящий прорыв в карьере за 12 месяцев</li>
                                        <li>Прокачай менеджмент и создай личную стратегию кратного роста на 5 лет</li>
                                        <li>Обрети новые связи для карьерных и бизнес целей</li>
                                        <li>Измени себя и свою команду, подними стандарты жизни</li>
                                    </ul>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="b-card-footer">
                                    <div class="counter">12 этапов, 60 уроков</div>
                                    <div class="views">
                                        <img class="mr-1" :src="'/img/editor/icons/human.svg'">
                                        1011
                                    </div>
                                    <a class="link btn btn-blue" href="#">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </block-wrapper>
</template>

<script>
    import Editable from '../../mixins/Editable'
    import BlockWrapper from '../wrappers/BlockWrapper'

    export default {
        components: {
            'block-wrapper': BlockWrapper
        },
        mixins: [Editable],
        props: {
            block: {
                type: Object
            }
        }
    }

</script>