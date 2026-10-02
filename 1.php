<table>
<?php for($d=0;$d<=9;$d++): ?>
<tr>
  <?php for($u=0;$u<=9;$u++): $n=$d*10+$u; ?>
    <td><?=$n*$n?></td>
  <?php endfor; ?>
</tr>
<?php endfor; ?>
</table>
