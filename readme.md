## Developers
* JongUn, Kim
* Add Here


## Laravel Install

```
git clone https://github.com/airteltour/dev_workshop_2015.git dev
composer update
chmod 777 dev/storage
```

## Create Mysql Database and User
```
grant all privileges on `workshop%`.* to workshop@localhost identified by 'workshop)(!@' with grant option;
create database workshop;
```

## Database Initalize
```
cd dev
php artisan migrate
```


### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
