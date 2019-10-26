export default {
    user_id: null,
    name: {
        text: 'Landing'
    },
    logo: {
        img: '/img/editor/logo.svg'
    },
    landable_id: null,
    landable_type: '',
    status: 0,
    meta_title: '',
    meta_description: '',

    blocks: [
        {
            type: 'about',
            order: 0,
            state: true,
            title: {
                text: 'Об эксперте',
                old: ''
            },
            content: {
                full_name: {
                    text: 'Константин Лашкевичa',
                    old: ''
                },
                bio_content: {
                    text: '<p>Инвестор IT, ed-tech, LMS</p>' +
                        '<p>Реальный практик корпоративного управления</p>' +
                        '<p>идеолог Позитивного Менеджмента</p>',
                    old: ''
                },
                bio_description: {
                    text: '<ul><li><span><b>№1</b> в России по трансформации корпоративной культуры для Х-кратного роста</span></li>' +
                        '<li>20 лет в бизнесе с акционерами топ Forbes</li>' +
                        '<li>11 лет управления холдингами</li>' +
                        '<li>5 лет на позиции Президента холдинга RFP Group</li>' +
                        '<li>Возглавлял холдинги “ННК” и “Вторчермет НЛМК” и вывел в лидеры рынка</li>' +
                        '<li>Инвестор в проекте Smart Expert</li></ul>',
                    old: ''
                },
                bio_image: {
                    img: '/img/editor/sec_1/konstantin.png',
                    alt: '',
                },
                companies: [
                    {
                        img: '/img/editor/sec_1/work_1.png',
                        alt: 'sdfsa',
                    },
                    {
                        img: '/img/editor/sec_1/work_2.png',
                        alt: 'adsfas',
                    },
                    {
                        img: '/img/editor/sec_1/work_3.png',
                        alt: 'asdfsa',
                    }
                ]
            }
        },
        {
            type: 'projects',
            order: 1,
            state: true,
            title: {
                text: 'Мои проекты',
                old: ''
            },
            content: {
                avatar: {
                    img: '/img/editor/sec_bio/konstantin.jpg',
                    alt: ''
                },
                full_name: {
                    text: 'Константин Лашкевич',
                    old: ''
                },
                social: [
                    {
                        name: 'fb',
                        link: ''
                    },
                    {
                        name: 'vk',
                        link: ''
                    },
                    {
                        name: 'tw',
                        link: ''
                    },
                    {
                        name: 'tg',
                        link: ''
                    },
                    {
                        name: 'in',
                        link: ''
                    },
                ],
                bio: {
                    text: '<p>Привет! ' +
                        '<br> Меня зовут Константин Лашкевич. Уже более 20 лет я в бизнесе с акционерами Forbes, 11 лет ' +
                        'управлял холдингами и выводил их в лидеры отрасли. Мой путь начался в университете, когда я ' +
                        'создал несколько бизнесов,' +
                        'чтобы оплатить свое обучение по специальности “Менеджмент”. </p>' +
                        '<p>Спустя долгие годы собственного бизнеса и управления холдингами - я собрал резульаттивные ' +
                        'практики, методы, инструменты и стратегии в методологию “Позитивного Менеджмента”. ' +
                        '<br> Я обучаю этому ТОП-менеджеров крупных' +
                        'компаний и собственников, помогая им создавать эффективные команды и выводить холдинги в лидеры ' +
                        'отрасли. </p>' +
                        '<p>Я верю в то, что мотивация людей через обучение и стремление к высоким целям создает прорывы в' +
                        ' личных и корпоративных результатах. Моя идеология подтверждена практикой и сейчас я рад передать' +
                        ' свои знания и навыки через <strong>Акселерацию Людей и Бизнесов.</strong></p>' +
                        '<p><strong><i>“Позитивный менеджмент - это новые прорывы, достижения и успех!”</i></strong> </p>',
                    old: ''
                }
            }
        },
        {
            type: 'expertize',
            order: 2,
            state: true,
            title: {
                text: 'Моя экспертность',
                old: ''
            },
            content: {
                video: {
                    link: 'https://www.youtube.com/embed/ZdODCz6y0kE',
                    alt: ''
                },
                title: {
                    text: 'Хочешь я стану твоим наставником в карьере и бизнесе для Х-кратного роста? ',
                    old: ''
                },
                description: {
                    text: 'С теми кто жаждет результатов, я готов делиться практиками, инструментами и стратегиями позитивного менеджмента.',
                    old: ''
                },
                button: {
                    text: 'ДА, ХОЧУ',
                    link: '#'
                }
            }
        },
        {
            type: 'contacts',
            order: 3,
            state: true,
            title: {
                text: 'Деловые контакты',
                old: ''
            },
            content: {
                contacts:[{}]
            }
        },
        {
            type: 'articles',
            order: 4,
            state: true,
            title: {
                text: 'Мои статьи',
                old: ''
            },
            content: {
                articles:[{}]
            }
        },
        {
            type: 'reviews',
            order: 5,
            state: true,
            title: {
                text: 'Отзывы',
                old: ''
            },
            content: {
                reviews: [
                    {
                        avatar: {
                            img: '/img/editor/sec_success_stories/evgen.jpg',
                            alt: ''
                        },
                        name: {
                            text: 'Евгений Маташ',
                            old: ''
                        },
                        job: {
                            text: 'Менеджер по работе с партнерами',
                            old: ''
                        },
                        quote: {
                            text: "“В нашей компании проходил тренинг “Позитивного Менеджмента”." +
                                " Я поставил себе две цели - которые смог достичь! " +
                                "Оказалось, все мои ограничения были сокрыты в моем мышлении. " +
                                "Я смог его изменить, и освоив новые инструменты, у меня получилось быстро вырасти!”",
                            old: ''
                        }
                    },
                    {
                        avatar: {
                            img: '/img/editor/sec_success_stories/vova.jpg',
                            alt: ''
                        },
                        name: {
                            text: 'Евгений Маташ',
                            old: ''
                        },
                        job: {
                            text: 'Менеджер по работе с партнерами',
                            old: ''
                        },
                        quote: {
                            text: "“В нашей компании проходил тренинг “Позитивного Менеджмента”." +
                                " Я поставил себе две цели - которые смог достичь! " +
                                "Оказалось, все мои ограничения были сокрыты в моем мышлении. " +
                                "Я смог его изменить, и освоив новые инструменты, у меня получилось быстро вырасти!”",
                            old: ''
                        }
                    },
                    {
                        avatar: {
                            img: '/img/editor/sec_success_stories/vitaliy.jpg',
                            alt: ''
                        },
                        name: {
                            text: 'Евгений Маташ',
                            old: ''
                        },
                        job: {
                            text: 'Менеджер по работе с партнерами',
                            old: ''
                        },
                        quote: {
                            text:  "“В нашей компании проходил тренинг “Позитивного Менеджмента”." +
                                " Я поставил себе две цели - которые смог достичь! " +
                                "Оказалось, все мои ограничения были сокрыты в моем мышлении. " +
                                "Я смог его изменить, и освоив новые инструменты, у меня получилось быстро вырасти!”",
                            old: ''
                        }
                    }
                ]
            }
        },
        {
            type: 'mentor',
            order: 6,
            state: true,
            title: {
                text: 'Я - наставник',
                old: ''
            },
            content: {
                title: {
                    text: 'Хочешь я стану твоим наставником в карьере и <br> бизнесе для кратного роста?',
                    old: ''
                },
                avatar: {
                    img: '/img/editor/sec_your_mentor/konstantin.png',
                    alt: ''
                },
                video: {
                    link: 'https://www.youtube.com/embed/ZdODCz6y0kE',
                    alt: ''
                },
                button: {
                    text: 'Да хочу!',
                    link: '#'
                }
            }
        },
    ],
}