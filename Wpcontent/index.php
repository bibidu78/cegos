<?php

if (CacheRead('wp_content_dates' . $wp_item['post_name']) != $wp_item['post_modified']) {
    $middleware = APP . 'Frame' . DS . 'Middleware';
    $content = reuseableBlock($wp_item['post_content']);
    if (isset($_GET['display']) && $_GET['display'] == "image") {
        $content = str_replace('https://admin.cegos.fr/app/', 'https://admin.cegos.fr/content/', $content);
        $re = '#[-a-zA-Z0-9@:%_\+.~\#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~\#?&//=]*)?\.(png|jpg)#si';
        $content = preg_replace_callback($re, function ($matches) {
            $prefix = denv("PREFIX") ?? "";
            $test = implode('/', array_slice(explode('/', str_slice($matches[1], 1)), -3)) . '.' . $matches[2];
            $awsImage = FindFirst([
                "table" => "{$prefix}as3cf_items",
                "where" => [
                    "original_source_path" => $test
                ],
                "database" => "wordpress",
            ]);
            return "https://static3.cegos.fr/{$awsImage['path']}";
        }, $content);
    }
    $pattern = '/<!--.*-->/i';
    $content = preg_replace($pattern, '', $content);
    if (is_dir($middleware)) {
        $middleware = glob($middleware . DS . '*.php');
        foreach ($middleware as $key => $value) {
            $value = pathinfo($value, PATHINFO_FILENAME);
            if (function_exists($value)) {
                $content = $value($content, $wp_item);
            }
        }
    }
    $content =  BuildHtml([
        [
            "attributes" => ["class" => "Content"],
            "content" => $content
        ]
    ]);
    $content = CacheWrite('wp_contents' . $wp_item['post_name'], $content);
    CacheWrite('wp_content_dates' . $wp_item['post_name'], $wp_item['post_modified']);
    echo $content;
} else {
    echo CacheRead('wp_contents' . $wp_item['post_name'], [], "1");
}
