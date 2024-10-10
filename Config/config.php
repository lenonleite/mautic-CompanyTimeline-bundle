<?php
return [
    'name'        => 'Leuchtfeuer Digital Marketing GmbH',
    'description' => 'This plugin will create a timeline for companies at view page.',
    'version'     => '1.0.0',
    'author'      => 'Leuchtfeuer Digital Marketing GmbH',
    'services'    => [
        'integrations' => [
            'mautic.integration.leuchtfeuercompanytimeline' => [
                'class' => \MauticPlugin\LeuchtfeuerCompanyTimelineBundle\Integration\LeuchtfeuerCompanyTimelineIntegration::class,
                'tags'  => [
                    'mautic.integration',
                    'mautic.basic_integration',
                ],
            ],
            'mautic.integration.leuchtfeuercompanytimeline.configuration' => [
                'class' => \MauticPlugin\LeuchtfeuerCompanyTimelineBundle\Integration\Support\ConfigSupport::class,
                'tags'  => [
                    'mautic.config_integration',
                ],
            ],
            'mautic.integration.leuchtfeuercompanytimeline.config' => [
                'class' => \MauticPlugin\LeuchtfeuerCompanyTimelineBundle\Integration\Config::class,
                'tags'  => [
                    'mautic.integrations.helper',
                ],
            ],
        ],
    ],
];
