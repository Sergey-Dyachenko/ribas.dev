<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'View posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Articles</h1>
<table style="border: 1px solid #ccc; " >
<th style="text-align: center; border: 1px solid #ccc;">Title</th>
<th style="text-align: center; border: 1px solid #ccc;">Image</th>
<th style="text-align: center; border: 1px solid #ccc;">Text</th>
<th style="text-align: center; border: 1px solid #ccc;">Date</th>
 <?php   foreach ($articles as $article):?>
      <tr>
        <td style="padding: 10px 20px; border: 1px solid #ccc; ">
            <?= $article->title; ?>
        </td>
        <td style="padding: 10px 20px; border: 1px solid #ccc;">
            <?= $article->image;?>
        </td>
        <td style="padding: 10px 20px; border: 1px solid #ccc;">
            <?= $article->text;?>
        </td>
        <td style="padding: 10px 20px; border: 1px solid #ccc;">
            <?= $article->date ?>
        </td>
      </tr>
<?php endforeach;?>
</table>
