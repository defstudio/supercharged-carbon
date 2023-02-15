<?php
/*
 * Copyright (C) 2021. Def Studio
 *  Unauthorized copying of this file, via any medium is strictly prohibited
 *  Authors: Fabio Ivona <fabio.ivona@defstudio.it> & Daniele Romeo <danieleromeo@defstudio.it>
 */

/** @noinspection DuplicatedCode */

/** @noinspection PhpUndefinedFieldInspection */

use Carbon\Carbon;
use Illuminate\Support\Carbon;


if (!function_exists('carbon')) {
    function carbon(mixed $datetime): Carbon|null
    {
        return Carbon::make($datetime);
    }
}
