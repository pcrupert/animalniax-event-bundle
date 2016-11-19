# Animalniax Event Bundle

This bundle provides classes and doctrine mappings for Animalniax Event Manager

## Instalation

1) Update your **composer.json**

```json
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:pcrupert/animalniax-event-bundle.git"
    }
]
```

```json
"require": {
    "animalniax/eventbundle": "dev-master"
}

```

2) Register the bundle in **AppKernel.php**

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Animalniax\EventBundle\AnimalniaxEventBundle(),
    );
}
```

3) Register configuration settings in **app/config/config.yml**

```yaml

imports:
    ...
    - { resource: @AnimalniaxEventBundle/Resources/config/config.yml }
    ...
```

4) Register configuration settings in **app/config/routing.yml**

```yaml

animalniax_event:
    resource: "@AnimalniaxEventBundle/Resources/config/routing.yml"
    prefix:   /

```
