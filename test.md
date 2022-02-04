## Разметка часто задаваемых вопросов (FAQPage)

На странице с часто задаваемыми вопросами публикуются ответы по определенной теме. При наличии правильной разметки такие страницы могут появляться в Google Поиске в виде расширенных результатов, а также может быть создано действие для Google Ассистента. И то и другое способствует привлечению на сайт заинтересованных пользователей. Ниже приведен пример расширенного результата с часто задаваемыми вопросами.

### Описание

```php
public function getFAQPage(bool $add = true): FAQPage
```

Функция возвращает объекта структурированных данных

### Параметры функции

| Имя | Обязателен | Тип     | По умолчанию | Описание                        |
| --- | ---------- | ------- | ------------ | ------------------------------- |
| add | Нет        | Boolean | true         | Добавляет объект в общий список |

#### Пример использования

```php
use \Motokraft\BuilderSchemaOrg\BuilderSchemaOrg;

$schema = BuilderSchemaOrg::getInstance();
$faqpage = $schema->getFAQPage();

$items = [
    [
        'title' => 'What is the return policy?',
        'text' => 'Most unopened items in new condition and returned...'
    ],
    [
        'title' => 'How long does it take to process a refund?',
        'text' => 'We will reimburse you for returned items...'
    ],
    [
        'title' => 'What is the policy for late/non-delivery of items?',
        'text' => 'Our local teams work diligently to make sure...'
    ],
    [
        'title' => 'When will my credit card be charged?',
        'text' => 'Well attempt to securely charge your credit card...'
    ],
    [
        'title' => 'Will I be charged sales tax for online orders?',
        'text' => 'Local and State sales tax will be collected...'
    ]
];

foreach($items as $item)
{
    $question = $schema->getQuestion();
    $question->setName($item['title']);

    $answer = $schema->getAnswer();
    $answer->setText($item['title']);

    $question->setAcceptedAnswer($answer);
    $faqpage->addMainEntity($question);
}
```

### Возвращаемые значения

Всегда возвращает класс [**`FAQPage`**](https://github.com/motokraft/builder-schemaorg/blob/main/CreativeWork/WebPage/FAQPage.php).

## Результат вывода

```json
{
    "@context": "https://schema.org",
    "@type":"FAQPage",
    "mainEntity":[
        {
            "@type":"Question",
            "name":"What is the return policy?",
            "acceptedAnswer":{
                "@type":"Answer",
                "text":"Most unopened items in new condition and returned..."
            }
        },
        {
            "@type":"Question",
            "name":"How long does it take to process a refund?",
            "acceptedAnswer":{
                "@type":"Answer",
                "text":"We will reimburse you for returned items..."
            }
        },
        {
            "@type":"Question",
            "name":"What is the policy for late\/non-delivery of items?",
            "acceptedAnswer":{
                "@type":"Answer",
                "text":"Our local teams work diligently to make sure..."
            }
        },
        {
            "@type":"Question",
            "name":"When will my credit card be charged?",
            "acceptedAnswer":{
                "@type":"Answer",
                "text":"Well attempt to securely charge your credit card..."
            }
        },
        {
            "@type":"Question",
            "name":"Will I be charged sales tax for online orders?",
            "acceptedAnswer":{
                "@type":"Answer",
                "text":"Local and State sales tax will be collected..."
            }
        }
    ]
}
```