# Carbon Field - Text Mask
A easy way to set a mask on a input field

You can see the defaults masks and options on [jQuery Mask Plugin Website](https://igorescobar.github.io/jQuery-Mask-Plugin/)

## Example
```php
Field::make( 'text_mask', 'money' )
	->set_mask( '#.##0,00', array( 'reverse' => true ) )
```
