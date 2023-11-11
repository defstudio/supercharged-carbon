### Carbon helper function

`carbon('2018-04-18')` returns a carbon instance

- addWorkdays($count): self
- isHoliday()
- isWorkday()

#### italians holidays

- isLiberationDay()
- isRepublicDay()
- isImmaculateConceptionFeast()
- isAssumptionOfMaryFeast()
- isEpiphany()   
- isDayBeforeChristmas()
- isChristmas()     
- isSaintStephenDay()
- isSaintSylvesterDay()
- isWorkersDay()     
- isEasterDay()     
- isEasterMonday()     



## Upgrading

### v1.x → v2.x

`->isHoliday()` does not answer `true` for Saturdays and Sundays, so, to obtain the same result as in v1.x this:

```php
$date->isHoliday()
```

should be changed to:

```php
!$date->isWorkday()
```

or

```php
$date->isHoliday() || $date->isWeekend()
```