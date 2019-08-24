# Create Customers

```shell
php artisan tinker
>>> $customer = new Customer();
>>> $customer->name = 'User 001'
>>> $customer->save();
>>> $customer1-> new Customer();
>>> $customer1->nmae = 'User 002';
>>> $customer1->save();
>>> exit()
```