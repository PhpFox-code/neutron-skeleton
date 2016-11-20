App bootstrap flow.
============================

STEP 01:
- Create singleton object
  * `Autoloader` is create
  * `EventManager`
  * `ServiceManager`

STEP 02:
- Create `Config` object
  * `Config` will load application configuration
  * `Config` check enable module
  * `Config` will be extended by module configure.
  
STEP 03:
- Extend singleton object
  * `Autoaloader` will be extended
  * `EventManager` will be extended
  * `ServiceManager`

STEP 04:
- `EventManager` will call `onApplicationInit` to enable project

Should cache STEP 02 and STEP 03 for later.

    
  
  