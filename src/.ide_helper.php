<?php

namespace Dcat\Utils\Cast
{
    /**
     * @method static array allow(array $fields, array $row, bool $addAllAllowedFields = false)
     * @method static array deny(array $fields, array $row, bool $addAllAllowedFields = false)
     * @method static array nullable(array $fields, array $row, bool $addAllAllowedFields = false)
     * @method static array rename(array $renameFields, array $row, bool $addAllAllowedFields = false)
     * @method static array default(array $fields, array $row, bool $addAllAllowedFields = false)
     */
    class Caster
    {
    }
}

namespace Illuminate\Support
{
    /**
     * @method $this allDuplicates($keyOrCallback, bool $strict = false)
     * @method $this rename(array $newKeys = null)
     */
    class Collection
    {
    }
}


namespace Illuminate\Database\Query
{
    /**
     * @method mixed insertOrReplace(array $values)
     */
    class Builder
    {
    }
}
