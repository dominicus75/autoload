# autoload

Simple [psr-4](https://github.com/dominicus75/fig-standards/blob/master/accepted/PSR-4-autoloader.md) style autolader.

Directory structure:

```bash
yourProjectRoot/
├── public/
│   ├── .htaccess
│   ├── index.php
│   ├── css/
│   ├── images/
│   ├── js/
│   └── uploads/
├── app/
│   ├── Class1Name.php
│   ├── Class2Name.php
│   └── NamespaceName/
│       ├── Class1Name.php
│       └── Class2Name.php
└── vendor/
    ├── autoload.php
    └── vendorname/
        └── PackageName/
            └── src/
                ├── Class1Name.php
                ├── Class2Name.php
                └── NamespaceName/
                    ├── Class1Name.php
                    └── Class2Name.php
```
