<?php

declare(strict_types=1);

namespace newrelic;

if (!\extension_loaded('newrelic')) {
    class DistributedTracePayload
    {
        /**
         * @var string
         */
        private $text = '';

        /**
         * @return string
         */
        public function httpSafe(): string
        {
            return $this->text;
        }

        /**
         * @return string
         */
        public function text(): string
        {
            return $this->text;
        }
    }
}
