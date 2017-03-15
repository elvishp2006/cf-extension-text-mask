# Carbon Field - Text Mask
A easy way to set a mask on a input field

## Example
```php
Field::make( 'text_mask', 'money' )
	->set_mask( '#.##0,00', array( 'reverse' => true ) )
```
