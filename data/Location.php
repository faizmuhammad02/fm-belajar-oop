<?php

namespace Data;

use Locale;

abstract class Location // gabisa bikin new location() karena ini adalah kelas abstract
{
    public string $name;
}

class City extends Location
{
}

class Province extends Location
{
}
class Country extends Location
{
}
