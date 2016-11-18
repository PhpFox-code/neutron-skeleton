Migrate Account From Others
========================================

### SocialEngine 4.

Import auth information :auth_password
Get static salt from Social Engine 4 Platform.

```php
$staticSalt  =  Engine_Api::_()->getApi('settings', 'core')->getSetting('core.secret', 'staticSalt');
```

```php
{
    "user_id": "User ID",
    "hash": "password value",
    "salt": "salt value",
    "static_salt": "$staticSalt",
    "source_id": "se"
}
```

### PhpFox

```php
{
    "user_id": "User ID",
    "hash": "password value",
    "salt": "password_salt value",
    "static_salt": "$staticSalt",
    "source_id": "se"
}
```
