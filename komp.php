<?php
    $nilai = 75; 

    $kompeten = ($nilai >= 75) ? 'Kompeten' : 'Belum Kompeten';
    $color = ($nilai >= 75) ? 'green' : 'red';

    echo "Nilai hasil: {$nilai} <span style='color: {$color};'>($kompeten)</span>";