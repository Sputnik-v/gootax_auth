<?php

function setHtmlPages(string $html): string
{
    return $html;
}

function getTitle(string $req): string
{
    return match ($req) {
        '/' => 'home',
        '/feedback' => 'feedback',
        default => '404',
    };

}