<?php

namespace Polash\Minilara\View;

class View
{
    public static function make($view, $params = [])
    {
        $baseContent = self::getBaseContent();
        $viewContent = self::getViewContent($view, $params, false);

        echo str_replace('{{ content }}', $viewContent, $baseContent);
    }

    public static function makeError($error)
    {
        self::getViewContent($error, [], true);
    }

    public static function getBaseContent()
    {
        ob_start();
        include base_path() . 'views/layouts/app.php';
        return ob_get_clean();
    }

    public static function getViewContent($view, $params = [], $isError = false)
    {
        $path = $isError ? view_path() . 'errors/' : view_path();

        if (str_contains($view, '.')) {
            $views = explode('.', $view);

            foreach ($views as $view) {
                if (is_dir($path.$view)) {
                    $path = $path.$view.'/';
                }
            }
            $view = $path.end($views).'.php';
        } else {
            $view = $path.$view.'.php';
        }

        foreach ($params as $key => $value) {
            $$key = $value;
        }

        if ($isError) {
            include $view;
        } else {
            ob_start();
            include $view;
            return ob_get_clean();
        }
    }
}