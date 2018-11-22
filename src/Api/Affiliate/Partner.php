<?php

    namespace Bytelovers\Affise\Api\Affiliate;

    use Bytelovers\Affise\Base;

    class Partner extends Base {
        protected $endpointBase = "partner";

        public function getEndpointBase() {
            return $this->endpointBase;
        }

        public function setEndpointBase($endpointBase) {
            $this->endpointBase = $endpointBase;
        }

        public function getOfferList($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "offers"
            ]), $params);
        }
    }
