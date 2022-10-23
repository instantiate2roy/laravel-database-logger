# Laravel Database Logger

Laravel database logger is a laravel feature developed to allow laravel to save log information to a database table.

The supposed logs/messages/error info would be added to the database table `message_log`

## Installation

Not required, you can clone this repo and build your application on top

## Usage

The database logger use a table called *message_log*
This table is created when you run migrations.

```php
    
    // You may log the message with out passing contextual data as show below
    
    Log::channel('db')->info('info message');
    Log::channel('db')->error('error message');
    Log::channel('db')->warning('warning message');
    Log::channel('db')->emergency('emergency message');
    Log::channel('db')->critical('crtical message');
    Log::channel('db')->alert('alert message');
    Log::channel('db')->notice('notice message');
    Log::channel('db')->debug('crtical message');
    
    /*
        If you require additional info please add the contextual data with the keys below
        
        'log_type', 'log_url', 'log_cat1', 'log_cat2', 'log_cat3', 
        'log_cat4', 'log_cat5', 'log_cat6', 'log_cat7', 'log_cat8', 
        'log_cat9', 'log_cat10'
    
    */
    
    //For example to log an error with the url, you may follow the example below
    Log::channel('db')->error('My error/exception msg', ['log_url' => '/myurl']);
      

```

## License

[MIT](https://choosealicense.com/licenses/mit/)
