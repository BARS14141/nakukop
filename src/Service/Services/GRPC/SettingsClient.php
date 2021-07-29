<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2015 gRPC authors.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace App\Service\Services\GRPC;

/**
 * Interface exported by the server.
 */
class SettingsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * A simple RPC.
     *
     * Obtains the feature at a given position.
     *
     * A feature with an empty name is returned if there's no feature at the given
     * position.
     * @param \App\Service\Services\GRPC\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getField1(\App\Service\Services\GRPC\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Settings/getField1',
        $argument,
        ['\App\Service\Services\GRPC\Field1', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Service\Services\GRPC\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getField2(\App\Service\Services\GRPC\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Settings/getField2',
        $argument,
        ['\App\Service\Services\GRPC\Field2', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Service\Services\GRPC\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getField3(\App\Service\Services\GRPC\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Settings/getField3',
        $argument,
        ['\App\Service\Services\GRPC\Field3', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Service\Services\GRPC\Field1 $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function setField1(\App\Service\Services\GRPC\Field1 $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Settings/setField1',
        $argument,
        ['\App\Service\Services\GRPC\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Service\Services\GRPC\Field2 $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function setField2(\App\Service\Services\GRPC\Field2 $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Settings/setField2',
        $argument,
        ['\App\Service\Services\GRPC\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Service\Services\GRPC\Field3 $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function setField3(\App\Service\Services\GRPC\Field3 $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Settings/setField3',
        $argument,
        ['\App\Service\Services\GRPC\Response', 'decode'],
        $metadata, $options);
    }

}
