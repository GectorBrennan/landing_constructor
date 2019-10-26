<template>

    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Настройки лендинга: Навзание лендинга</h1>
        </div>

        <setting-wrapper @save="save">
            <h2>Настройки домена</h2>
            <div class="custom-switch-btn">
                <input type="checkbox" class="custom-switch-btn__checkbox" id="customSwitch1">
                <label class="custom-switch-btn__label" for="customSwitch1">Использовать домен на платформе SmartExpert</label>
            </div>
            <div class="domain-settings-full__under">
                <p>Этот тип продукта предназачен для обучения в рамках определёного времени. У марафона есть дата начала и конца, что позволяет интераткивно взаимодействовать с аудиторией</p>
                <div class="domain-settings-full__form-control">
                    <label>Домен лендинга на платформе SmartExpert</label>
                    <input type="text" placeholder="http://subdomainname.smartexpert.net">
                    <div>
                        <button class="btn btn-blue"><i class="icon-duplicate"></i>Копировать ссылку</button>
                        <button class="btn btn-blue"><i class="icon-logout"></i>Открыть сайт</button>
                    </div>
                </div>
            </div>
            <div class="custom-switch-btn">
                <input type="checkbox" class="custom-switch-btn__checkbox" id="customSwitch2">
                <label class="custom-switch-btn__label" for="customSwitch2">Использовать свой домен</label>
            </div>
            <div class="domain-settings-full__under">
                <p>Этот тип продукта предназачен для обучения в рамках определёного времени. У марафона есть дата начала и конца, что позволяет интераткивно взаимодействовать с аудиторией</p>
                <div class="domain-settings-full__form-control-2">
                    <label>Домен лендинга на платформе SmartExpert</label>
                    <input type="text" placeholder="Введите название групового чата">
                </div>
            </div>
        </setting-wrapper>

        <setting-wrapper @save="save">
            <h2>Настройки домена</h2>
            <h3>Адресс вашего лендинга на платформе SmartExpert</h3>
            <p>Must be alphanumeric (A-Z, 0-9) with dashes between words. Last published 6 months ago.</p>
            <div class="custom-form-group">
                <label>Сабдомен лендинга</label>
                <div class="custom-form-group__input-container">
                    <div class="custom-form-group__custom-input">
                        <input type="text" placeholder="subdomainname">
                        <p>.smartexpert.net</p>
                        <span class="icon-ne_ok"></span>
                    </div>
                    <button class="btn">Проверить</button>
                </div>
            </div>
            <div class="custom-form-group">
                <div class="custom-form-group__input-container">
                    <div class="custom-form-group__custom-input--error">
                        <p>Выберите другое имя, поскольку такое имя уже занятно</p>
                    </div>
                </div>
            </div>
        </setting-wrapper>


        <setting-wrapper @save="save">
            <h2>Настройки домена</h2>
            <h3>Адресс вашего лендинга на платформе SmartExpert</h3>
            <p>Must be alphanumeric (A-Z, 0-9) with dashes between words. Last published 6 months ago.</p>
            <div class="custom-form-group">
                <label>Сабдомен лендинга</label>
                <div class="custom-form-group__input-container">
                    <div class="custom-form-group__custom-input">
                        <input type="text" placeholder="subdomainname">
                        <p>.smartexpert.net</p>
                        <span class="icon-ok"></span>
                    </div>
                    <button class="btn">Проверить</button>
                </div>
            </div>
        </setting-wrapper>

        <setting-wrapper @save="save">
            <h2>Дополнительный код в шапке</h2>
            <div class="code-block__form-control">
                <label>Код</label>
                <textarea cols="30" rows="5" placeholder="Введите название вашего продукта" v-model="landing.scripts"></textarea>
            </div>
        </setting-wrapper>

        <setting-wrapper @save="save">
            <h2>Дополнительный код в шапке</h2>
            <div class="code-block__form-control">
                <label>Meta title</label>
                <textarea cols="30" rows="5" placeholder="Введите название вашего продукта" v-model="landing.meta_title"></textarea>
            </div>
            <div class="code-block__form-control">
                <label>Meta description</label>
                <textarea cols="30" rows="5" placeholder="Доллары США (USD)"  v-model="landing.meta_description"></textarea>
            </div>
        </setting-wrapper>

    </div>

</template>
<script>
    import SettingWrapper from './wrappers/SettingWrapper'

    export default {
        components: {
            'setting-wrapper' : SettingWrapper
        },
        props: ['landing', 'routes'],
        
        methods: {
            async save(){
                try {
                    let response = await await api.post(this.routes.update, this.landing);
                } catch(err) {
                    console.log(err);
                }
            },
        }
    }
</script>
<style>
    .page-header {
        margin-bottom: 30px;
    }
    .domain-settings-full {
        margin-bottom: 30px;
    }
</style>