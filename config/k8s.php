<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection
    |--------------------------------------------------------------------------
    |
    | The default connection that PHP K8s will connect to.
    |
    */

    'default' => env('KUBE_CONNECTION', null),

    'connections' => [

        /*
        |--------------------------------------------------------------------------
        | Kubeconfig Driver
        |--------------------------------------------------------------------------
        |
        | Kubeconfig Driver works by reading from the KubeConfig file
        | and then selecting a specific context to work with.
        | Please see the documentation on contexts:
        | https://kubernetes.io/docs/tasks/access-application-cluster/configure-access-multiple-clusters/
        |
        */

        'kubeconfig' => [
            'driver' => 'kubeconfig',
            'path' => env('KUBECONFIG_PATH', '/.kube/config'),
            'context' => env('KUBECONFIG_CONTEXT', 'minikube'),
        ],

        /*
        |--------------------------------------------------------------------------
        | HTTP Driver
        |--------------------------------------------------------------------------
        |
        | Proxy Driver works by directly making a request to the API URL using
        | the HTTP authentication through username and password.
        |
        */

        'http' => [
            'driver' => 'http',
            'host' => env('KUBE_HOST', '127.0.0.1'),
            'port' => env('KUBE_PORT', 8080),
            'ssl' => [
                'certificate' => env('KUBE_CERTIFICATE_PATH', null),
                'key' => env('KUBE_KEY_PATH', null),
                'ca' => env('KUBE_CA_PATH', null),
                'verify' => env('VERIFY_SSL', true),
            ],
            'auth' => [
                'username' => env('KUBE_HTTP_USER', null),
                'password' => env('KUBE_HTTP_PASSWORD', null),
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Bearer Token Driver
        |--------------------------------------------------------------------------
        |
        | Proxy Driver works by directly making a request to the API URL using
        | the bearer token authentication.
        |
        */

        'token' => [
            'driver' => 'token',
            'host' => env('KUBE_HOST', '127.0.0.1'),
            'port' => env('KUBE_PORT', 8080),
            'ssl' => [
                'certificate' => env('KUBE_CERTIFICATE_PATH', null),
                'key' => env('KUBE_KEY_PATH', null),
                'ca' => env('KUBE_CA_PATH', null),
                'verify' => env('VERIFY_SSL', true),
            ],
            'token' => env('KUBE_BEARER_TOKEN', null),
        ],

    ],

];