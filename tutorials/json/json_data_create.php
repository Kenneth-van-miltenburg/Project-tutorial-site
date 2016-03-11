<?php
    include("../../db_connect.php");

    $query = "INSTER INTO `register` (`id`,
                                      `role`)
                        VALUES       (NULL,
                                    '".$_POST["userrole"]."');";

    mysqli_connect($conn,$query);

?>