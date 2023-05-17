<?php

$customer1 = (new CustomerBuilder())
->setName("abdullah")
->setAddress("gresik")
->setAge(20)
->build();
print($customer1->getName());
