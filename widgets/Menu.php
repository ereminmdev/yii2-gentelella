<?php

namespace ereminmdev\yii2\gentelella\widgets;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Menu extends \yii\widgets\Menu
{
    /**
     * @inheritdoc
     */
    public $labelTemplate = '{label}';

    /**
     * @inheritdoc
     */
    public $linkTemplate = '<a href="{url}">{icon}<span>{label}</span>{badge}</a>';

    /**
     * @inheritdoc
     */
    public $submenuTemplate = "\n<ul class=\"nav child_menu\">\n{items}\n</ul>\n";

    /**
     * @inheritdoc
     */
    public $activateParents = true;

    /**
     * @inheritdoc
     */
    public function init()
    {
        Html::addCssClass($this->options, 'nav side-menu');
        parent::init();
    }

    /**
     * @inheritdoc
     */
    protected function renderItem($item)
    {
        $renderedItem = parent::renderItem($item);

        if (isset($item['badge'])) {
            $badgeOptions = ArrayHelper::getValue($item, 'badgeOptions', []);
            Html::addCssClass($badgeOptions, 'label pull-right');
        } else {
            $badgeOptions = null;
        }

        $iconOptions = ArrayHelper::getValue($item, 'iconOptions', []);
        Html::addCssClass($iconOptions, 'fa fa-' . ArrayHelper::getValue($item, 'icon', ''));

        return strtr($renderedItem, [
            '{icon}' => isset($item['icon']) ? Html::tag('i', '', $iconOptions) : '',
            '{badge}' => (
                isset($item['badge'])
                    ? Html::tag('small', $item['badge'], $badgeOptions)
                    : ''
                ) . (
                isset($item['items']) && count($item['items']) > 0
                    ? '<span class="fa fa-chevron-down"></span>'
                    : ''
                ),
        ]);
    }
}
