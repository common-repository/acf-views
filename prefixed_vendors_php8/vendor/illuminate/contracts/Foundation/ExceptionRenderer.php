<?php

namespace Org\Wplake\Advanced_Views\Optional_Vendors\Illuminate\Contracts\Foundation;

interface ExceptionRenderer
{
    /**
     * Renders the given exception as HTML.
     *
     * @param  \Throwable  $throwable
     * @return string
     */
    public function render($throwable);
}