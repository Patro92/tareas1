
<html>
<body>
Lista de entradas:
<ul>
<?php

foreach($data as $d){ ?>
    <li><a href="http://docencia.eit.udp.cl/~18274151/desarrollo_web/swisstool/index.php/Welcome/byid/<?php echo $d->id ?>"><?php   echo $d->title ?></a> <a href="http://docencia.eit.udp.cl/~18274151/desarrollo_web/swisstool/index.php/Welcome/loadupdate/<?php echo $d->id ?>"><?php   echo "modificar entrada" ?></a>
</li>
<?php }
?>

<a href="http://docencia.eit.udp.cl/~18274151/desarrollo_web/swisstool/index.php/Welcome/loadinsert/"><?php   echo "nueva entrada" ?></a><br> 

</ul>
</body>
</html>
