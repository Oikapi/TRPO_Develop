<?php

&arr["login"] = &_POST["login"];
&arr["password"] = &_POST["password"];
&arr["type"] = &_POST["type"];
&arr["remember_me"] = &_POST["remember_me"];

echo json_encode($arr);
