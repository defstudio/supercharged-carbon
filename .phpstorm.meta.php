<?php
/*
 * Copyright (C) 2021. Def Studio
 *  Unauthorized copying of this file, via any medium is strictly prohibited
 *  Authors: Fabio Ivona <fabio.ivona@defstudio.it> & Daniele Romeo <danieleromeo@defstudio.it>
 */

namespace Carbon\Carbon {

    class CarbonInterface
    {
        public function isHoliday(): bool;

        public function isLiberationDay(): bool;

        public function isRepublicDay(): bool;

        public function isImmaculateConceptionFeast(): bool;

        public function isAssumptionOfMaryFeast(): bool;

        public function isEpiphany(): bool;

        public function isSaintStephenDay(): bool;

        public function isSaintSylvesterDay(): bool;

        public function isWorkersDay(): bool;

        public function isWorkday(): bool;

        public function addWorkdays($count = 1): self;
    }
}
