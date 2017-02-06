yii2-tree-view
==============
Виджет tree-view. CTreeview из yii1 для yii2. Используеться [jquery-treeview](https://github.com/jzaefferer/jquery-treeview) . [CTreeview](http://www.yiiframework.com/doc/api/1.1/CTreeView)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist lesha724/yii2-tree-view "*"
```

or add

```
"lesha724/yii2-tree-view": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \lesha724\treeview\TreeView::widget(); ?>```