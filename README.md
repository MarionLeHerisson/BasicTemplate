# BasicTemplate
### ! Warning !
I don't recommand its usage since I found some issues ! Be patient and wait for me to fix it :)

### What's that ?
My home-made basic template to create simple websites.

Simple MVC with clean URLs. Includes some Google fonts, jquery, Bootstrap css & js.

### How to
In the project, search everything like "basic_template" and replace it with your website/directory name.
Application/Model folder contains one file per table in your database. "someTableNameModel.php" is an example.
Also fill 'prod_const.php' and put it in your .gitignore.

### Improvements to come
- clean error handling
- command line tool for initialisation

### Files tree
```
host root/
├── Application/
|   ├── Controller/
|   |   └── <controller files>
|   ├── Model/
|   |   ├── Ajax/
|   |   |    └── <ajax files>
|   |   ├── Service/
|   |   |    └── <service files>
|   |   ├── defaultModel.php
|   |   └── <model files>
|   └── View/
|       └── <view files>
├── library/
|   └── <library files>
├── www/
|   ├── css/
|   |   ├── <bootstrap style files>
|   |   └── <custom css files>
|   ├── js/
|   |   ├── <jquery files>
|   |   ├── <bootstrap script files>
|   |   └── <custom js files>
|   ├── sql/
|   ├── .htaccess
|   └── index.php
├── .gitignore
├── const.php
├── noscript.php
└── prod_const.php
```


Hope you enjoy it ! Every feedback is appreciated :)
