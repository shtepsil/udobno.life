<?php
namespace frontend\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

class Menu extends Widget
{
    public array $items = [];
    public array $options = [];

    public function run(): string
    {
        $navClass  = $this->options['class'] ?? 'header-nav';
        $ulClass   = $this->options['ulClass'] ?? 'header-nav-list';
        $liClass   = $this->options['liClass'] ?? 'header-nav-item';
        $linkClass = $this->options['linkClass'] ?? 'header-nav-link';

        $currentRoute = Yii::$app->controller->route;
        $currentParams = Yii::$app->request->queryParams;

        $html  = Html::beginTag('nav', ['class' => $navClass]);
        $html .= Html::beginTag('ul', ['class' => $ulClass]);

        foreach ($this->items as $item) {
            $label = $item['label'] ?? '';
            $url   = $item['url'] ?? '#';

            // --- Преобразуем /site/index в '/' для ссылки на главную
            if (is_array($url) && isset($url[0]) && $url[0] === '/site/index') {
                $link = Url::to(['/']); // корень сайта
                $isActive = ($currentRoute === 'site/index'); // активность главной
            } else {
                $link = Url::to($url);
                $isActive = $this->isItemActive($url, $currentRoute, $currentParams);
            }

            $linkOptions = [
                'class' => $linkClass . ($isActive ? ' active' : '')
            ];

            $html .= Html::beginTag('li', ['class' => $liClass]);
            $html .= Html::a($label, $link, $linkOptions);
            $html .= Html::endTag('li');
        }

        $html .= Html::endTag('ul');
        $html .= Html::endTag('nav');

        return $html;
    }

    /**
     * Определяет активный пункт меню
     */
    protected function isItemActive($url, string $currentRoute, array $currentParams): bool
    {
        if (!is_array($url)) {
            return false;
        }

        $route = ltrim($url[0], '/');

        if ($route !== $currentRoute) {
            return false;
        }

        // Проверяем GET-параметры (если есть)
        unset($url[0]);
        foreach ($url as $name => $value) {
            if (!isset($currentParams[$name]) || $currentParams[$name] != $value) {
                return false;
            }
        }

        return true;
    }
}
