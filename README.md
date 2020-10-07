## Notes

- Tests can be ran with `composer test`

- There is a simple demonstration of its usage in `index.php`

- Given more time I'd inject the `Courier`s into the `Batch` to aid in better
  testability and extensibility

- There is no actual logic in-place for each courier when sending off
  consignment numbers but it's been done in a way that allows each courier to
  have its own method of data transport

- I've omitted `@param` annotations where there is enough information in the function's
  signature to avoid duplication and redundancy

- Locally I have php 7.2 but ideally I'd be on 7.4 which would allow me to type
  the properties in a class

- I've followed PSR-2 and PSR-12 where possible
