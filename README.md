# SilverStripe-SlickNav

adds SlickNav to your theme

### installation

`composer require zazama/silverstripe-slicknav`

### configuration

```yaml
Zazama\SlickNavSiteTreeExtension:
  #ul containing your navigation
  navigationIdentifier: '#Navigation'
  
  #css breakpoint
  display_at_width: '992px'
  
  #include/don't include jQuery (true default)
  include_jquery: true
  
  #other options found @ slicknav.io inserted into the options object
  options:
    label: 'Menu'
    prependTo: 'body'
```
