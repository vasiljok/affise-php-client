<?php
    namespace Bytelovers\Affise\Api\Statics;

    use Bytelovers\Affise\Base;

    class Conversion extends Base {
        protected $endpointBase = "stats";

        public function getEndpointBase() {
            return $this->endpointBase;
        }

        public function setEndpointBase($endpointBase) {
            $this->endpointBase = $endpointBase;
        }

        public function getConversions($params = []) {

            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "conversions"
            ]), $params);
        }
    }
