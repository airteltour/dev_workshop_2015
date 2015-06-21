## Developers
* JongUn, Kim
* OhSung, Cho


## Create Mysql Database and User
```
mysql> grant all privileges on `workshop%`.* to workshop@localhost identified by 'workshop)(!@' with grant option;
mysql> create database workshop;
```

## Laravel Install

```
git clone https://github.com/airteltour/dev_workshop_2015.git dev
cd dev
chmod 777 storage -R
composer update
```

## Database Initialize
```
php artisan migrate
```


### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
