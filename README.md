
## Uuid For Key ##
 
### Installation ###
 
```
    composer require oniti/uuid-for-key
```

### Exemple ###

```
    <?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Oniti\UuidForKey\UuidForKey;

    use Context;
    use DB;

    class Article extends Model
    {
        use UuidForKey;

        public $incrementing = false;
        protected $primaryKey = 'uuid';
    }

    ?>
```