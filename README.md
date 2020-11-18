# autoload
Simple [psr-4](https://github.com/dominicus75/fig-standards/blob/master/accepted/PSR-4-autoloader.md) style autolader

Directory structure:

yourProject/
├── public/
│   ├── .htaccess
│   ├── index.php
│   ├── css/
│   ├── images/
│   ├── js/
│   └── uploads/
├── app/
│   ├── class1Name.php
│   ├── class2Name.php
│   └── subNamespaceName/ 
│       ├── class1Name.php
│       └── class2Name.php
└── vendor/
    ├── autoload.php
    └── vendorName/
        └── packageName/
            └── src/
                ├── class1Name.php
                ├── class2Name.php
                └── subNamespaceName/ 
                    ├── class1Name.php
                    └── class2Name.php
