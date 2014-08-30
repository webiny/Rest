<?php

/**
 * This is an auto generated file by Webiny Rest component.
 * Please do not edit this file because the changes might break your REST Api.
 *
 * @rest.class Webiny\Component\Rest\Tests\Mocks\MockApiClassRouter
 * @rest.version v1.0
 * @rest.buildDate Wed, 27. Aug, 2014 00:09:51
 */

$a = array(
    'class'             => 'Webiny\\Component\\Rest\\Tests\\Mocks\\MockApiClassRouter',
    'cacheKeyInterface' => false,
    'accessInterface'   => false,
    'version'           => '1.0',
    'post'              => array(
        'default-no-params-post/' => array(
            'default'     => '',
            'role'        => false,
            'method'      => 'defaultNoParamsPost',
            'urlPattern'  => 'default-no-params-post',
            'cache'       => array(
                'ttl' => 0,
            ),
            'header'      => array(
                'cache'  => array(
                    'expires' => 0,
                ),
                'status' => array(
                    'success'      => 201,
                    'error'        => 404,
                    'errorMessage' => '',
                ),
            ),
            'rateControl' => array(),
            'params'      => array(),
        ),
    ),
    'get'               => array(
        'default-one-param-not-required/([\\w-]+)/'                    => array(
            'default'     => '',
            'role'        => false,
            'method'      => 'defaultOneParamNotRequired',
            'urlPattern'  => 'default-one-param-not-required',
            'cache'       => array(
                'ttl' => 0,
            ),
            'header'      => array(
                'cache'  => array(
                    'expires' => 0,
                ),
                'status' => array(
                    'success'      => 200,
                    'error'        => 404,
                    'errorMessage' => '',
                ),
            ),
            'rateControl' => array(),
            'params'      => array(
                'param' => array(
                    'required' => false,
                    'type'     => 'string',
                    'default'  => 'd3f',
                ),
            ),
        ),
        'default-two-param/([\\d]+)/([\\w-]+)/'                        => array(
            'default'     => '',
            'role'        => false,
            'method'      => 'defaultTwoParam',
            'urlPattern'  => 'default-two-param',
            'cache'       => array(
                'ttl' => 0,
            ),
            'header'      => array(
                'cache'  => array(
                    'expires' => 0,
                ),
                'status' => array(
                    'success'      => 200,
                    'error'        => 404,
                    'errorMessage' => '',
                ),
            ),
            'rateControl' => array(),
            'params'      => array(
                'p1'    => array(
                    'required' => true,
                    'type'     => 'integer',
                    'default'  => null,
                ),
                'param' => array(
                    'required' => false,
                    'type'     => 'string',
                    'default'  => 'd3f',
                ),
            ),
        ),
        'test-integer/([\\d]+)/'                                       => array(
            'default'     => false,
            'role'        => false,
            'method'      => 'testInteger',
            'urlPattern'  => 'test-integer',
            'cache'       => array(
                'ttl' => 0,
            ),
            'header'      => array(
                'cache'  => array(
                    'expires' => 0,
                ),
                'status' => array(
                    'success'      => 200,
                    'error'        => 404,
                    'errorMessage' => '',
                ),
            ),
            'rateControl' => array(),
            'params'      => array(
                'int' => array(
                    'required' => true,
                    'type'     => 'integer',
                    'default'  => null,
                ),
            ),
        ),
        'test-string-int-default-string/([\\w-]+)/([\\d]+)/([\\w-]+)/' => array(
            'default'     => '',
            'role'        => false,
            'method'      => 'testStringIntDefaultString',
            'urlPattern'  => 'test-string-int-default-string',
            'cache'       => array(
                'ttl' => 0,
            ),
            'header'      => array(
                'cache'  => array(
                    'expires' => 0,
                ),
                'status' => array(
                    'success'      => 200,
                    'error'        => 404,
                    'errorMessage' => '',
                ),
            ),
            'rateControl' => array(),
            'params'      => array(
                'p1' => array(
                    'required' => true,
                    'type'     => 'string',
                    'default'  => null,
                ),
                'p2' => array(
                    'required' => true,
                    'type'     => 'integer',
                    'default'  => null,
                ),
                'p3' => array(
                    'required' => false,
                    'type'     => 'string',
                    'default'  => 'd3f',
                ),
            ),
        ),
    ),
);


return $a;