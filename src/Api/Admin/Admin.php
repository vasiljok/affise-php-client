<?php
    namespace Bytelovers\Affise\Api\Admin;

    use Bytelovers\Affise\Base;

    class Admin extends Base {
        protected $endpointAdminBase = "admin";

        public function getEndpointAdminBase() {
            return $this->endpointAdminBase;
        }

        public function getAdminEndpointBase() {
            return implode("/", [
                $this->getEndpointAdminBase()
            ]);
        }
    }
