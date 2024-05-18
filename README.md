# Rest-api

REST API implementation in PHP with bare minimum setup. This is only an implementation for the proof of concept.

## Configuration

### Database
Database Configuration is  located in the following file at ```inc/config.php ```

After forking pls update the following  database Credentials before running it.
 

```php
define("DB_HOST","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_DATABASE_NAME",'rest-api');
``` 
### Error Reporting
Error Reporting behaviour can be toggled from ```inc/bootstrap.php``` file.\
Toggle the following values based on your requirement
```php
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(E_ALL);
```

## Directory Structure  
``` bash
├── Controller
│   └── Api
│       ├── BaseController.php
│       └── UserController.php
├── inc
│   ├── bootstrap.php
│   └── config.php
├── index.php
└── Model
    ├── Database.php
    └── UserModel.php
```


## Usage
One can serve it locally via terminal or on any server daemon. I've served it locally using the following command
```bash
php -S localhost:4300
```



## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.


## License

[MIT](https://choosealicense.com/licenses/mit/)
